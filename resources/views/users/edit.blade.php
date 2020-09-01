@extends('layouts.app')
@section('content')
<form action="{{route('users.update',$user->id)}}" method="post">
  @csrf
  @method('PUT' ) 
<div class="row">
    <div class="col-6">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active text-center" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Edit Role</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Name : {{$user->name}}</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Email: {{$user->email}}</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"> Role: {{$user->roles->first()->display_name}} </a>
        <div class="form-group">
<div class="checkbox">
    <label> 
        <input type="checkbox" name="roles[]" value="super_admin" {{$user->hasRole('super_admin')?'checked':''}}> super admin
    </label>
    <label> 
        <input type="checkbox" name="roles[]" value="teacher" {{$user->hasRole('teacher')?'checked':''}}>  teacher
    </label>
    <label> 
        <input type="checkbox" name="roles[]" value="student" {{$user->hasRole('student')?'checked':''}}>  student
    </label>
</div>

        </div>
      <button class="btn btn-success" type="submit">Update</button> 
      
    </div>
    </div>
  </div>
</form>
@endsection