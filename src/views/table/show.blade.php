@extends('larafuse::layouts.scaffold')

@section('main')

<h1>Show {{ ucfirst($table) }}</h1>

<p>{{ link_to_action('Sairiz\Larafuse\Controllers\TablesController@index', 'Return to all '.$table, [$table]) }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			@foreach ($larafuse as $fuse)
				<th>{{ $fuse }}</th>
			@endforeach
		</tr>
	</thead>

	<tbody>
		<tr>
			@foreach ($larafuse as $fuse)
				<td>{{{ $inst->$fuse }}}</td>
			@endforeach
            <td>{{ link_to_action('Sairiz\Larafuse\Controllers\TablesController@edit', 'Edit', [$table,$inst->Id], ['class' => 'btn btn-info']) }}</td>
            <td>
                {{ Form::open(array('method' => 'DELETE', 'action' => array('Sairiz\Larafuse\Controllers\TablesController@destroy',$table,$inst->Id))) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
		</tr>
	</tbody>
</table>

@stop
