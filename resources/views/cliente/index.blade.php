@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="fs-4 fw-bold"id="card_title">
                                {{ __('Cliente') }}
                            </span>


                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar') }}
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


										<th>Documento</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Dirección</th>
										<th>Teléfono</th>
										<th>Correo</th>
                                        <th>Funciones</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>

											<td>{{ $cliente->documento }}</td>
											<td>{{ $cliente->nombre }}</td>
											<td>{{ $cliente->apellido }}</td>
											<td>{{ $cliente->direccion }}</td>
											<td>{{ $cliente->telefono }}</td>
											<td>{{ $cliente->Correo }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    <form action="{{ url('/cliente/'.$cliente->id)}}" class="d-inline" method="post">
                                                      
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
