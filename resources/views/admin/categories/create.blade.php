@extends('layouts.panel')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Ajouter une Catégorie
                    <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary float-end">Retour</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="post">
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
                        <input type="text" name="description" id="" class="form-control mb-2 @error('description') is-invalid @enderror" placeholder="description">
                        @error('description')
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
