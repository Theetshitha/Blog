<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        span{
            width: 20px;
        }
    </style>
</head>
<body>
<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
     
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="index.php" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
            <a href="about.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
            <a href="contact.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">contact</a>
            <a href="terms.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Terms</a>
            <a href="blogs.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Blogs</a>
          </div>
        </div>
      </div>
      
        <div class="relative ml-3">

        <div class="loginBtn">
            <?php 
                if($_SESSION['name']){
                    echo (" <span style='display:flex; gap:20px; margin-right:200px;'> <a href='blogform.php' class='bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium menu'>CreateBlog</a>  <a href='logout.php' class='bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium menu'>Logout</a>  <img class=' w-30 rounded-full' src='avathar.png' ></span>");
                } else {
                    echo("<button class='bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium btnLogin' aria-current='page'><a href='blogLogin.php'> Login </a></button>");
                }
            ?>
        </div>

        </div>
      </div>
    </div>
  </div>


</nav>

    
</body>
</html>