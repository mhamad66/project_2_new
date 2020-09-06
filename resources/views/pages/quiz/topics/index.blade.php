@extends('layouts.app')

@section('content')
    <h3 class="page-title">title</h3>

    <p>
        <a href="{{ route('topics.create') }}" class="btn btn-success">add_new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
        list
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($topics) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>title</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($topics) > 0)
                        @foreach ($topics as $topic)
                            <tr data-entry-id="{{ $topic->id }}">
                                <td></td>
                                <td>{{ $topic->title }}</td>
                                <td>
                                    <a href="{{ route('topics.show',[$topic->id]) }}" class="btn btn-xs btn-primary">view</a>
                                    <a href="{{ route('topics.edit',[$topic->id]) }}" class="btn btn-xs btn-info">edit</a>
                                <form method="POST" action="{{route('topics.destroy',$topic->id)}}" style="display: inline-block;" >
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
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('topics.mass_destroy') }}';
    </script>
@endsection