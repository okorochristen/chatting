@extends('template.master')
@section('title', 'profile')

@section('content')

{{-- Navbar starts here --}}
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
                {{Auth::user()->name}}
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('index', Auth::user()->id) }}">view profile</a>
                 <a class="dropdown-item" href="{{ route('edit', Auth::user()->id) }}">edit profile</a>
                 <a class="dropdown-item" href="{{ route('create', Auth::user()->id) }}">create profile</a>
                 <a class="dropdown-item" href="{{ route('view', Auth::user()->id) }}">test profile</a>
                <div class="dropdown-divider"></div>
              `<a class="dropdown-item" href="{{ route('logout') }}"
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
    {{-- nav bar ends here --}}


<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3>bio </h3>
            @if(!$profiles->isEmpty())

            @foreach($profiles as $profile)
            <table>
                <tr> <img src="/storage/upload/{{$profile->profile_image}}" alt=""></tr>
             <div >
                 <td>
            <label for="">Name :{{$profile->name}}</label>
            </div>

            <div >
                    <label for="">country :{{$profile->country}}</label>
            </div>


            <div >
                    <label for="">Birthday :{{$profile->dob}}</label>
           </div>

           <div >
                <label for="">About Me :{{$profile->bio}}</label>
        </div>
    </td>

    </tr>
    <br>

        <div >

        </div>

            </table>

        @endforeach

@endif

        </div>


    </div>

</div>

@endsection
