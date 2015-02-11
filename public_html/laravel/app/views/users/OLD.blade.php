



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
p, div, a {
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
  margin-right: 20px;
  width: 233px;
  height: 53px;
}

#username input{
  height: 56px;
}

#password{
  margin-left: auto;
  margin-right: auto;
  /*margin-top: -68px;*/
  width: 233px;
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

#logoutButton{
    position: relative;
    margin-left: 84%;
    margin-top: -20px;
    /*margin-top: -180px;
    margin-right: 60px;*/
    width:  86px;
    height: 39px;
    border: none;
    color: white;
    background:none;
    border: 1px solid #ffffff;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition-property: all;
    transition-duration: 0.2s;
    transition-timing-function: ease-in-out;
    transition-delay: 0s;
    padding-top: 9.5px;
}

#logoutButton:hover {
    background-color: rgba(16, 59, 89, 0.2);
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


   <!--        {{ Form::submit('Logout', array('class' => 'btn btn-default', 'id' => 'logoutButton')) }} -->
           <!--  <input class="commit" type="submit" class="btn btn-default" value="Login" id="loginButton"> -->
            <a href="{{URL::to('logout')}}" id="logoutButton" class="btn btn-default">Logout</a>

  
    <!-- Page Content -->

<div class="text-center" style:"color:white">
<p class="text-center" id="topSign"> Let us do your Membean for you</p>
<p class="text-center" id="bottomSign"> Complete 15 minute session in 15 seconds</p>
</div>




 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">





    

          

  
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

