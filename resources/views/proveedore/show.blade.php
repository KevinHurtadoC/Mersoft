@extends('layouts.app')

@section('template_title')
    {{ $proveedore->name ?? 'Show Proveedore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Proveedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nit Empresa:</strong>
                            {{ $proveedore->Nit_Empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proveedore->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $proveedore->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $proveedore->Empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $proveedore->Categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Dirreccion:</strong>
                            {{ $proveedore->Dirreccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $proveedore->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $proveedore->Correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
