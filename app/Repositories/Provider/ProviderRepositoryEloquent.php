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

/**
 * Class ProviderRepositoryEloquent.
 *
 * @package namespace App\Repositories\Provider;
 */
class ProviderRepositoryEloquent extends AppRepository
{

    protected $fieldSearchable = [
        'applicant_name' => 'like',
        'business_name' => 'like',
        'rfc' => 'like',
    ];

    private $file_to_date = [
        'constancia_situacion_fiscal_file' => 'constancia_situacion_fiscal_date',
        'formato_32d_file' => 'formato_32d_date',
        'estado_cuenta_file' => 'estado_cuenta_date',
        'comprobante_domicilio_file' => 'comprobante_domicilio_date',
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

    public function list(){
        
        $this->when(current_role('id') == 2, function($query){
            $query->where('user_id', request()->user()->id);
        });

        $this->with(['account_bank', 'retention_types', 'retention_indicators', 'provider_sap']);
        return $this->customPaginate();
    }

    public function save($data){
        
        $data['user_id'] = request()->user()->id;

        // dd();

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
            $currentFile = $data[ $document->file_input_name ] ?? null;
            
            if(!is_null($currentFile)){

                $dateKey = $this->file_to_date[$document->file_input_name] ?? null;
                $date = $data[$dateKey] ?? null;

                $documentProvider = new ProviderDocument();
                $documentProvider->provider_id = $provider_id;
                $documentProvider->document_id = $document->id;
                $documentProvider->date = $date;
                $documentProvider->name = 'temp';
                $documentProvider->save();

                $file =  new File($currentFile);

                $name =  basename(Storage::disk('local')->putFileAs($document->folder, $file, "{$documentProvider->id}-{$file->hashName()}"));

                $documentProvider->name = $name;
                $documentProvider->save();
            }
        }


    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
