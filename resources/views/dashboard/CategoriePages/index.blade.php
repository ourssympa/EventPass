@extends('dashboard.layout')

@section('section')
<h3><i class="fa-solid fa-user-group me-3"></i>Categorie</h3>

<div>
    <a href="{{ route('categorie.create') }}"> Ajouter une categorie</a>
</div>
<div class="event-list">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="orders-tab" role="tabpanel">
            <div class="table-card mt-4">
                <div class="main-table">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>


                                    @foreach ($cates as $cate )
                                    <tr>
                                    <td>{{ $cate->id }}</td>
                                    <td>{{ $cate->libelle }}</td>
                                    <td><a href="{{ route('categorie.edit',$cate->id) }}" class="btn btn-primary">Modifier</a></td>
                                    <td><a href="{{ route('categorie.edit',$cate->id) }}" class="btn btn-danger">Supprimer</a></td>
                                </tr>
                                    @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div></div></div>
@endsection
