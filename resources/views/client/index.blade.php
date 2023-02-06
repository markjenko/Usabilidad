@extends('layouts.app')

@section('template_title')
    Client
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clientes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('client.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre(s)</th>
										<th>Apellido</th>
										<th>Número telefónico</th>
										<th>Correo electrónico</th>
										<th>Dirección</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $client->name }}</td>
											<td>{{ $client->lastname }}</td>
											<td>{{ $client->phonenumber }}</td>
											<td>{{ $client->email }}</td>
											<td>{{ $client->address }}</td>

                                            <td>
                                                <form action="{{ route('client.destroy',$client->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('client.show',$client->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('client.edit',$client->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clients->links() !!}
            </div>
        </div>
    </div>
@endsection
