@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3>Liste des contacts</h3>
        <hr>
        @if (count($contacts) === 0)
            <div class="col-sm-12">
                <div class="search_resultats_list">
                    <div class="message_not_offer">
                        <p class="message_not_offer_content">
                            Vous n'avez pas de contacts, cliquez ici pour <a href="{{route('contact.add')}}">ajouter</a>
                        </p>
                    </div>
                </div>
            </div>

            @elseif (count($contacts) >= 1)
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Civilité</th>
                        <th>Nom</th>
                        <th>Prenom(s)</th>
                        <th>Adresse 1</th>
                        <th>Code Postal</th>
                        <th>Ville</th>
                        <th>Pays</th>
                        <th>Numero</th>
                        <th style="width: 300px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                    <tr>
                        <th scope="row">{{$contact->civilite}}</th>
                        <td>{{$contact->nom}}</td>
                        <td>{{$contact->prenom}}</td>
                        <td>{{$contact->adresse1}}</td>
                        <td>{{$contact->code_postal}}</td>
                        <td>{{$contact->ville}}</td>
                        <td>{{$contact->pays}}</td>
                        <td>{{$contact->numero}}</td>
                        <td>
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn ">Modfier</button>
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            {{$contacts->links()}}
        @endif
    </div>
@endsection