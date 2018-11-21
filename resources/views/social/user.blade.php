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

        <form class="form-inline my-2 my-lg-0" method="POST" action='{{url("/profile/search")}}'>
            @csrf
              <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search for friends" aria-label="Search">
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
            {{Auth::user()->name}}
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('view', Auth::user()->id) }}">view profile</a>
             <a class="dropdown-item" href="{{ route('edit', Auth::user()->id) }}">edit profile</a>
             <a class="dropdown-item" href="{{ route('create', Auth::user()->id) }}">create profile</a>

            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
       </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
       </form>
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

@if(count($show) > 0)

@foreach($show as $post)

<!-- The if and foreach is used to pass the variable $show which was used to store the details of the users

post from the database is passed with $post which was used to store it with the model at the initial stage -->

<div class="container reeve">

  <div class="row">

    <div class="col-3">

      <div class="card">

       <img src="{{asset('/img/love.jpg')}}" id="love">


      </div>

    </div>

    <div class="col-6">

      <div class="card section">
        <div class="color">
          <div class="kalu">

            <img src="{{asset('/img/love.jpg')}}" id="love">
            <p id="okoji">Love Okoji <span> <br/>active 3 minutes ago</p>
          </div>
          <div class="space">
            <ul id="item">

              <ol class="nav-item dropleft">
                <a class="nav-link dropdown-toggle" href="#" id="drop-down" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ...</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>

              </ol>

            </ul>

          </div>

        </div>

        <div class="stage">

          <em><p class="card-text text-center" id="style">{{$post->content}}</p><em>
          <img src="/storage/post_image/{{$post->post_image}}" id="robert" class="card-img-top"/>
        </div>

        <div class="end">

          <div class="container">

            <div id="charlie">

              <form action="/social/reaction" class="ali">

                <ul class="list align-items-center">


                  <ol class="list-item">

                    <i class="far fa-hand-point-right pr-4" id="my-icon" class="like" name="like"></i>

                  </ol>



                  <ol class="list-item">

                   <i class="fas fa-grin-hearts pr-4" id="icon" name="heart" class="like"  onclick="myKing(this)"></i>

                  </ol>


                  <ol class="list-item">

                    <i class="far fa-grin-tears"  id="icon" name="tear" onclick="myQueen(this)"></i>

                  </ol>



                </ul>

              </form>

              <ul class="toshiba">


                <ol class="list-item">

                  <i class="far fa-comment-dots" id="icon" class="font-awesome" onclick="Visible()"></i>

                </ol>
              </ul>
            </div>

            <form id="my-form" method="post" action="/social/comment">
              @csrf

              <input class="form-control text-center" name="comments" type="text" placeholder="Comment">

              <input type="submit" id="submit-one" onclick="hide()" name="comment"/>

            </form>


          </div>
        </div>

      </div>
    </div>


   <div class="col-3">

     <div class="card">
     <img src="{{asset('/img/love.jpg')}}" id="love">
     </div>

   </div>



  </div>

</div>

@endforeach


@endif




@endsection
