<div class="box box-info padding-1 ">
    <div class="box-body offset-1">

        <div class="form-group col-md-11">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $usuario->Nombre, ['class' => 'form-control  ' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback ">:message</div>') !!}
        </div>
        <br>
        <div class="form-group col-md-11">
            {{ Form::label('Apellido') }}
            {{ Form::text('Apellido', $usuario->Apellido, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group col-md-11">
            {{ Form::label('Correo') }}
            {{ Form::text('Correo', $usuario->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20 offset-md-4">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a type="" href="{{ route('usuarios.index') }}" class="btn btn-danger offset-1">Volver</a>
    </div>

</div>
