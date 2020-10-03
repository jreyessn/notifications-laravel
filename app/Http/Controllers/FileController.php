<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\File\FileStoreRequest;
use App\Http\Requests\File\FileUpdateRequest;
use App\Repositories\File\FileRepositoryEloquent;

class FileController extends Controller
{
    private $fileRepository;

    public function __construct(
        FileRepositoryEloquent $fileRepository
    ){
        $this->fileRepository = $fileRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->fileRepository->customPaginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileStoreRequest $request)
    {

        try {
            DB::beginTransaction();

            $data = $request->all();
            $file = $request->file("file");
            $type = $request->type;
            
            $data['name'] = basename(Storage::disk('local')->putFile($type, new File($file)));
            
            $store = $this->fileRepository->create($data);
            
            DB::commit();

            return response()->json([
                "message" => "Registro éxitoso",
                "data" => $store
            ], 201);
        } 
        catch (\Exception $th) {
            DB::rollback();

            return response()->json(['message' => $th->getMessage()], 500);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->fileRepository->find($id); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FileUpdateRequest $request, $id)
    {
        DB::beginTransaction();

        try {

            $data = $request->all();
            $file = $request->file('file');
            $type = $request->type;

            $currentFile = $this->fileRepository->find($id);

            if(!is_null($file)){

                Storage::disk('local')->delete($currentFile->path);

                $data['name'] = basename(Storage::disk('local')->putFile($type, new File($file)));
            }

            $this->fileRepository->update($data, $id);

            DB::commit();  

            return response()->json([
                "message" => "Actualización exitosa",
                "data" => []
            ], 200);

        } catch (QueryException $th) {
            DB::rollback();

            return response()->json(['message' => $th->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = $this->fileRepository->find($id);
        $file->delete();

        return response()->json(null, 204);
    }
}
