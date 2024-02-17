<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('mascota') }}
            {{ Form::text('mascota', $paciente->mascota, ['class' => 'form-control' . ($errors->has('mascota') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la mascota']) }}
            {!! $errors->first('mascota', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_de_nacimiento') }}
            {{ Form::date('fecha_de_nacimiento', $paciente->fecha_de_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_de_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'fecha de nacimiento de la mascota']) }}
            {!! $errors->first('fecha_de_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::select('genero', ['macho' => 'Macho', 'hembra' => 'Hembra'], $paciente->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'seleccione el genero de la mascota']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alergias') }}
            {{ Form::text('alergias', $paciente->alergias, ['class' => 'form-control' . ($errors->has('alergias') ? ' is-invalid' : ''), 'placeholder' => 'tipo de alergias']) }}
            {!! $errors->first('alergias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad') }}
            {{ Form::text('edad', $paciente->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Años']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('propietario') }}
            {{ Form::text('propietario', $paciente->propietario, ['class' => 'form-control' . ($errors->has('propietario') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del propietario']) }}
            {!! $errors->first('propietario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $paciente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Numero de contacto']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $paciente->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'tu_correo@gmail.com']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>