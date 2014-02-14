@extends('larafuse::layouts.scaffold')

@section('main')

<h1>All {{ ucfirst($table) }}</h1>

<p>{{ link_to_action('Sairiz\Larafuse\Controllers\TablesController@create', 'Add a new '.lcfirst($table), [$table]) }}</p>

@if ($inst->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				@foreach ($larafuse as $fuse)
					<th>{{ $fuse }}</th>
				@endforeach
			</tr>
		</thead>

		<tbody>
			@foreach ($inst as $i)
				<tr>
					@foreach ($larafuse as $fuse)
						<td>{{{ $i->$fuse }}}</td>
					@endforeach
                    <td>{{ link_to_action('Sairiz\Larafuse\Controllers\TablesController@edit', 'Edit', [$table,$i->Id], ['class' => 'btn btn-info']) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'action' => array('Sairiz\Larafuse\Controllers\TablesController@destroy',$table,$i->Id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no {{ ucfirst($table) }}
@endif

@stop
