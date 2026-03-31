<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<h2>Upload File</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile" required>
    <button type="submit" name="upload">Upload</button>
</form>

<?php
if (isset($_POST['upload'])) {
    $fileName = $_FILES['myfile']['name'];
    $tmpName = $_FILES['myfile']['tmp_name'];

    $folder = "uploads/";

    if (move_uploaded_file($tmpName, $folder . $fileName)) {
        echo "<p>File uploaded successfully!</p>";
        echo "<a href='download.php?file=$fileName'>Download File</a>";
    } else {
        echo "Upload failed";
    }
}
?>

</body>
</html>