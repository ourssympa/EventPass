<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;
use App\Http\Resources\EvenementResource;
use App\Models\Evenement;

class EvenementController extends Controller
{

    public function index()
    {
        return EvenementResource::collection(Evenement::all());
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEvenementRequest $request)
    {
        $data = Evenement::create($request->all());
        return new EvenementResource($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Evenement::find($id);
        return new EvenementResource($data);

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvenementRequest $request, $id)
    {
        $data = Evenement::find($id);
        $data->update($request->all());

        return response()->json([
            'data'=>new EvenementResource($data),
            'message'=>'Evenement update'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Evenement::find($id);
        $data->delete();

        return response()->json([
            'message'=>'Evenement supprimé'
        ]);
    }
}
