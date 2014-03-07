@extends('layouts.scaffold')

@section('main')

<h1>Create Network</h1>

{{ Form::open(array('route' => 'networks.store')) }}
	<ul>
      
        <li>
            {{ Form::label('n_name', 'Name:') }}
            {{ Form::input('text', 'n_name') }}
        </li>
        <li>
            {{ Form::label('n_ip', 'IP:') }}
            {{ Form::input('text', 'n_ip') }}
        </li>
        <li>
            {{ Form::label('n_status', 'Status:') }}
            {{ Form::input('checkbox', 'n_status') }}
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


