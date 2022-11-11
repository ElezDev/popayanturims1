{{-- <div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', '', ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', '', ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('horarios') }}
            {{ Form::text('horarios', '', ['class' => 'form-control' . ($errors->has('horarios') ? ' is-invalid' : ''), 'placeholder' => 'Horarios']) }}
            {!! $errors->first('horarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', '' ,['class' => 'form-control' . ($errors->has('ubicasion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicasion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div> --}}

<div class="box box-info padding-1">
    <div class="box-body">

        <div class="hidden"  class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre','',['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
     <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion','', ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
   </div>
        <div class="form-group">
            {{ Form::label('horarios') }}
            {{ Form::time('horarios','', ['class' => 'form-control' . ($errors->has('horarios') ? ' is-invalid' : ''), 'placeholder' => 'Horarios']) }}
            {!! $errors->first('horarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', '', ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

         <div class="grid grid-cols-1 mt-5 mx-7">
            <img id="imagenSeleccionada"  height="80">
            {{ Form::label('foto_url' )  }}
            <input type="file" name="foto_url"  "class="form-control">
        </div>
        <div class="form-group">
            {{ Form::label('tipo de lugar') }}
            {{ Form::text('tipolugar_id','', ['class' => 'form-control' . ($errors->has('tipolugar_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipolugar (Clik para desplegar)']) }}
            {!! $errors->first('tipolugar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ruta') }}
            {{ Form::text('ruta_id', '', ['class' => 'form-control' . ($errors->has('rutas_id') ? ' is-invalid' : ''), 'placeholder' => 'Rutas Id']) }}
            {!! $errors->first('ruta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gastronomia') }}
            {{ Form::text('gastronomia_id','', ['class' => 'form-control' . ($errors->has('gastronomia_id') ? ' is-invalid' : ''), 'placeholder' => 'Gastronomia Id']) }}
            {!! $errors->first('gastronomia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('evento') }}
            {{ Form::text('evento_id','', ['class' => 'form-control' . ($errors->has('evento_id') ? ' is-invalid' : ''), 'placeholder' => 'Evento Id']) }}
            {!! $errors->first('evento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         <div class="form-group">
            {{ Form::label('calificasione') }}
            {{ Form::text('calificasione_id','', ['class' => 'form-control' . ($errors->has('calificasiones_id') ? ' is-invalid' : ''), 'placeholder' => 'Calificasiones Id']) }}
            {!! $errors->first('calificasione_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('servicio') }}
            {{ Form::text('servicio_id','',['class' => 'form-control' . ($errors->has('servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Servicios Id']) }}
            {!! $errors->first('servicio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>