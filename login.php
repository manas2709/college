<?php
include("db_con.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Collegee</title>
        <link rel="stylesheet" href="login.css">
        <script type="text/javascript">
          function validate()
          {
            
          }
        </script>
    </head>

    <body>
        <div class="box">
            <h2>Login</h2>

            <form action="check.php" method="POST">
              <div class="inputBox">
                <label for="username">Username</label>
                <input type="username" id="username" required onkeyup="this.setAttribute('value', this.value);" value="">
                
              </div>
              <div class="inputBox">
                <label for="password">Password</label>
                <input type="password" id="password" required value="" onkeyup="this.setAttribute('value', this.value)">
                
              </div>
              <input type="submit" name="SUBMIT" value="Sign In"><br><br>
              <a href="clg.php"><button type="button" name="Not a student?">Not a student?</button></a>
            </form>
            
        </div>
    </body>
</html>