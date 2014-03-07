@extends('layouts.scaffold')

@section('main')

<h1>Show Service</h1>

<p>{{ link_to_route('services.index', 'Return to all services') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
				<th>Data</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $service->id }}}</td>
					<td>{{{ $service->data }}}</td>
                    <td>{{ link_to_route('services.edit', 'Edit', array($service->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('services.destroy', $service->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
