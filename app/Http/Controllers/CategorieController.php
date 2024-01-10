<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Http\Resources\CategorieResource;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategorieResource::collection(Categorie::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorieRequest $request)
    {
        $data = Categorie::create($request->all());
        
         return response()->json([
            "data"=>new CategorieResource($data),
            "message"=>"Catégorie ajoutée"
         ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data =  Categorie::find($id);
        return new CategorieResource($data);
    }


    public function update(Request $request, $id)
    {
        $data = Categorie::find($id);
        $data->update($request->all());
        return response()->json([
            'data'=>new CategorieResource($data),
            'message'=>"categorie update "
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Categorie::find($id);
        $data->delete();
        return response()->json([
            'message'=>"categorie supprimée"
        ]);
    }
}
