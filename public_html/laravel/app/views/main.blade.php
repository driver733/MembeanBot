@extends('UserAuth::layout.master')

@section('content')




<!-- <!DOCTYPE html>
<html lang="en"> -->

<style>

.right {
    position: absolute;
    right: 0px;
    width: 500px;
    background-color: #FFFFFF;
}
.left {
    position: absolute;
    left: 300px;
    width: 800px;
   
}
.leftForm {
    position: absolute;
    left: -290px;
    width: 1200px;
    background-color: #FFFFFF;
}

img {
    z-index: -1;
}
body {
   background:#3686be !important;
}

.thumbnail{
    margin-top: 300px;
}

.navbarnavbar-default{
   background: transparent;
}
p, div {
   font-family: 'Lato', sans-serif;
}
.modal-header {
    border-bottom: none;
}
.modal-content {
  background-color: #3686be;
  border: none;
    }

#username{
  margin-left: 20px;
  height: 53px;
}

#username input{
  height: 56px;
}

#password{
  /*margin-top: -68px;*/
  margin-left: 20px;
  height: 53px;
}

#password input{
  height: 56px;
}

#usernameSize{
    padding-top: 26.5px;
    padding-bottom: 26.5px;
    font-size: 18px;
}
#passwordSize{
    padding-top: 26.5px;
    padding-bottom: 26.5px;
    font-size: 18px;
}

#theForm{
  margin-top: 100px;
}

#loginButton{
    margin-left: 20px;
    width:  208px;
    height: 54px;
    border: none;
    color: white;
    background-color: #215f8b;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    -webkit-transition-duration: 0.4s;
   -moz-transition-duration: 0.4s;
   -o-transition-duration: 0.4s;
   transition-duration: 0.4s;
}

#loginButton:hover {
    background-color: #19486a;
}

#topSign{
    font-size:54px;
     color:white;
     letter-spacing: 1.5px;
}
#bottomSign{
font-size:26px;
 color:white;
 letter-spacing: 1.5px;
}


</style>



<head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item - Start Bootstrap Template</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>




  
    <!-- Page Content -->

<div class="text-center" style:"color:white">
<p class="text-center" id="topSign"> Let us do your Membean for you</p>
<p class="text-center" id="bottomSign"> Complete 15 minute session in 15 seconds</p>
</div>




 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">




  <div class="text-center">
  <!--   <div class="row" style="padding: 91px 100px 19px 50px;"> -->
  {{ Form::open(array('route' => 'login.store')) }}
  <div class="form-inline" id="theForm" role="form" class ="row">
    
        <!-- <form class="form-inline" role="form" method="post"> -->

          <div class="form-group">
          
        {{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Membean Email', 'id' => 'username')) }}
              <!-- <input type="username" class="form-control" placeholder="Email Address" name="username"> -->
          </div>
          <div class="form-group">
         
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Membean Password', 'id' => 'password')) }}
              <!-- <input type="password" class="form-control" placeholder="Password" name="pwd"> -->
          </div>
          <div class="form-group">
          {{ Form::submit('Login', array('class' => 'btn btn-default', 'id' => 'loginButton')) }}
           <!--   <input class="commit" type="submit" class="btn btn-default" value="Login" id="loginButton"> -->
          </div>
          {{ Form::close() }}
    <!-- </div> -->
    </div>

  </div>

  
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

@stop
