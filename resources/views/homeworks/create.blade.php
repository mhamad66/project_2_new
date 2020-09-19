@extends('Master.Admin')
@section('content')
{{--start  create  --}}
<div class="col-md-12">
   <div class="box-inn-sp admin-form">
       <div class="inn-title">
           <h4>Create homework</h4>
       </div>
<div class="bor ad-cou-deta-h4">
<form action="{{Route('homeworks.store')}}" method="POST" enctype="multipart/form-data"> 
          @csrf
  <h4>Create</h4>
  <div class="row">
     <div class="input-field col s12">
        <input type="text" class="validate" required="" name="title">
        <label>Title:</label>
     </div>
     <div class="input-field col s12">
        <textarea class="materialize-textarea" name="description"></textarea>
        <label>Descriptions:</label>
     </div>
     <div class="input-field col s12">
        <input type="email" class="validate" required="" name="email">
        <label>email</label>
     </div>
     <div class="input-field col s12">
      <input type="date" class="validate" required="" name="deadline" >
      <label style="margin-left: 12%" >deadline</label>
   </div>
     <div class="file-field input-field col s12">
        <div class="btn admin-upload-btn">
           <span>File</span>
           <input type="file" name="file">
        </div>
        <div class="file-path-wrapper">
           <input class="file-path validate" type="text" placeholder="File homeWork">
        </div>
     </div>
  </div> 

           <div class="row">
               <div class="input-field col s12">
                   <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
               </div>
           </div>
       </form>
   </div>
   </div>
</div>
{{-- end create--}}
@endsection