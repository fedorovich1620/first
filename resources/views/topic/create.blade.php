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



{!! Form::model($topic, array('action'=>'TopicController@store')) !!}
<div class='form-group'>
	{!! Form::label('topicnameform','Topic name')!!}
	{!! Form::text('topicnameform', '', array('class'=>'form-control'))!!}
</div>
<button class="btn btn-success" type="submit">Add Topic</button>
{!! Form::close() !!}

@endsection