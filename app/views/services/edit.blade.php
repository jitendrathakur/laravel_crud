@extends('layouts.scaffold')

@section('main')

<h1>Edit Service</h1>
{{ Form::model($service, array('method' => 'PATCH', 'route' => array('services.update', $service->id))) }}
	<ul>
       

        <li>
            {{ Form::label('data', 'Data:') }}
            {{ Form::textarea('data') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('services.show', 'Cancel', $service->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
