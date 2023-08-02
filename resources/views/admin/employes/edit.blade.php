@extends('layouts.panel')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Modifier l'employé
                    <a href="{{ route('list-employes') }}" class="btn btn-sm btn-primary float-end">Retour</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('update-employe', $single_employe->id) }}" method="post">
                    @csrf
                    <input type="text" name="name" id="" value="{{ $single_employe->name }}" class="form-control mb-2 @error('name') is-invalid @enderror" placeholder="Nom">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="text" name="f_name" id="" value="{{ $single_employe->f_name }}" class="form-control mb-2 @error('f_name') is-invalid @enderror" placeholder="Prénom">
                    @error('f_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="text" name="phone" id="" value="{{ $single_employe->phone }}" class="form-control mb-2 @error('phone') is-invalid @enderror" placeholder="Téléphone">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="text" name="adresse" id="" value="{{ $single_employe->adresse }}" class="form-control mb-2 @error('adresse') is-invalid @enderror" placeholder="Adresse">
                    @error('adresse')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="number" name="age" id="" value="{{ $single_employe->age }}" class="form-control mb-2 @error('age') is-invalid @enderror" placeholder="Age">
                    @error('age')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="number" name="salaire" id="" value="{{ $single_employe->salaire }}" class="form-control mb-2 @error('salaire') is-invalid @enderror" placeholder="Salaire">
                    @error('salaire')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button class="btn btn-sm btn-primary btn-block w-100 mt-2" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
