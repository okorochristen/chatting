<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Socialite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="public/css/admin.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin.css')}}"/>

    <style>

    body{
        padding: 0;
        margin: 0;
        background-color: rgba(242, 234, 232, 0.37);
    }

    #chat{

        height: 80px;
        color:red;
    }

    #profile ul,li,form{
        padding-left: 1.2em;
    }
    #profile ul,li li i{
         font-size: 2em;
    }
    #profile ul li form {
        padding-top: .3em;
    }
    #profile ul li li li li {
        font-size: 1em;
        width: 40%;
        height: 40%;
    }

    .prosper{

        display:flex;
        justify-content:space-around;
        padding-top: 30px;

    }

    .grid{
        margin-top:60px;
    }

    #love{
        height: 60px;
        width: 60px;
        border-radius: 50%;
    }


  .flash{

      margin-top: 100px;

  }

  .section{
      height: 650px;
  }

  .color{
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
      padding-left: 20px;
  }

  #robert{
     height: 300px;
     width: 90%;

 }

#icon,#my-icon{
    font-size: 42px;
    color: blue;
    cursor: pointer;
    user-select: none;
}


#icon:hover{
    font-size: 60px;
    color: red;
}

#my-icon:hover{
    font-size: 60px;
    color: red;
}

.reeve{
    margin-top: 150px;
}
#my-form{
    display: flex;
    justify-content: center;
    width: 90%;
    margin-right: 10px;
    padding-top: 10px;
    margin-left: 10px;
    visibility: hidden;
}
#charlie{
    display:flex;
    justify-content: center;
    margin-right: 150px;
    margin-top: 40px;

}

.list{
    display:flex;
    justify-content: space-between;
    padding-left: 40px;


}

.footer{
    background-color: black;
    width: 100%;
    height: 100px;
    color: white;
    margin-top: 15.4%;
    padding-top: 40px;
}

.font-awesome{
    padding-right: 70px;
}
    </style>

</head>
<body>

@include('template.error')
@yield('content')


@include('template.footer')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="{{asset('/java/like.js')}}"></script>
 <script>



  function myKing(y){
      y.classList.toggle("fa-meh-rolling-eyes")
  }

  function myQueen(z){
      z.classList.toggle("fa-sad-cry")
  }

  let x = document.getElementById('my-form');

  function Visible(){
      x.style.visibility= "visible";
  }

  function hide(){
      x.style.visibility="hidden";
  }

</script>

</body>
</html>
