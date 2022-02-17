<div class="box box-info padding-1 ">
    <div class="box-body text-center">

        <div class="form-group col-md-4 offset-md-4">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $usuario->Nombre, ['class' => 'form-control  ' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback ">:message</div>') !!}
        </div>
        <br>
        <div class="form-group col-md-4 offset-md-4">
            {{ Form::label('Apellido') }}
            {{ Form::text('Apellido', $usuario->Apellido, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group col-md-4 offset-md-4">
            {{ Form::label('Correo') }}
            {{ Form::text('Correo', $usuario->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20 offset-md-4">
        <button type="submit" class="btn btn-primary">Registrar</button>
        <a type="" href="{{ route('usuarios.index') }}" class="btn btn-primary offset-1">Volver</a>
    </div>

</div>
