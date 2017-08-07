<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: resume.php");
}
?>
  <!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body background="singam.jpg">

       <div class="row">
        <div class="col s12 m4 offset-m7 #bdbdbd grey lighten-1 " style="margin-top: 100px">
                          <div class="card #212121 grey darken-4">
                          <center class="card-title" style="font-weight: bolder;">Login</center>
                          <div class="row">
                    <form class="col s12" action=" " method="">
                      <div class="row">
                      <fieldset>
                        <div class="input-field col s12">
                          <input  type="text" style="color: white" id="first_name" name:"username" class="validate"><label for="first_name">Username</label>
                        </div>

                         <div class="row">
                      <div class="input-field col s12">
                        <input id="password" type="password" name:"password"  class="validate"><label>Password</label>
                        
                      </div>
                    </div>
           <input name="submit" type="submit" value="Login" style="width:100%;
background-color:#FFBC00;
color:#fff;
border:2px solid #FFCB00;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px">
  </fieldset>
                    </form>
                    </div>
                    </div>
          </div>
        </div>
      </div>
      <marquee style="color: white">"HAVE THE COURAGE TO GO AFTER YOUR DREAMS OR LIVE WITH THE REGRET FOR NOT DOING SO"</marquee>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
    </body>
  </html>
