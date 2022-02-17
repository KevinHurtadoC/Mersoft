@extends('layouts.app')

@section('template_title')
    Update Usuario
@endsection

@section('content')
    <section class="content container-md offset-3 row align-items-center">
        <div class="row">
            <div class="col-md-7">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header bg-primary bg-opacity-75 text-center">
                        <span class="card-title fw-bold">Editar Usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('usuario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
