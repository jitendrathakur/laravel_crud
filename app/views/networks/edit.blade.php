@extends('layouts.scaffold')

@section('main')

<h1>Edit Network</h1>
{{ Form::model($network, array('method' => 'PATCH', 'route' => array('networks.update', $network->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('networks.show', 'Cancel', $network->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
