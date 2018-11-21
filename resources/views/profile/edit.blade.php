@extends('template.master')
@section('title', 'profile')

@section('content')
<div class="container ">
    <div class="row">
    <div class="col-md-9">


  {{-- form starts here --}}

    <form method="post"  enctype="multipart/form-data">

      @csrf

      <label for=""><h3>Edit Profile:</h3></label>
      <div class="form-group">
        <label for="">Name:</label>
      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" value="{{$profiles->name}}">
      </div>

      <div class="form-group">
        <label for="">Birthday:</label>
        <input type="date" class="form-control" name="dob" id="" aria-describedby="helpId" value="{{$profiles->dob}}">
      </div>

      <div class="form-group">
          <label for="">Mobile:</label>
          <input type="text"  name="phone_no" id=""  value="{{$profiles->phone_no}}">
      </div>
      <div>
              <label for="">upload profile image:</label>
      <input type="file" name="profile_image" id="" class="form-control" value="{{$profiles->profile_image}}">
      </div>
       <div class="form-group">
          <label for="">About me</label>
          <textarea class="form-control" name="bio" id="" rows="3" value="">{{$profiles->bio}}</textarea>
       </div>

       <div class="form-group">
          <label for="">email:</label>
          <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" value="{{$profiles->email}}">
      </div>

       <div class="form-group">
          <label for="">Country:</label>
          <input type="text" class="form-control" name="country" id="" aria-describedby="helpId" value="{{$profiles->country}}">
       </div>
       <input type="submit" class="btn btn-primary" value="Update">





      </form>
  {{-- end of the form --}}

  </div>

    </div>

  </div>

  @endsection
