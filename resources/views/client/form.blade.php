<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre(s)') }}
            {{ Form::text('name', $client->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre(s)']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('lastname', $client->lastname, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('número de teléfono') }}
            {{ Form::text('phonenumber', $client->phonenumber, ['class' => 'form-control' . ($errors->has('phonenumber') ? ' is-invalid' : ''), 'placeholder' => 'ej. 2271530042']) }}
            {!! $errors->first('phonenumber', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo electrónico') }}
            {{ Form::text('email', $client->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'alguien@ejemplo.com']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dirección') }}
            {{ Form::text('address', $client->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'ej. Domingo Arenas #5, Santa Ana Xalmimilulco, Huejotzingo, Puebla']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>