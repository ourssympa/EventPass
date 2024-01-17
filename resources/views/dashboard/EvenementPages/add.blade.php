@extends('dashboard.layout')

@section('section')
<h3><i class="fa-solid fa-user-group me-3"></i>Evenement</h3>
<br>
<br>
<br>
<form method="POST" action="{{ route('evenement.store')}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">nom</label>
      <input  name="nom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
      <small id="emailHelp" class="form-text text-muted">nom de l'evenement</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">description</label>
      <input  name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
      <small id="emailHelp" class="form-text text-muted">description</small>
    </div>
     <div class="form-group">
      <label for="exampleInputEmail1">Lieu</label>
      <input  name="lieu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
      <small id="emailHelp" class="form-text text-muted">lieu ou se passe l'evenement</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Date</label>
      <input  name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
      <small id="emailHelp" class="form-text text-muted">date</small>
    </div>

    <div class="form-group">
      <label>Date</label>
      <select  name="categorieid" class="form-control"  >
      @foreach ($categories as $categorie )
        <option class="form-control"   value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
      @endforeach
      </select>
    </div>


    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </form>
@endsection
