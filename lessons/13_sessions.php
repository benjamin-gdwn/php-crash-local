<?php
// sessions are stored on the server 

// must have sessions start before doing anything
session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(
      INPUT_POST,
      'username',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
    $password = filter_input(
      INPUT_POST,
      'password',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
  
    if($username == 'ben' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    } else {
        echo 'Incorrect Login';
    }
  }

?>
<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
    <div>
      <label>Username: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>