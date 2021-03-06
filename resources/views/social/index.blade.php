@extends('template.master')

@section('content')


<div class="container-fliud">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

   <img src="{{asset('/svg/accusoft.svg')}}" class="navbar-brand" alt="chat" id="chat">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#profile" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="profile">

      <ul class="navbar-nav ml-auto">

        <li class="nav-item">

         <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search for friends" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </li>

        <li class="nav-item">

          <i class="fas fa-bell"></i>

        </li>

        <li class="nav-item">

         <i class="fas fa-comments"></i>

        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="{{ route('profile.create') }}">profile</a>
            <a class="dropdown-item" href="#">Another actio</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
         </div>
       </li>
      </ul>
    </div>
 </nav>


  <div class="prosper">

    <div id="one">

      <i class="fas fa-home"></i>

    </div>

    <div id="two">

     <i class="fas fa-compass"></i>

    </div>

     <div id="three">

       <i class="fas fa-align-left"></i>

      </div>

     <div id="four">

       <i class="fas fa-user"></i>

      </div>

    </div>
  </div>
</div>

<div class="container flash">

  <form class="form" method="POST" action="/social/post" enctype="multipart/form-data">

    @csrf

    <input class="form-control form-control-lg" type="text" id='bae' name="content" placeholder="What's on Your Mind ?">

    <input type="file" id="image" class="mt-4" name='post_image'>

    <input type="submit" name="submit_post"/>

  </form>
</div>

@include('social.test')



@endsection
