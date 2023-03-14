<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./houses.css">
    <title>houses</title>
  </head>

  <body>
    <h2 id="available">Here are the available houses</h2>
    <input type="search" name="houses.php" id="available houses" placeholder="search town">

   <?php
// Retrieve the uploaded files from session
session_start();
$uploadedFiles = $_SESSION['uploaded_files'] ?? [];

// Display the uploaded files
foreach ($uploadedFiles as $key => $file) {
    echo "<p>File $key:</p>";
    echo "<ul>";
    echo "<li>Name: " . $file['name'] . "</li>";
    echo "<li>Type: " . $file['type'] . "</li>";
    echo "<li>Size: " . $file['size'] . "</li>";
    echo "</ul>";
}
?>


    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nostrum
      voluptate totam. Eveniet quisquam, facere est ducimus, eligendi dolor
      ullam ab quod perspiciatis quo itaque in accusamus? Recusandae nesciunt
      placeat quae aliquam fugit, saepe rerum.
    </p>




    
    <p><a href="/makaoMema/index.php"> Back to Homepage </a></p>
    <footer id="housesFooter">
      <p>Authors: Alex Gathungu, Mariana Maina <img src="/images/makaoMemaLogo.jpg" alt="makaoMemaLogo" height="15rem">
        &copy;2023 </p>
    </footer>
  </body>
  <!-- this is a comment -->

</html>