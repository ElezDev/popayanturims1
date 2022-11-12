<div class="box box-info padding-1">
    <div class="box-body">
    
        <div class="hidden"  class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $lugarsArray['descripcion'], ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $lugarsArray['direccion'],  ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horarios') }}
            {{ Form::time('horarios', $lugarsArray['horarios'], ['class' => 'form-control' . ($errors->has('horarios') ? ' is-invalid' : ''), 'placeholder' => 'Horarios']) }}
            {!! $errors->first('horarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $lugarsArray['descripcion'],  ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="grid grid-cols-1 mt-5 mx-7">
            <img id="imagenSeleccionada"  height="80">
            {{ Form::label('foto_url' )  }}
            <input type="file" name="foto_url" " class="form-control">
        </div>
        <div class="form-group">
            {{ Form::label('tipo de lugar') }}
            {{ Form::select('tipolugar_id', $pluckedTl,$lugarsArray['tipolugar_id'] ,['class' => 'form-control' . ($errors->has('tipolugar_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipolugar (Clik para desplegar)']) }}
            {!! $errors->first('tipolugar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rutas') }}
            {{ Form::select('ruta_id' , $pluckedrt,$lugarsArray['ruta_id'],  ['class' => 'form-control' . ($errors->has('rutas_id') ? ' is-invalid' : ''), 'placeholder' => 'Rutas Id']) }}
            {!! $errors->first('ruta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gastronomia') }}
            {{ Form::select('gastronomia_id',  $pluckedGs,$lugarsArray['gastronomia_id'], ['class' => 'form-control' . ($errors->has('gastronomia_id') ? ' is-invalid' : ''), 'placeholder' => 'Gastronomia Id']) }}
            {!! $errors->first('gastronomia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('evento') }}
            {{ Form::select('evento_id', $pluckedEv, $lugarsArray['evento_id'], ['class' => 'form-control' . ($errors->has('evento_id') ? ' is-invalid' : ''), 'placeholder' => 'Evento Id']) }}
            {!! $errors->first('evento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calificasiones') }}
            {{ Form::select('calificasione_id',  $pluckedCal,$lugarsArray['calificasione_id'], ['class' => 'form-control' . ($errors->has('calificasiones_id') ? ' is-invalid' : ''), 'placeholder' => 'Calificasiones Id']) }}
            {!! $errors->first('calificasione_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('servicios') }}
            {{ Form::select('servicio_id', $pluckedSer,$lugarsArray['servicio_id'],  ['class' => 'form-control' . ($errors->has('servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Servicios Id']) }}
            {!! $errors->first('servicio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>