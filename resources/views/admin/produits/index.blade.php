@extends('layouts.panel')
@section('content')


    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Listes de Produits
                    <a href="{{ route('produits.create') }}" class="btn btn-sm btn-primary float-end me-3">Ajouter</a>
                </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nom</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($product->count() > 0)
                        @foreach ($product as $item)
                            <tr>
                                <td class="text-center">{{ $item->id }}</td>
                                <td class="text-center">{{ $item->name }}</td>
                                <td class="text-center">{{ $item->description }}</td>
                                <form action="{{ route('produits.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    <td class="align-middle">
                                        <div class="d-flex px-2 py-1">
                                            <a href="{{ route('produits.edit', $item->id) }}" class="text-secondary font-weight-bold text-xs me-2 btn btn-sm btn-outline-info" data-toggle="tooltip" data-original-title="Edit user">
                                                Modifier
                                            </a>
                                            <a href="{{ route('produits.show', $item->id) }}" class="btn text-secondary font-weight-bold text-xs me-2 btn-sm btn-outline-success" data-toggle="tooltip" data-original-title="Edit user">
                                               Voir
                                            </a>
                                            <button type="submit" class="btn text-secondary font-weight-bold text-xs btn-sm btn-outline-danger"
                                            onclick="return confirm('Voulez-vous supprimer cet élement ?')">Supprimer</button>
                                        </div>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                                <td colspan="8" class="text-center">Pas de données</td>
                        </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
