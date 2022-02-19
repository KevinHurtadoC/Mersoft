@extends('layouts.app')

@section('template_title')
    Crear Producto
@endsection

@section('content')
    <section class="content container-md offset-4 row align-items-center">
        <div class="row">
            <div class="col-md-6">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header bg-primary bg-opacity-75 text-center">
                        <span class="card-title">Crear Producto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('productos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('producto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
