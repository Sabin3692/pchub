<?php
  session_start();
  /* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$server = "localhost";
$username = "root";
$password = "";
$db = "emailveri";

$con = mysqli_connect($server, $username ,$password,$db);
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
if($con){
       
  ?>
  <script>
    alert("Connection Successful");
  </script>
  
  <?php
  }
if(isset($_POST['submit']))
  {
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $email =  mysqli_real_escape_string($con,$_POST['email']);
    $password =  mysqli_real_escape_string($con,$_POST['password']);
    $cpassword =  mysqli_real_escape_string($con,$_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
    $token = bin2hex(random_bytes(15));
    $email_search = " SELECT * FROM `emailveri`.`registration` WHERE `registration`.`email` ='$email'  ";
    $query = mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($query);
    $usernamesearch = " SELECT * FROM `emailveri`.`registration` WHERE `registration`.`username` ='$username'  ";
    $uquery = mysqli_query($con,$usernamesearch);
    $name_count = mysqli_num_rows($uquery);
    if($email_count>0)
    {
      ?>
      <script>
      alert("Email already exists");
      </script>

      <?php
    }
    elseif($name_count>0)
    {
      ?>
      <script>
      alert("Username already in use");
      </script>

      <?php
    }
    else{
      if($password == $cpassword){
       
       // Attempt insert query execution
        $sql = "INSERT INTO `emailveri`.`registration`(`username`, `email`, `password`, `cpassword`, `token`, `status`) VALUES ('$username','$email','$pass','$cpass', '$token','inactive')";
        if(mysqli_query($con, $sql)){
          ?>
          <script>
          alert("Inserted sucessfully");
          </script>
    
          <?php
          }
        //     //  $subject = "Email Activation";
        //     // $body = "Hi, $username.  Click here to activate your account  ini_set(http://localhost/pchub/activate.php?token=$token)";
            
        //     // $senderemail = "From: pchubnepal@gmail.com";

        //     // if (mail($email, $subject, $body, $senderemail)) {
         $_SESSION['msg'] = "Activated $email";
        //     // } 
        //     // else {
        //     //   echo "Email sending failed...";
        //     // }
        //     ini_set('SMTP','ssl://smtp.gmail.com');
        //     ini_set('smtp_port',465);
        //     ini_set('sendmail_from','pchubnepal@gmail.com');
        //     $to = $email;
        //      $headers  = "MIME-Version: 1.0" . "\r\n";
        //      $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        //      $headers  .= "From: pchubnepal@gmail.com" . "\r\n";
        //     $subject = "Confirmation For Request";
        //     $senderemail = "From: pchubnepal@gmail.com";
        //     $message = "Hi, $username.  Click here to activate your account  http://localhost/pchub/activate.php?token=$token";
        //     mail( $to, $subject, $headers,$senderemail,$message );
        
        // } else{
        //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        // }
        
      }
  
        else{
          ?>
          <script>
            alert("Password are not matching");
          </script>

          <?php
        }
    }
    

  }
  ?>
  <?php


  if(isset($_POST['login']))
  {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $email_search = " SELECT * from `emailveri`.`registration` where email ='$email' ";
      $query = mysqli_query($con,$email_search);
      $email_count = mysqli_num_rows($query);
      if($email_count){
          $email_pass = mysqli_fetch_assoc($query);
          $db_pass = $email_pass['password'];
          $_SESSION['username'] = $email_pass['username'];
          $pass_decode = password_verify($password, $db_pass);

          if($pass_decode){
              ?>
              <script>
                  alert("Login successful");
                  location.replace("redirect.php");
              </script>
          <?php 
          }
          else{
              echo "Invalid Password";
          }

      }
      else{
        ?>
              <script>
                  alert("Access Denied!!\nInvalid Password");
              </script>
          <?php 
      }

  }
mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/register.css" />
    <title>Register</title>
  </head>
  <body>
    <script src="js/register.js"></script>

    <div class="cotn_principal">
      <div class="cont_centrar">
        <div class="cont_login">
          <div class="cont_info_log_sign_up">
            <div class="col_md_login">
              <div class="cont_ba_opcitiy">
                <h2>LOGIN</h2>
                <p style=" background-color: green; color: white;font-weight: 300; padding:6px; margin:4px"> <?php 
                if(isset($_SESSION['msg'])){
                  echo $_SESSION['msg'] . "<br>";
                }else{
                  echo $_SESSION['msg'] = "You are logged out. Login again";
                }
                 ?></p>
                <p style="    color: #4e2aa5; background-color: #ebf2f6; margin: 8px; font-weight: 600; border-radius: 5px;">Already have an account ? Just Login To Enter PCHUB</p>
                <button class="btn_login" onclick="cambiar_login()">
                  LOGIN
                </button>
              </div>
            </div>
            <div class="col_md_sign_up">
              <div class="cont_ba_opcitiy">
                <h2>SIGN UP</h2>

                <p style="    color: #4e2aa5; background-color: #ebf2f6; margin: 8px; font-weight: 600; border-radius: 5px;">!! New to PC hub ? Create an account for FREE !!</p>

                <button class="btn_sign_up" onclick="cambiar_sign_up()">
                  SIGN UP
                </button>
              </div>
            </div>
          </div>

          <div class="cont_back_info">
            <div class="cont_img_back_grey">
              <img src="image/bg.jpg" alt="" />
            </div>
          </div>
          <div class="cont_forms">
            <div class="cont_img_back_">
              <img src="image/bg.jpg" alt="" />
            </div>
            <div class="cont_form_login">
              <a href="#" onclick="ocultar_login_sign_up()"
                ><i class="material-icons">&#xE5C4;</i></a
              >
              <h2>LOGIN</h2>
              <p style=" background-color: green; color: white;font-weight: 300; padding:6px; margin:4px"> <?php 
              if(isset($_SESSION['msg'])){
                echo $_SESSION['msg']. "<br>";
                
              }else{
                echo $_SESSION['msg'] = "You are logged out! Login Again";
                
              }
               ?> </p>
              <form
                action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"
                method="post"
              >
              <input type="text" name="email" placeholder="Email" required="" style="width: 255px; height: 36px ;border-radius: 5px;margin: 6px 0 6px 0;font-size: 20px;">
                <input
                  type="password"
                  name="password"
                  placeholder="Password"
                  style="width: 255px; height: 36px; border-radius: 5px; margin: 6px 0 6px 0;font-size: 20px;"
                  required
                />
                <button
                  class="btn_login"
                  name="login"
                  onclick="cambiar_login()"
                >
                  LOGIN
                </button>
              </form>
            </div>

            <div class="cont_form_sign_up">
              <a href="#" onclick="ocultar_login_sign_up()"
                ><i class="material-icons">&#xE5C4;</i></a
              >
              <h2>SIGN UP</h2>
              <form
                action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"
                method="post"
              >
                <input
                  type="text"
                  name="username"
                  placeholder="Username"
                  style="width: 255px; height: 36px; border-radius: 5px;margin: 6px 0 6px 0;font-size: 20px;"
                  required
                />
                <input type="text" name="email" placeholder="Email" style="width: 255px; height: 36px; border-radius: 5px;font-size: 20px;"required />
                <input
                  type="password"
                  name="password"
                  placeholder="Password"
                  style="width: 255px; height: 36px; border-radius: 5px;margin: 6px 0 6px 0;font-size: 20px;"
                  required
                />
                <input
                  type="password"
                  name="cpassword"
                  placeholder="Confirm Password"
                  style="width: 255px; height: 36px; border-radius: 5px;margin: 6px 0 6px 0;font-size: 20px;"
                  required
                />
                <button
                  class="btn_sign_up"
                  name="submit"
                  onclick="cambiar_sign_up()"
                >
                  SIGN UP
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
 

  </body>
</html>