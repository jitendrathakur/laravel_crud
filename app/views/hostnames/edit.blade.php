@extends('layouts.scaffold')

@section('main')

<h1>Edit Hostname</h1>
{{ Form::model($hostname, array('method' => 'PATCH', 'route' => array('hostnames.update', $hostname->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('hostnames.show', 'Cancel', $hostname->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
