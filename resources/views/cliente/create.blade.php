@extends('layouts.app')

@section('template_title')
    Create Cliente
@endsection

@section('content')
    <section class="content container-md offset-3 row align-items-center">
        <div class="row">
            <div class="col-md-7 ">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header bg-primary bg-opacity-75 text-center " >
                        <span class="card-title fw-bold ">Crear Cliente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
