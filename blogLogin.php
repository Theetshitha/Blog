<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $conn = new mysqli("localhost", "dckap", "Dckap2023Ecommerce", "Blog_Task");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $username = $_POST['uname'];
  $password = $_POST['password'];
 
      $query = "SELECT ID FROM UserDetails WHERE name = '$username' and password='$password'";
      $result = $conn->query($query);
 
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $_SESSION['name'] = $username;
              header("location: index.php");
          }
      } else {
          $error = 'Invalid username or password';
      }

  $conn->close(); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
    <div>
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">User Name</label>
        <div class="mt-2">
          <input id="name" name="uname" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>

    <p class="mt-5 text-center text-sm text-gray-500">
    <a href="index.php">BACK TO HOME</a>
     <Br></Br>   
    New User?
      <a href="blogSignUp.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Create New Account in to Theetshi's Blog</a>
    </p>
  </div>
</div>

</body>
</html>