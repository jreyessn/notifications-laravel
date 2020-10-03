<?php

namespace App\Repositories\Provider;

use App\Models\Document;
use Illuminate\Http\File;

use App\Models\Provider\Provider;
use App\Repositories\AppRepository;
use Illuminate\Support\Facades\Storage;
use App\Models\Provider\ProviderDocument;
use App\Models\Provider\ProviderReference;
use App\Models\Provider\ProviderAccountBank;
use App\Validators\Provider\ProviderValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Provider\ProviderRepository;

/**
 * Class ProviderRepositoryEloquent.
 *
 * @package namespace App\Repositories\Provider;
 */
class ProviderRepositoryEloquent extends AppRepository implements ProviderRepository
{

    protected $fieldSearchable = [
        'applicant_name' => 'like',
        'business_name' => 'like',
        'rfc' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Provider::class;
    }

    public function save($data){
        
        $data['user_id'] = 1;

        $store = $this->create($data);
        
        $data['provider_id'] = $store->id;

        ProviderAccountBank::create($data);
        
        $store->retention_types()->sync($data['retention_type_id']);
        $store->retention_indicators()->sync($data['retention_indicator_id']);

        $this->saveReferences($data);
        $this->saveDocuments($data);

        return $store;
    }    

    public function saveReferences($data){
        $references = array();

        foreach($data['reference_provider_name'] as $key => $value) {
            array_push($references, [
                'provider_id' => $data['provider_id'],
                'business_name' => $data['reference_provider_name'][$key],
                'contact' => $data['reference_contact'][$key],
                'phone' => $data['reference_phone'][$key],
                'email' => $data['reference_email'][$key],
            ]);
        }

        ProviderReference::insert($references);
    }

    public function saveDocuments($data){
        $documentsSave = array();
        $provider_id = $data['provider_id'];
        $documents = Document::all();

        foreach($documents as $document){
            $currentFile = array_key_exists($document->file_input_name, $data)? $data[ $document->file_input_name ] : null;
            
            if(!is_null($currentFile)){

                $file =  new File($currentFile);
                $name =  basename(Storage::disk('local')->putFile($document->folder, $file));
                $document_id = $document->id;

                array_push($documentsSave, compact('provider_id', 'name', 'document_id'));                           
            }
        }

        ProviderDocument::insert($documentsSave);
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
