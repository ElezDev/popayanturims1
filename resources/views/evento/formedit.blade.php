<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre',$EventArray['nombre'],  ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicacion') }}
            {{ Form::text('ubicacion',$EventArray['ubicacion'], ['class' => 'form-control' . ($errors->has('ubucasion') ? ' is-invalid' : ''), 'placeholder' => 'Ubucasion']) }}
            {!! $errors->first('ubucasion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horarios') }}
            {{ Form::time('horarios',$EventArray['horarios'], ['class' => 'form-control' . ($errors->has('horios') ? ' is-invalid' : ''), 'placeholder' => 'horarios']) }}
            {!! $errors->first('horios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de inicio') }}
            {{ Form::date('fechainicio',$EventArray['fechainicio'],  ['class' => 'form-control' . ($errors->has('fecha de inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Inicio']) }}
            {!! $errors->first('fecha de inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha fin') }}
            {{ Form::date('fechafin', $EventArray['fechafin'], ['class' => 'form-control' . ($errors->has('fecha fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('fecha fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
          <div class="grid grid-cols-1 mt-5 mx-7">
            <img id="imagenSeleccionada"  height="80">
            {{ Form::label('foto_url')  }}
            <input type="file" name="foto_url"  "class="form-control">
        </div>
        <div class="form-group">
            {{ Form::label('tipoeventos_id') }}
            {{ Form::text('tipoeventos_id', $EventArray['tipoeventos_id'], ['class' => 'form-control' . ($errors->has('tipoeventos_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipoeventos Id']) }}
            {!! $errors->first('tipoeventos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>