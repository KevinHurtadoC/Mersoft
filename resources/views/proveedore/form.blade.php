<div class="box box-info padding-1">
    <div class="box-body offset-1 ">
        
        <div class="form-group col-md-11 ">
            {{ Form::label('Nit_Empresa') }}
            {{ Form::number('Nit_Empresa', $proveedore->Nit_Empresa, ['class' => 'form-control' . ($errors->has('Nit_Empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nit Empresa']) }}
            {!! $errors->first('Nit_Empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group col-md-11">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $proveedore->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group col-md-11 ">
            {{ Form::label('Apellido') }}
            {{ Form::text('Apellido', $proveedore->Apellido, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group col-md-11 ">
            {{ Form::label('Empresa') }}
            {{ Form::text('Empresa', $proveedore->Empresa, ['class' => 'form-control' . ($errors->has('Empresa') ? ' is-invalid' : ''), 'placeholder' => 'Empresa']) }}
            {!! $errors->first('Empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group col-md-11">
            {{ Form::label('Categoria') }}
            {{ Form::text('Categoria', $proveedore->Categoria, ['class' => 'form-control' . ($errors->has('Categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('Categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group col-md-11">
            {{ Form::label('Dirreccion') }}
            {{ Form::text('Dirreccion', $proveedore->Dirreccion, ['class' => 'form-control' . ($errors->has('Dirreccion') ? ' is-invalid' : ''), 'placeholder' => 'Dirreccion']) }}
            {!! $errors->first('Dirreccion', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group col-md-11">
            {{ Form::label('Telefono') }}
            {{ Form::number('Telefono', $proveedore->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group col-md-11">
            {{ Form::label('Correo') }}
            {{ Form::text('Correo', $proveedore->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>

    </div>
    <div class="box-footer mt20 offset-md-4">
    <br><button type="submit" class="btn btn-primary">Guardar</button>
        <a type="" href="{{ route('proveedores.index') }}" class="btn btn-danger bg-opacity-100
         offset-1 ">Cancelar</a>

    </div>
</div>