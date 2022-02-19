@extends('layouts.app')

@section('template_title')
    Create Usuario
@endsection

@section('content')
    <section class="content container-md offset-4 row align-items-center" >
        <div class="row ">
            <div class="col-md-6" >

                @includeif('partials.errors')

                <div class="card  card-default">
                    <div class="card-header bg-primary bg-opacity-75 text-center " >
                        <span class="card-title fw-bold ">Crear Usuario</span>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('usuario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
