<?php  
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DOCUMENT</title>
        <link href="http://fonts.googleapis.com/css?family=roboto:ital,wgh@0;100;0;46"
        <link rel="stylessheet" href="style.css">
    </head>
      
    <body>
     <form method="post" action="login.php">
        <input type="text" id="email" placeholder="Email..."><br>
        <input type="password" id="password" placeholder="Password..."><br>
        <input type="submit" value="login">
        </form>
        <script scr="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
         <script>
        $(document).ready(function(){
            console.log ('page ready')
        $("button").click(function(){
        $.ajax({url: "demo_ajax_script.js", dataType: "script"});
      });
    });
    </script>
    
    <header>
        <nav>
            <div>
                <h3>DEVELOPER ALLIENCE</h3>
                <Ul class="menu-main">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">CURRENT</a></li>
                    <li><a href="#">MEMBER</a></li>
                </Ul>
            </div>
            <ul class="menu-member">
                <?php 
                     if(isset($_session["userid"]))
                     {
                    ?>
                    <li><a href="#"><?php echo $_session["userid"]; ?></a></li>
                    <li><a href="includes/logout.inc.php" class="header-login-a><LOGOUT</a></li>
                    <?php 
                     }
                     else
                     {
                        ?>
                        <li><a href="#"><SIGN UP></a></li>
                    <li><a href="#" class="header-login-a><LOGIN</a></li>
                    <?php 
                         }
                ?>
            </ul>
        </nav>
    </header>

    <section class="index-intro">
        <div class="index-intro-bg">
            <div class="wrapper">
                <div class="index-intro-c1"> 
                    <div class="video"></div>
                    <p>this app can give you more skills and information about programming</p>
         </div>
       <div class="index-intro-c2">
           <h2>we make<br>professional<br>gear</h2>
           <a href="#">FIND OUR GEAR HERE</a>
          </div>
        </div>
    </div>       
</section>

<section class="index-login">
    <div class="wrapper">
        <div class="index-login-singup">
            <h4>singup</h4>
            <p>Don't have an account yet? sing up here!</p>
            <form action="include/singup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="e-mail">
                <br>
                <button type="submit" name="submit"> SING UP </button>
            </form> 
          </div>
          <div class="index-login-login">
               <h4>LOGIN</h4>
               <p>Don't have an account yet? sing up here!</p>
               <form actio="include/login.inc.php" method="post"> 
               <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit"> LOG IN </button>
               </form>
             </div>
        </div>
</section>

</body>
</html>