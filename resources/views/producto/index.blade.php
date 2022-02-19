@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="fs-4 fw-bold"id="card_title">
                                {{ __('productos') }}
                            </span>


                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Código</th>
										<th>Nombre</th>
										<th>Categoría</th>
										<th>Stock</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                        
											<td>{{ $producto->Código }}</td>
											<td>{{ $producto->Nombre }}</td>
											<td>{{ $producto->Categoría }}</td>
											<td>{{ $producto->Stock }}</td>
											<td>{{ $producto->Precio }}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                           
                                                    <a class="btn btn-sm btn-warning" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                  
                                                    @csrf
                                                    <form action="{{ url('/producto/'.$producto->id)}}" class="d-inline" method="post">
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
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
