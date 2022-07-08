<?php  
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DOCUMENT</title>
        <link href="http://fonts.googleapis.com/css?family=roboto:ital,wgh@0;100;0;46">
<!--        <link rel="stylessheet" href="style.css">-->
        <link rel="stylesheet" href="style.css">
    </head>
      
    <body>
     <form method="post" action="login.php">
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
            <div> <br><br> 
                <h3>DEVELOPER ALLIENCE</h3>
                <Ul class="menu-main"><br><br>
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
                    <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                    <?php 
                     }
                     else
                     {
                        ?>
                        <li><a href="#"><SIGN UP></a></li>
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
        <div class="index-login-signup">
            <h4>singup</h4>
            <p>Don't have an account yet? sing up here!</p>
            <form action="include/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="usernames"required>
                <input type="password" name="pwd" placeholder="Password"required>
                <input type="password" name="pwdrepeat" placeholder="Repeat Password"required>
                <input type="text" name="email" placeholder="e-mail"required>
                <br>
                <button type="submit" name="submit"> SING UP </button>
            </form> 
          </div>
        
</section>

</body>
</html>