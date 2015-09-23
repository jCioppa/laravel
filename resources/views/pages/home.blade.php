@extends ('app')

@section ('content')

	<div class = "jumbotron">
		<h1> Welcome Home! </h1>
	</div>

	{!! Form::open(['url' => '/']) !!}

		<div class = "form-group">
			{!! Form::label('aasdf', 'asdf') !!} 
			{!! Form::text('aasdf', null, ['class' => 'form-control']) !!}
		</div>

		<div class = "form-group">
			{!! Form::submit('asdf', ['class' => 'btn btn-primary form-control']); !!}	
		</div>

	{!! Form::close() !!}

@endsection
