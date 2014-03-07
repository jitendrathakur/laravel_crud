@extends('layouts.scaffold')

@section('main')

<h1>All Hostnames</h1>

<p>{{ link_to_route('hostnames.create', 'Add new hostname') }}</p>

@if ($hostnames->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Hostname</th>
				<th>Block</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($hostnames as $hostname)
				<tr>
					<td>{{{ $hostname->hostname }}}</td>
					<td>{{{ $hostname->block }}}</td>
                    <td>{{ link_to_route('hostnames.edit', 'Edit', array($hostname->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('hostnames.destroy', $hostname->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no hostnames
@endif

@stop
