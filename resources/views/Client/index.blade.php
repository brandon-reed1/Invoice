@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                   <h2>Clients</h2>
               </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('clients_create')}}" class="btn btn-primary">Ajouter un client</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                        <h3>Liste des clients</h3>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Entreprise</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Télephone</th>
                            <th scope="col">email</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $client)
                        <tr>
                            <th scope="row">{{$client->id}}</th>
                            <td>{{$client->company}}</td>
                            <td>{{$client->firstname}}</td>
                            <td>{{$client->lastname}}</td>
                            <td>{{$client->phone}}</td>
                            <td>{{$client->email}}</td>
                            <td>
                                <a href="{{route('client_card', ['client'=>$client->id])}}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-info"></i>
                                    Détail
                                </a>
                                <a href="{{route('client_update', ['client' => $client->id])}}" class="btn btn-sm btn-success">
                                    <i class="fas fa-edit"></i>
                                    Modifier
                                </a>
                                <a href="{{route('client_delete', ['client' => $client->id])}}" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                    Supprimer
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
