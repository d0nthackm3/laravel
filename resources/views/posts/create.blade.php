@extends('main1')

@section('title', '| Teachers')

@section('content')

<div class="row"> 
<br><br><br><br>

	<div class="col-md-8 col-md-offset-4">

<h2> CREATE NEW POST </h2>
<hr>
<!-- Named routes && Adds CSRF Random tokens automaticly // Laravel Security -->
{!! Form::open(['route' => 'posts.store']) !!}
    {{ Form::label('title') }}
    {{ Form::text('title', null,array('class' => 'form-control'))}}

{{ Form::label('body', "Post Body:")}}
{{ Form::textarea('body', null, array('class' => 'form-controller')) }}

{{ Form::submit('Create Post')}}
{!! Form::close() !!}


	</div>
</div>


@endsection

