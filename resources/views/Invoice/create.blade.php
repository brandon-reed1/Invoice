<?php
/** Create Invoice
 *
 */

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

$user = auth()->user();
$clients = $user->clients;
$date = Carbon::now('Europe/Zurich')
?>
@extends('layouts.app')

@section('content')
    <div class="container bg-white p-3">
        <div class="grid">
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        Nouvelle facture
                    </h2>
                    <hr/>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-4">
                    <em>
                        Le {{$date->isoFormat('DD/MM/YYYY HH:mm')}}
                    </em>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-md-4">

                    <h3 class="company">{{$user->company}}</h3>
                    <p>
                        {{$user->firstname}} {{$user->lastname}} <br/>
                        {{$user->street}} {{$user->nr}} <br/>
                        {{$user->city}} <br/>
                        Email: {{$user->email}} <br/>
                        Téléphone: {{$user->phone}}
                    </p>
                    <p><strong>
                            TVA N°: {{$user->tva}}
                        </strong></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <?php
                    echo Form::open(['route' => 'home', 'method' => 'POST']);?>
                    <div class="form-group">
                        {!! Form::label('client', 'Client', ['class' => 'control-label']) !!}
                        <select class="form-control" id="select-client">
                            @foreach($clients as $client)
                                <option value="-1">------</option>
                                <option value="{{$client->id}}">{{$client->vat}} - {{$client->company}}</option>
                            @endforeach
                        </select>
                        <div id="show-client-infos">

                        </div>
                    </div>
                    <?php
                    echo Form::close();
                    ?>
                </div>
            </div>
        </div>
    </div>
@endsection

