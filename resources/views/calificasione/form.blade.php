<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('comentarios') }}
            {{ Form::text('comentarios','',['class' => 'form-control' . ($errors->has('comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('reseñas') }}
            {{ Form::text('reseñas','',['class' => 'form-control' . ($errors->has('reseñas') ? ' is-invalid' : ''), 'placeholder' => 'Reseñas']) }}
            {!! $errors->first('reseñas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{{-- <div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Comentarios</strong>
        <input type="text" name="comentarios" class="form-control" placeholder="comentarios">
    </div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Reseñas</strong>
        <input type="text" name="reseñas" class="form-control" placeholder="comentarios">
    </div>
</div>
</div>
<div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">Submit</button>
</div> --}}
