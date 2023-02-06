@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? 'Show Client' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('client.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre(s):</strong>
                            {{ $client->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $client->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Número telefónico:</strong>
                            {{ $client->phonenumber }}
                        </div>
                        <div class="form-group">
                            <strong>Correo electrónico:</strong>
                            {{ $client->email }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $client->address }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
