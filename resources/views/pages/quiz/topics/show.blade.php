@extends('Master.Admin')

@section('content')
<div class="container">
    <h3 class="page-title">title</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
          view
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr><th>title</th>
                    <td>{{ $topic->title }}</td></tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('topics.index') }}" class="btn btn-default">back to list</a>
        </div>
    </div>

</div>
@endsection