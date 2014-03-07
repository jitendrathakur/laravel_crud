@extends('layouts.scaffold')

@section('main')

<h1>Show Network</h1>

<p>{{ link_to_route('networks.index', 'Return to all networks') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nid</th>
			<th>Name</th>
			<th>IP</th>
			<th>Status</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $network->id }}}</td>
			<td>{{{ $network->n_name }}}</td>
			<td>{{{ $network->n_ip }}}</td>
			<td>{{{ $network->n_status }}}</td>
            <td>{{ link_to_route('networks.edit', 'Edit', array($network->id), array('class' => 'btn btn-info')) }}</td>
            <td>
                {{ Form::open(array('method' => 'DELETE', 'route' => array('networks.destroy', $network->id))) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
		</tr>
	</tbody>
</table>

@stop
