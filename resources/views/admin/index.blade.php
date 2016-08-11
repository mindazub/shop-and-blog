@extends('layouts.app')

@section('content')

<div class="container">
	
	<h1>ADMIN AREA</h1>

		<table class="table table-inverse">
			<thead>
				<tr>
					<th>Username</th>
					<th>Email</th>
					<th>isAdmin</th>
					<th>Write Posts</th>
					<th>Insert Products</th>
				</tr>
			</thead>

			<tbody>
				@forelse ( $users as $user )
					<tr>
						<td><a href="{{ route('profile.show', $user->id) }}">{{ $user->name }}</a></td>
						<td>{{ $user->email }}</td>			
						<td>{{ $user->isAdmin }}</td>
						@if($user->isAdmin)
						<td>Yes</td>
						<td>Yes</td>
						@else
						<td><input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"></td>
						<td><input id="toggle-two" type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"></td>
						@endif
					</tr>
				@empty

					<h2>No users today. </h2>

				@endforelse
			</tbody>

		</table>

</div>

@stop

@section('javascripts')

	<script>
	  $(function() {
	    $('#toggle-two').bootstrapToggle({
	      on: 'Enabled',
	      off: 'Disabled'
	    });
	  })
	</script>

@stop