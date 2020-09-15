@extends('Master.Admin')
@section('content')
<div class="col-md-12">
    <div class="box-inn-sp">
        <div class="inn-title">
            <h4>View Topic</h4>
            <p>Education is about teaching, learning skills and knowledge.</p>
        </div>
        <div class="tab-inn">
            <div class="table-responsive table-desi">
                <table class="table table-hover ">
                    <tbody>
                        
                            <tr data-entry-id="{{ $topic->id }}">
                                <tr><td>title</td>
                                    <td>{{$topic->title }}</td></tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<a href="{{ route('topics.index') }}" class="btn btn-default">back to list</a>
@endsection
