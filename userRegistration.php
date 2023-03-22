<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./general.css">
    <link rel="stylesheet" href="./userRegistration.css">
    <title>userRegistration</title>
  </head>

  <body>
    <h1 id="welcome-makao">Welcome to Makao Mema</h1>
    <p>Please fill in the registration form below</p>
    <form action= registration.php method="post">
      <label for="fullname">Enter names in full</label>
      <input type="text" name="fullName" placeholder="Fullnames" />
      <br />
      <label for="email">enter your email</label>
      <input type="email" name="email" value="email@email" />
      <br />
      <label for="password">Enter prefered Password</label>
      <input type="password" name="password" placeholder="password" />
      <br />
      <input type="submit" value="sign up" />
    </form>


    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor placeat
      alias id, quia corporis vel, tempore similique nisi, sed maiores dolores
      repudiandae debitis cumque nihil! Libero deleniti numquam amet nihil
      cupiditate omnis expedita eaque necessitatibus.
    </p>
    <p><a href="/makaoMema/index.php"> Back to Homepage </a></p>
    <footer id="usrfooter">
      <p>Authors: Alex Gathungu, Mariana Maina <img src="/images/makaoMemaLogo.jpg" alt="makaoMemaLogo" height="15rem">
        &copy;2023 </p>
    </footer>
  </body>

</html>