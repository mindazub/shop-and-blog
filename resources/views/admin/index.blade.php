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
				</tr>
			</thead>

			<tbody>
				@forelse ( $users as $user )
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>			
						<td>{{ $user->isAdmin }}</td>
					</tr>
				@empty

					<h2>No users today. </h2>

				@endforelse
			</tbody>

		</table>

</div>

@stop