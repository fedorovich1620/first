@extends('layout.master')

@section('menu')
@parent
@endsection

@section('content')
<div class="row">
	<div class="col-md-3 dleft">
		
			{!!Form::open(['action'=>'TopicController@search'])!!}
			<div class="input-group">
				{!!Form::text('search','',['class'=>'form-control'])!!}
				<span class="input-group-btn">
					<button class="btn btn-success" type="submit">Search</button>
				</span>
				
				</div>
			{!!Form::close()!!}
		<ul>
			@foreach($topics as $t)
			<li>
				<a class="btn btn-primary" href="{{url('topic/'.$t->id)}}">{{$t->topicname}}</a>
			</li>
			@endforeach
		</ul>
	</div>
	<div class="col-md-9 dright">
		@if($id !=0)
			@foreach($blocks as $b)
				<div>
					<div>
						<h2 style="float:left">{{$b->title}}</h2>
					

						{!!Form::open(array('route'=>array('block.destroy',$b->id)))!!}
						{!!Form::hidden('_method','DELETE')!!}
						<button style="float:right; margin-top:5px;" type="submit" class="btn btn-lg btn-danger glyphicon glyphicon-remove">delete</button>
						{!!Form::close()!!}
							{!!Form::model($b,array('route'=>array('block.update',$b->id),'method'=>'PUT'))!!}
						<a style="float:right; margin-top:5px;" class="btn btn-lg btn-info glyphicon glyphicon-pencil" href="{{url('block/'.$b->id.'/edit')}}">edit</a>
						{!!Form::close()!!}
					</div style="clear:left; clear:right">
					<br/><br/><br/><br/>
					@if($b->imagePath !="")
						<a href="{{url($b->imagePath)}}" target="_blank" class="wrap-image">
							<img src="{{asset($b->imagePath)}}" height="150px" alt="picture">
						</a>
					@endif
					<pre class="pre_text" style="white-space:pre-wrap">{{$b->content}}</pre>
				</div>

			@endforeach

		@endif


	</div>
</div>



@endsection