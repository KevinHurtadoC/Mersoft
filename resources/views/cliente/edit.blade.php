@extends('layouts.app')

@section('template_title')
    Update Cliente
@endsection

@section('content')
    <section class="content container-md offset-3 row align-items-center">
        <div class="">
            <div class="col-md-7">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header bg-primary bg-opacity-75 text-center " >
                        <span class="card-title fw-bold ">Editar Cliente</span>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.update', $cliente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
