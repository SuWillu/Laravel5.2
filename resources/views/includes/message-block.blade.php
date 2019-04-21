@if(count($errors) > 0)
	<div class="error">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>	
@endif
@if(Session::has('message'))
	<div class="success">
	{{ Session::get('message') }}
	</div>
@endif
@if(Session::has('error'))
	<div class="error">
	{{ Session::get('error') }}
	</div>
@endif
