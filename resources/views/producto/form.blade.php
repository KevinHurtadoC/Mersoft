<div class="box box-info padding-1">
    <div class="box-body  offset-1 ">
        
        <div class="form-group col-md-11">
            {{ Form::label('Código') }}
            {{ Form::number('Código', $producto->Código, ['class' => 'form-control' . ($errors->has('Código') ? ' is-invalid' : ''), 'placeholder' => 'Código']) }}
            {!! $errors->first('Código', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group col-md-11">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $producto->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group  col-md-11">
            {{ Form::label('Categoría') }}
            {{ Form::text('Categoría', $producto->Categoría, ['class' => 'form-control' . ($errors->has('Categoría') ? ' is-invalid' : ''), 'placeholder' => 'Categoría']) }}
            {!! $errors->first('Categoría', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group col-md-11">
            {{ Form::label('Stock') }}
            {{ Form::text('Stock', $producto->Stock, ['class' => 'form-control' . ($errors->has('Stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('Stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group col-md-11">
            {{ Form::label('Precio') }}
            {{ Form::text('Precio', $producto->Precio, ['class' => 'form-control' . ($errors->has('Precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('Precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20 offset-md-4">
    <br><button type="submit" class="btn btn-primary">Guardar</button>
        <a type="" href="{{ route('productos.index') }}" class="btn btn-danger bg-opacity-100
         offset-1 ">Cancelar</a>
    </div>
</div>