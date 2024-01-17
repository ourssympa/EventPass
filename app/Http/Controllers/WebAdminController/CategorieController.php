<?php

namespace App\Http\Controllers\WebAdminController;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
     {
        $cates = Categorie::all();
        return view('dashboard.CategoriePages.index',compact('cates'));
    }
    public function create()
     {

        return view('dashboard.CategoriePages.add');
    }

    public function store(Request $request){
        Categorie::create($request->all());
        return redirect()->route('categorie.index');
    }

    public function edit($id){
        $data= Categorie::find($id);

        return view("dashboard.CategoriePages.edit",compact("data"));
    }

    public function update(Request $request,$id){
        $data= Categorie::find($id);
        $data->update($request->all());

        return redirect()->route('categorie.index');
   }

   public function destroy($id){
        $data= Categorie::find($id);
        $data->delete();

        return redirect()->route('categorie.index');
   }



}
