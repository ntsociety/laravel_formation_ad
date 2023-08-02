@extends('layouts.panel')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Ajouter un employé
                    <a href="{{ route('list-employes') }}" class="btn btn-sm btn-primary float-end">Retour</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('store-employe') }}" method="post">
                    @csrf
                    <div class="input-group input-group-outline my-3">
                        <input type="text" name="name" id="" class="form-control mb-2 @error('name') is-invalid @enderror" placeholder="Nom">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group input-group-outline my-3">
                        <input type="text" name="f_name" id="" class="form-control mb-2 @error('f_name') is-invalid @enderror" placeholder="Prénom">
                        @error('f_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group input-group-outline my-3">
                        <input type="text" name="phone" id="" class="form-control mb-2 @error('phone') is-invalid @enderror" placeholder="Téléphone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group input-group-outline my-3">
                        <input type="text" name="adresse" id="" class="form-control mb-2 @error('adresse') is-invalid @enderror" placeholder="Adresse">
                        @error('adresse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group input-group-outline my-3">
                        <input type="number" name="age" id="" class="form-control mb-2 @error('age') is-invalid @enderror" placeholder="Age">
                        @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group input-group-outline my-3">
                        <input type="number" name="salaire" id="" class="form-control mb-2 @error('salaire') is-invalid @enderror" placeholder="Salaire">
                        @error('salaire')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button class="btn btn-sm btn-primary btn-block w-100 mt-2" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
