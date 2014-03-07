@extends('layouts.scaffold')

@section('main')

<h1>All Networks</h1>

<p>{{ link_to_route('networks.create', 'Add new network') }}</p>

@if ($networks->count())
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
			@foreach ($networks as $network)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no networks
@endif

@stop
