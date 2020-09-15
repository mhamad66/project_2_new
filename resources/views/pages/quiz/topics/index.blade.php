@extends('Master.Admin')
@section('content')
<p>
    <a href="{{ route('topics.create') }}" class="btn btn-success">add_new</a>
</p>
<div class="col-md-12">
    <div class="box-inn-sp">
        <div class="inn-title">
            <h4> topics </h4>
            <p>Education is about teaching, learning skills and knowledge.</p>
        </div>
        <div class="tab-inn">
            <div class="table-responsive table-desi">
                <table class="table table-hover {{ count($topics) > 0 ? 'datatable' : '' }} dt-select">
                    <thead>
                        <tr>
                            <th>topics</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @if (count($topics) > 0)
                        @foreach ($topics as $topic)
                            <tr data-entry-id="{{ $topic->id }}">
                                <td>{{ $topic->title }}</td>
                            
                                <span class="label label-success"></span>
                            <td>
                                 <a href="{{ route('topics.show',[$topic->id]) }}" class="label label-primary ">view</a>
                            <a href="{{ route('topics.edit',[$topic->id]) }}" class="label label-success">edit</a>
                            
                                <form method="POST" action="{{route('topics.destroy',$topic->id)}}" style="display: inline-block;" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="label label-danger">delete</button>
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
