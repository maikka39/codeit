<?php
$test = "";
$errLgn = "";
$errPwd = "";

if (isset($_POST["submit"])) {
  // Check if a username had been entered
  if (!$_POST['username']) {
    $errLgn = 'Please fill in your username';
  }
  // Check if a password had been entered
  if (!$_POST['password']) {
    $errPwd = 'Please fill in your password';
  }

  // Set vars
  $usr_lgn = $_POST['username'];
  $usr_pwd = $_POST['password'];

  login($usr_lgn, $usr_pwd);

}







//
// Define Functions
//

function login($username, $password) {
  // Set connection properties
  $db_hostname = 'localhost';
  $db_name = 'codeit';
  $db_user = 'root';
  $db_password = '';

  // Create connection
  $dblink = mysqli_connect($db_hostname, $db_user, $db_password);
  // Check if a connection had been made
  if (mysqli_connect_errno()) {
    echo "Database connection failed: " . mysqli_connect_error();
  }

  // Select database
  mysqli_select_db($dblink, $db_name) or createDB($dblink, $db_name);

  // Select columns
  $sql = "SELECT * FROM `users` WHERE user_login = '$username'";
  $result = mysqli_query($dblink, $sql);

  if ($result && mysqli_num_rows($result) >= 1) {

    // Check passwords
    $sql = "SELECT user_pass FROM `users` WHERE user_login = '$username'";
    $result = mysqli_query($dblink, $sql);

    if (mysqli_fetch_row($result)[0] === $password) {
      lgn_state('lgn_state');
    } else {
      lgn_state('WrongPassword');
    }
  } else {
    $sql = "SELECT * FROM `users` WHERE user_nickname = '$username'";
    $result = mysqli_query($dblink, $sql);

    if ($result && mysqli_num_rows($result) >= 1) {

      // Check passwords
      $sql = "SELECT user_pass FROM `users` WHERE user_login = '$username'";
      $result = mysqli_query($dblink, $sql);

      if (mysqli_fetch_row($result)[0] === $password) {
        lgn_state('lgn_state');
      } else {
        lgn_state('WrongPassword');
      }
    } else {
      lgn_state('NoAccount');
    }
  }

  // Close the connection to the database
  mysqli_close($dblink) or die ("Database connection could not be closed");

}

function lgn_state($state) {
  global $errLgn, $errPwd;
  global $loggedIn;
  if ($state === 'lgn_state') {
    echo "<script>location.href='dashboard.php';</script>";
    $loggedIn = true;
  } elseif ($state === 'WrongPassword') {
    $errPwd = "Wrong Password!";
  } elseif ($state === 'NoAccount') {
    $errLgn = "Account not found!";
  } else {
    $errLgn = "Unknown Error";
  }
}


function createDB($dblink, $db_name) {
  echo "Creating database...";

  // Create Database
  $sql = "CREATE DATABASE $db_name";
  mysqli_query($dblink, $sql);
  // // Create Columns
  $sql = 'CREATE TABLE `codeit`.`users` ( `user_id` BIGINT NOT NULL , `user_login` VARCHAR(60) NOT NULL , `user_pass` VARCHAR(128) NOT NULL , `user_nickname` VARCHAR(50) NOT NULL , `user_email` VARCHAR(100) NOT NULL , `user_url` VARCHAR(100) NOT NULL , `user_registered` DATETIME NOT NULL ) ENGINE = MyISAM';
  mysqli_query($dblink, $sql);
}

?>
