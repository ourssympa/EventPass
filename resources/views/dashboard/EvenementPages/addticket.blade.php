@extends('dashboard.layout')

@section('section')
<h3><i class="fa-solid fa-user-group me-3"></i>Ajouter Ticket</h3>
<br>
<br>
<br>
<form method="POST" action="{{ route('ticket.store')}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Libelle</label>
      <input  name="libelle" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

     <div class="form-group">
      <label for="exampleInputEmail1">Prix</label>
      <input  name="prix" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Quantité</label>
      <input  name="quantite" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
   <input  name="evenement_id" value="{{ $id }}" hidden />

    <div class="form-group">
      <label>Type</label>
      <select  name="type" class="form-control"  >
      <option class="form-control"   value="couple">Couple</option>
      <option class="form-control"   value="Solo">Solo</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </form>
@endsection
