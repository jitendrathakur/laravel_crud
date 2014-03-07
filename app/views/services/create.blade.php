@extends('layouts.scaffold')

@section('main')

<h1>Create Service</h1>
<pre>
<?php $test = '{"uid" : 5650, "networks" : [ { "nid" : 1, "n_name" : "home", "n_ip" : "1.2.3.4", "n_status" : 1 }, { "nid" : 3, "n_name" : "work", "n_ip" : "8.8.8.8", "n_status" : 0 } ], "hostnames" : [ { "hostname" : "ip.unotelly.com", "block" : 1 }, { "hostname" : "nba.com", "block" : 0 }, { "hostname" : "facebook.com", "block" : 1 } ] }'; ?>
{{ $test }}
</pre>

{{ Form::open(array('route' => 'services.store')) }}
	<ul>       

        <li>
            {{ Form::label('data', 'Data:') }}
            {{ Form::textarea('data') }}
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


