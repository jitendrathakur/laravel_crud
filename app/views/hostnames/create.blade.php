@extends('layouts.scaffold')

@section('main')

<h1>Create Hostname</h1>

{{ Form::open(array('route' => 'hostnames.store')) }}
	<ul>
        <li>
            {{ Form::label('hostname', 'Hostname:') }}
            {{ Form::text('hostname') }}
        </li>

        <li>
            {{ Form::label('block', 'Block:') }}
            {{ Form::checkbox('block') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


