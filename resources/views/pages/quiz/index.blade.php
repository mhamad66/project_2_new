@extends('Master.Admin')
   
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">Welcome! Here are some numbers about LaraQuiz.</div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <h1>{{ $questions }}</h1>
                        questions in our database
                    </div>
                    <div class="col-md-3 text-center">
                        <h1>{{ $users }}</h1>
                        users registered
                    </div>
                    <div class="col-md-3 text-center">
                        <h1>{{ $quizzes }}</h1>
                        quizzes taken
                    </div>
                    <div class="col-md-3 text-center">
                        <h1>{{ number_format($average, 2) }} / 10</h1>
                        average score
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('tests.index') }}" class="btn btn-success mt-2">Take a new quiz!</a>
    </div>
</div>
@if(Auth::user()->hasRole('teacher'))
                <a href="{{ route('topics.index') }}" class="btn btn-primary mt-2">
                Topics
                </a>
                <a href="{{ route('questions.index') }}" class="btn btn-primary mt-2">
                questions
                </a>
                <a href="{{ route('questions_options.index') }}" class="btn btn-primary mt-2">
                    questions_options
                </a>
            @endif

</div>@endsection