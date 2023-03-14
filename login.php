session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username length

    if (strlen($username) < 5) {
        echo 'Username should be at least 5 characters long.';
        exit();
    }

    // Validation of username and password

    if ($username === 'your_username' && $password === 'your_password') {
        // Set a session variable to indicate that the user is logged in
        $_SESSION['logged_in'] = true;

        // Greet the user by name

        echo "Hi, $username! welcome to makao mema.";

        // Redirect the user to another page

        header('Location: makaoMema/houses.php');
        exit();
    } else {
        // Display an error message if the username or password is incorrect
        
        echo 'Incorrect username or password. <a href="/makaoMema/userRegistration.php" target="_blank">No account?</a>';
    }
} 

