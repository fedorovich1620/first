@extends('layout.master')

@section('menu')
@parent
@endsection

@section('content')

<div class="label lable-info">{{$page}}</div>

@if(count(session('errors')) > 0)
	<div class="alert alert-danger alert-dismissable"> 
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		@foreach(session('errors')->all() as $er)
			{{$er}}<br/>
		@endforeach
	</div>
@endif

@if(session('message'))
<div class="alert alert-success alert-dismissable" > 
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{session('message')}}
</div>
@endif



{!! Form::model($block, array('action'=>'BlockController@store','files'=>true,'class'=>'form')) !!}
<div class='form-group'>
		{!! Form::label('topicid','Select Topic')!!}
		{!! Form::select('topicid', $topics, array('class'=>'form-control'))!!}
	<a href="{{url('topic/create')}}" class="btn btn-info">Add new Topic</a>
</div>
<div class='form-group'>
	{!! Form::label('title','Block Topic')!!}
	{!! Form::text('title', '', array('class'=>'form-control'))!!}
</div>
<div class='form-group'>
	{!! Form::label('content','Add Content')!!}
	{!! Form::textarea('content', '', array('class'=>'form-control'))!!}
</div>
<div class='form-group'>
	{!! Form::label('imagepath','Add Image')!!}
	{!! Form::file('imagepath', '', array('class'=>'form-control'))!!}
</div>
<button class="btn btn-success" type="submit">Add Block</button>
{!! Form::close() !!}

@endsection