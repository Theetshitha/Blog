<?php

// session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    // if(!isset($_SESSION['name']) || $_SESSION['name'] !== true) {
    //     header("Location: login.php");
    //     exit;
    // }

    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['contents'];
    $author = $_POST['authorName'];
    $status1 = $_POST['status'];

        $conn = new mysqli("localhost", "dckap", "Dckap2023Ecommerce", "Blog_Task");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql_insert = "INSERT INTO Blogs (Title, Descriptions, Content, AuthorName, BlogStatus)
                VALUES ('$title', '$description', '$content', '$author', '$status1')";

        if ($conn->query($sql_insert) === TRUE) {
            echo "<script>alert('your blog created successfully')</script>";
            $username = $email = $password = $confirm_password = '' ;
            header("location: blogs.php");
        } else {
            echo "<span class='error'>Error: " . $sql_insert . "<br>" . $conn->error . "</span>";
        }
        
        $conn->close();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    *{
        line-height: 0px;
    }
    </style>
    <title>create blog form</title>
</head>
<body>
  <!-- component -->
<div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 bg-white border-b border-gray-200">
            
                    <form method="POST" action="#">
                        <div class="mb-2">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required>
                        </div>

                        <div class="mb-2">
                            <label class="text-xl text-gray-600">Description <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" id="description" placeholder="(Optional)">
                        </div>

                        <div class="mb-2">
                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="contents" id="description" placeholder="(Optional)">

                        </div>

                        <div class="mb-2">
                            <label class="text-xl text-gray-600">Author Name <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="authorName" id="description" placeholder="(Optional)">
                        </div>

                        <div style='gap:20px;' class="flex p-1">
                            <select class="border-2 border-gray-300 border-r p-2" name="status">
                                <option>Publish</option>
                                <option>Draft</option>
                            </select>
                            
                            <button role="cancel" class="p-3 bg-red-500 text-white hover:bg-red-400" required> <a href="index.php">Cancel</a> </button>
                            
                            <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required> Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>  
</body>
</html>