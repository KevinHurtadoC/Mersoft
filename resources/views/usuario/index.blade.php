@extends('layouts.app')

@section('template_title')
    Usuario
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="fs-4 fw-bold"id="card_title">
                                {{ __('Usuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Usuario') }}
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


										<th>Nombre</th>
										<th>Apellido</th>
										<th>Correo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>


											<td>{{ $usuario->Nombre }}</td>
											<td>{{ $usuario->Apellido }}</td>
											<td>{{ $usuario->Correo }}</td>

                                            <td>
                                                <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">

                                                    <a class="btn btn-sm btn-warning" href="{{ route('usuarios.edit',$usuario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    <form action="{{ url('/usuario/'.$usuario->id)}}" class="d-inline" method="post">
                                                        @csrf
                                                        {{method_field('DELETE')}}
                                                        <input class="btn btn-sm btn-danger" type="submit" onclick="return confirm('¿Quieres eliminar?')"
                                                        value="Eliminar">
                                                </form>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
