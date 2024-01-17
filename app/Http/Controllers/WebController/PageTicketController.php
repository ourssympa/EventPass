<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Evenement;
use Illuminate\Http\Request;

class PageTicketController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        $events =  Evenement::orderBy('id','desc')->take(8)->get();
        return  view('index',compact('categories',"events"));
    }

    public function allevents(){
        $categories = Categorie::all();

        $events =  Evenement::orderBy('id','desc')->get();

        return view('allevents',compact('categories',"events"));
    }

    public function eventdetail($id){

        $event = Evenement::where('id',$id)->first();
        $odersevents = Evenement::where('categorieid',$event->categorieid)->get();
        return view('eventdetail',compact("event","odersevents"));
    }
}
