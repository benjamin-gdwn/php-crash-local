<?php 
 // storing allowed file types
 $allowed_ext = array('png', 'jpg', 'gif', 'jpeg');
// conditional to check if submit has been actioned
if(isset($_POST['submit'])) {
   
    // conditional to check if a file has been uploaded
    // $_FILES is a super global
    // if the super global IS NOT empty and has a name
    if(!empty($_FILES['upload']['name'])) {
        
        // putting file details into variables
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        // setting where we want the uploads to go
        $target_dir = "uploads/${file_name}";
        // get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        // validate file extensions
        if(in_array($file_ext, $allowed_ext)) {
            // validate file size
            if($file_size <= 1000000) {
                // move the file from directory to directory
                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color : green;">File Uploaded</p>';
            } else {
                $message = '<p style="color : red;">File Is Too Large</p>';
            }
        } else {
            $message = '<p style="color : red;">Invalid File Type</p>';
        }


    } else {
        $message = '<p style="color : red;">Please Choose a File</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <!-- if no file uploaded display this message  -->
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
Select a file to upload:
<input type="file" name="upload">
<input type="submit" value="Submit" name="submit"> 
</form>
    
</body>
</html>