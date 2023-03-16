<?php
session_start();

// enable error reporting in your PHP code to display any errors directly in the browser

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Connect to the SQLite database
$db = new SQLite3('/var/www/html/makaoMema/makaoMema.db');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username length

    // if (strlen($username) < 5) {
    //     echo 'Username should be at least 5 characters long.';
    //     exit();
    // }

    // Query the database to find the user with the given username and password

    $stmt = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $result = $stmt->execute();

    // Check if a user with the given username and password was found

    $row = $result->fetchArray(SQLITE3_ASSOC);
    if ($row) {
        // Set a session variable to indicate that the user is logged in
        $_SESSION['logged_in'] = true;

        // Greet the user by name

        echo "Hi, $username! welcome to makao mema.";

        // Redirect the user to another page

       header('Location: /makaoMema/houses.php');

        exit();
    } else {
        // Display an error message if the username or password is incorrect
        
        echo 'Incorrect username or password. <a href="/makaoMema/userRegistration.php" target="_blank">No account?</a>';
    }
} 
?>
