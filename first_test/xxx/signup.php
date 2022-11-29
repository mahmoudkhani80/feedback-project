<?php include 'db.php' ?>

<?php
session_start();
// Set vars to empty values
$username = $password = '';
$usernameErr = $passwordErr = '';

// Form submit
if (isset($_POST['submit'])) {
  // Validate name
  if (empty($_POST['username'])) {
    $usernameErr = 'username is required';
  } else {
    // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_input(
      INPUT_POST,
      'username'
    );
  }

  // Validate email
  if (empty($_POST['password'])) {
    $passwordErr = 'password is required';
  } else {
    // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
  }


  if (empty($usernameErr) && empty($passwordErr)) {
    // add to database
    $password = md5($password);
    $sql = "INSERT INTO adminlogin (id, username, password) VALUES (0,'$username', '$password')";
    if (mysqli_query($conn, $sql)) {
      // success
      header('Location: signin.php');
    } else {
      // error
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
?>


    <h2>sign up</h2>
    <?php echo isset($username) ? $username : ''; ?>
    <p class="lead text-center">enter your username and password</p>

    <form method="POST" action="<?php echo htmlspecialchars(
      $_SERVER['PHP_SELF']
    ); ?>" class="mt-4 w-75">
      <div class="mb-3">
        <label for="username" class="form-label">username</label>
        <input type="text" class="form-control <?php echo !$usernameErr ?:
          'is-invalid'; ?>" id="username" name="username" placeholder="please provide a username" value="<?php echo $username; ?>">
      </div>
      <br>
      <div class="mb-3">
        <label for="password" class="form-label">password</label>
        <input type="password" class="form-control <?php echo !$passwordErr ?:
          'is-invalid'; ?>" id="password" name="password" placeholder="please provide a password" value="<?php echo $password; ?>">
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>