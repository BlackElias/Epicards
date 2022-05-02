<?php

include_once("bootstrap.php");

if (!empty($_POST)) {
  try {
    $user = new User();
    $user->setEmail($_POST["email"]);
   // $user->checkEmail();

    $user->setUsername($_POST["username"]);
  //  $user->checkUsername();

    $user->setPassword($_POST["password"]);
    $user->hashPassword();

    $user->save();

    $username = $user->getUsername();
    $currentUser = $user->getLoggedUser($username);
    session_start();
    $_SESSION["userId"] = $currentUser["id"];

    header("Location: index.php");
  } catch (\Throwable $th) {
    $error = $th->getMessage();
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/signup.css">
  <title>Document</title>
</head>

<body>
  <?php if (isset($error)) : ?>
    <div class="user-messages-area">
      <div class="alert alert-danger">
        <ul>
          <li><?php echo $error ?></li>
        </ul>
      </div>
    </div>
  <?php endif; ?>
  <main>
    <div style="padding: 2rem 2rem;" class="box-container-medium">
      <h1 class="form-title">Sign up</h1>
      <form enctype="multipart/form-data" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control form-border" id="email" name="email" placeholder="Email"></input>
        </div>
        <div class="mb-3">
          <label for="postDescription" class="form-label">Username</label>
          <input class="form-control form-border" id="postDescription" name="username" placeholder="Username"></input>
        </div>
        <div class="mb-3">
          <label for="postTags" class="form-label">Password</label>
          <input type="password" name="password" class="form-control form-border" id="postTags" name="tags" placeholder='Password' />
        </div>
        <button type="submit" class="w-100 btn btn-lg submit">Sign up</button>
        <h6 class="mt-4 mb-3 text-muted">Already have an account? <a href="login.php">Login</a></h6>
      </form>
    </div>
  </main>
</body>

</html>