                  
@extends('Master.Admin')
@section('content')
<p>
    <a href="{{ route('questions.create') }}" class="btn btn-success">add_new questions</a>
</p>
<div class="col-md-12">
    <div class="box-inn-sp">
        <div class="inn-title">
            <h4> topics </h4>
            <p>Education is about teaching, learning skills and knowledge.</p>
        </div>
        <div class="tab-inn">
            <div class="table-responsive table-desi">
                <table class="{{ count($questions) > 0 ? 'datatable' : '' }} dt-select">
                    <thead>
                        <tr>
                            <th> questions fields topic</th>
                            <th>questions.fields.question-text</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($questions) > 0)
                        @foreach ($questions as $question)
                        <tr data-entry-id="{{ $question->id }}">
                            <td>{{ $question->topic->title or '' }}</td>
                            <td>{{ $question->question_text }}</td>
                            <td>
                                <a href="{{ route('questions.show',[$question->id]) }}" class="btn btn-xs btn-primary">view</a>
                                <a href="{{ route('questions.edit',[$question->id]) }}" class="btn btn-xs btn-info">edit</a>
                                <form method="POST" action="{{route('questions.destroy',$question->id)}}" style="display: inline-block;" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">no entries in table</td>
                    </tr>
                @endif

                        </tr>												
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('topics.mass_destroy') }}';
    </script>
@endsection
