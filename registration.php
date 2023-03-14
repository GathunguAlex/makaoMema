    <?php
// Establish database connection
$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get form data
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Insert data into MySQL database
  $sql = "INSERT INTO users (fullName, email, password) VALUES ('$fullName', '$email', '$password')";
  if ($conn->query($sql) === TRUE) {
    echo "New user registered successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close database connection
$conn->close();
?>