@extends('dashboard.layout')

@section('section')
<h3><i class="fa-solid fa-user-group me-3"></i>Categorie Add</h3>

<br>
<br>
<br>
<form method="POST" action="{{ route('categorie.store') }}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Libelle</label>
      <input  name="libelle" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom de catégorie">
      <small id="emailHelp" class="form-text text-muted">vos divers catégorie</small>
    </div>


    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </form>
@endsection
