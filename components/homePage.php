<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <link rel="stylesheet" href="./homePage.css">
          <title>Homepage</title>
     </head>

     <body>
          <h1 id="welcome"> Welcome to Makao Mema(M.M) </h1>
          <aside>
               We understand how frustrating house hunting can be; worry no more, M.M is
               here for you
          </aside>
          <br />
           
          <p>
               Please login here:
               <a href="./userRegistration.php" target="_blank">No account?
               </a>
          </p>

          <form id="reg" method="post" action="homePage.php">
               <label for="name">Name</label>
               <input type="text" name="fullName" placeholder="enter your Fullname" />
               <br />
               <label for="password">Password</label>
               <input type="password" name="password" placeholder="enter your password" />
               <br />
               <input type="submit" value="Login" />
          </form>
           <?php 
           
            session_start();

            if (isset($_POST['fullName']) && isset($_POST['password'])) {
                         $username = $_POST['username'];
                         $password = $_POST['password'];

             if ($username == 'your_username' && $password == 'your_password') {
        // Set a session variable to indicate that the user is logged in
        $_SESSION['logged_in'] = true;

        // Redirect the user to another page
        header('houses.php');
        exit();

            } else {
        // Display an error message if the username or password is incorrect
        echo 'Incorrect username or password';
    }
} 
          ?>
          
          <p class="loremHomePage">
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, facilis!
               Accusantium sed ducimus, alias molestias vero iure nulla cupiditate
               nesciunt, soluta, ipsam quasi nostrum voluptate ex! Culpa magnam, ipsam
               incidunt a nisi sapiente accusantium, voluptas possimus soluta magni omnis
               aliquid officiis deserunt, rerum quo modi eius cum dolorum ex quam?
          </p>

          <p><a href="/index.php"> Back to Homepage </a></p>
          <br />
          <footer id="homePageFooter">
               <p>Authors: Alex Gathungu, Mariana Maina <img src="/images/makaoMemaLogo.jpg" alt="makaoMemaLogo"
                         height="15rem">
                    &copy;2023 </p>
          </footer>
     </body>

</html>