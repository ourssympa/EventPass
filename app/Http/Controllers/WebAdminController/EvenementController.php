<?php

namespace App\Http\Controllers\WebAdminController;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Evenement;
use App\Models\Ticket;
use Illuminate\Http\Request;

class EvenementController extends Controller
{

    public function index()
    {
        $datas = Evenement::all();
        return view('dashboard.EvenementPages.index',compact('datas'));

    }


    public function create()
    {
        $categories = Categorie::all();
        return view('dashboard.EvenementPages.add',compact('categories'));
    }


    public function store(Request $request)
    {
        $data = Evenement::create($request->all());
        return redirect()->route('ticket.create',$data->id);
    }

    public function create_ticket($id){
        return view('dashboard.EvenementPages.addticket',compact('id'));
    }

    public function store_ticket(Request $request){
        Ticket::create($request->all());

        return redirect()->back();
    }




    public function edit($id)
    {
        $data = Evenement::find($id);
        return view('dashboard.EvenementPages.edit',compact('data'));
    }


    public function update(Request $request,  $id)
    {
        $data = Evenement::find($id);
       $data->update($request->all());
       return redirect()->route('evenement.index');

        //
    }

    public function destroy(string $id)
    {
        //
    }
}
