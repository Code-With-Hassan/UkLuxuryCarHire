@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($fleets, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.fleets.update', $fleets->id))) !!}

<div class="form-group">
    {!! Form::label('car_name', 'Car Name*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('car_name', old('car_name',$fleets->car_name), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('car_make', 'Car Make*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('car_make', old('car_make',$fleets->car_make), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('car_description', 'Car Description*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('car_description', old('car_description',$fleets->car_description), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('car_image1', 'Car Image 1', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('car_image1') !!}
        {!! Form::hidden('car_image1_w', 4096) !!}
        {!! Form::hidden('car_image1_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('car_image2', 'Car Image 2', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('car_image2') !!}
        {!! Form::hidden('car_image2_w', 4096) !!}
        {!! Form::hidden('car_image2_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('car_image3', 'Car Image 3', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('car_image3') !!}
        {!! Form::hidden('car_image3_w', 4096) !!}
        {!! Form::hidden('car_image3_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('car_image4', 'Car Image 4', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('car_image4') !!}
        {!! Form::hidden('car_image4_w', 4096) !!}
        {!! Form::hidden('car_image4_h', 4096) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.fleets.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection