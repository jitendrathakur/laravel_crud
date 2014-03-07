@extends('layouts.scaffold')

@section('main')

<h1>All Services</h1>

<p>{{ link_to_route('services.create', 'Add new service') }}</p>

@if ($services->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Data</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($services as $service)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no services
@endif

@stop
