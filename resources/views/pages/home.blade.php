@extends ('app')

@section ('content')

	<div class = "jumbotron">
		<h1> Welcome Home! </h1>
	</div>

	{!! Form::open(['url' => '/']) !!}

        {!! FormField::username(['type' => 'text']) !!}
        <div class = "form-group"> {!! Form::submit('asdf', ['class' => 'btn btn-primary form-control']); !!} </div>

	{!! Form::close() !!}

@endsection
