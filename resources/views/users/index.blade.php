@extends('layouts.app')
@section('content')
<div class="container">    

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">role</th>
        <th scope="col">edit/delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
{{
    $user->roles->first()->display_name
}}
<br>
        </td>
      <td>
        <a class="btn btn-success btn-sm float-right m-2" href="{{route('users.edit',$user->id)}}">Edit</a> 
        <form action="users/{{$user->id}}" method="POST" class="float-right m-2">
          @csrf
          @method('delete')
          <button href="" class="btn btn-danger btn-sm ">delete</button>
        </form>
      </td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>


@endsection