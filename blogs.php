<?php

require("navBar.php");

?>

<?php
   $conn = new mysqli("localhost", "dckap", "Dckap2023Ecommerce", "Blog_Task");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Blogs WHERE BlogStatus ='Publish'";
    $result = $conn->query($sql);

    if ($result-> num_rows > 0) {
        echo "<br>";
        echo "<br>";
        echo "<center><h1 class='text-3xl font-bold text-blue-800'>Welcome to Blog Page</h1></center>";
        echo "<br>";
        echo "<br>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo " <div class='max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg'>";
            echo " <div class='mb-4 border-b border-gray-300 pb-4'><h1 class='text-3xl font-bold text-gray-800'>Title:" ." ". $row["Title"] ."</h1></div>";
            echo " <div class='mb-4 border-b border-gray-300 pb-4'><h2 class='text-2xl text-gray-600'>Description:". $row["Descriptions"] . "</h2></div>";

            echo " <div class='mb-4 border-b border-gray-300 pb-4'><p class='text-base text-gray-700'>Content:" . $row["Content"] . "</p></div>";
            echo " <div class='mb-4 border-b border-gray-300 pb-4'><h4 class='text-base text-gray-800'>Author Name:" . $row["AuthorName"] . "</h4></div>";
            echo " <div class='mb-4 border-b border-gray-300 pb-4'><h4 class='text-base text-gray-800'>BlogStatus:" . $row["BlogStatus"] . "</h4></div>";
            
            echo " </div>";
            echo " <br><br>"; 

        }

        echo "<br><br>"; 
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Blog page</title>
</head>
<body>
    <br>
    <center><H2>Welcome to Blog Page</H2></center>

    <div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg">
  <div class="mb-4 border-b border-gray-300 pb-4"><h1 class="text-3xl font-bold text-gray-800">Title:</h1></div>
  <div class="mb-4 border-b border-gray-300 pb-4"><h2 class="text-2xl text-gray-600">Description:</h2></div>
  <div class="mb-4 border-b border-gray-300 pb-4"><p class="text-base text-gray-700">Content:</p></div>
  <div class="text-sm text-gray-500"><h4 class="text-base text-gray-800">Author Name:</h4></div></div>
</body>
</html> -->