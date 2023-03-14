<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if file was uploaded successfully
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        // Get file details
        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];
        $fileSize = $_FILES['file']['size'];
        $fileTempName = $_FILES['file']['tmp_name'];

        // Process the uploaded file here
        // For example, you could store it in an array
        $uploadedFiles = [
            'file1' => [
                'name' => $fileName,
                'type' => $fileType,
                'size' => $fileSize,
                'tmp_name' => $fileTempName
            ]
        ];

        // Store the uploaded files in session
        session_start();
        $_SESSION['uploaded_files'] = $uploadedFiles;

        // Redirect to the display page
        header('Location: display.php');
        exit();
    } else {
        echo 'Error uploading file';
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>
