@extends('Master.Admin')
@section('content')
edit info
<form  action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
     <h2 class='p-2' >profile</h2>
     
     <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">name</label>
      <input type="text" class="form-control" name="name" value="{{$user->name}}">
      </div>
      <div class="form-group col-md-6">
        <label for="email">email</label>
      <input type="email" class="form-control" name="email" value="{{$user->email}}">
      </div>
    </div>
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="name">phone_number</label>
       <input type="text" class="form-control" name="phone_number" value="{{$profile->phone_number}}">
       </div>
       <div class="form-group col-md-6">
         <label for="facebook">facebook</label>
       <input type="text" class="form-control" name="facebook" value="{{$profile->facebook}}">
       </div>
     </div>
     <div class="form-group">
       <label for="address">address</label><br>
     <textarea name="address" id="" cols="100" rows="4">{{$profile->address}}</textarea>
     </div>
     <div class="form-group">
       <label for="image">image_user</label>
        <br>
     <img src="{{$user->hasImageUser()?asset('storage/'.$user->getImageUser()):$user->getAvatar()}}" alt="" class="mb-2" style="width: 100px">
     <input type="file" class="form-control" name="image_user">
     
   </div>
   <div class="form-group">
    <img src="{{$user->hasImageIdentificationPaper()?asset('storage/'.$user->image_identification_paper()):$user->getAvatar()}}" alt="" class="mb-2" style="width: 100px">
    <label for="image_identification_paper">image_identification_paper</label>
     <br>
  <input type="file" class="form-control" name="image_identification_paper" placeholder="image_user">
  
</div>
     <button type="submit" class="btn btn-success">save profile</button>
   </form>

@endsection