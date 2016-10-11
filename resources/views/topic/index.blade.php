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
					<h2>{{$b->title}}</h2>
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