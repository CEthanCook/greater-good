@extends('layouts.app')

@section('title')
	Login 
@stop

@section('content')
	{{ Form::open(array('url' => 'login')) }}
		<p>
			{{ Form::label('username') }}
			{{ Form::text('username') }}
		</p>
		<p>
			{{ Form::label('password') }}
			{{ Form::password('password') }}
		</p>
		<p>
			{{ Form::submit('login') }}
		</p>
	{{ Form::submit('login') }}
@stop