@extends('layouts.panel')
@section('content')
    <div class="container mt-5">
        <h3>Les Informations sur l'employé <i>{{ $single_employe->name }}</i></h3>
        <ul class="list-group mt-2">
            <li class="list-group-item"><span class="fw-bold">Nom :</span>
                <span class="float-end">{{ $single_employe->name }}</span>
            </li>
            <li class="list-group-item"><span class="fw-bold">Prénom :</span>
                <span class="float-end">{{ $single_employe->f_name }}</span>
            </li>
            <li class="list-group-item"><span class="fw-bold">Téléphone :</span>
                <span class="float-end">{{ $single_employe->phone }}</span>
            </li>
            <li class="list-group-item"><span class="fw-bold">adresse :</span>
                <span class="float-end">{{ $single_employe->adresse }}</span>
            </li>
            <li class="list-group-item"><span class="fw-bold">Age :</span>
                <span class="float-end">{{ $single_employe->age }} ans</span>
            </li>
            <li class="list-group-item"><span class="fw-bold">Salaire :</span>
                <span class="float-end">{{ $single_employe->salaire }}</span>
            </li>

        </ul>
    </div>
@endsection
