<?php
session_start();

include('Admin\assets\config\db.php');

if (isset($_POST['email']) && isset($_POST['pass'])) {

  $email = $_POST['email'];
  $password = $_POST['pass'];

  if (empty($email) || empty($password)) {
    echo "Please enter your email and password";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email address";
  } else {

    $sql = "SELECT * FROM users WHERE email = ?";

    if ($stmt = mysqli_prepare($con, $sql)) {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);

      $result = mysqli_stmt_get_result($stmt);

      if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        if ($password == $row['password']) {

          $_SESSION['email'] = $row['email'];

          header('Location: Admin/index.php');
        } else {
          echo "Invalid password";
        }
      } else {
        echo "User not found";
      }

      mysqli_stmt_close($stmt);
    }
  }
}

mysqli_close($con);
?>
