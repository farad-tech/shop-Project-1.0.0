
<?php
require_once "connectDB.php";
require_once "Functions.php";

if (isset($_POST['imageCarouselSubmit'])) {
    $imageLink  = $_POST['imageLink'];
    $imageTitle = $_POST['imageTitle'];

    //returns $ErrorMessage
    checktoBeNotEmpty($imageLink);
    checktoBeNotEmpty($imageTitle);

    if (!isset($ErrorMessage)){
        try {
            $sql = "INSERT INTO carouselimages (imageLink, imagetitle)
                VALUES ('$imageLink','$imageTitle')";
            // use exec() because no results are returned
            $conn->exec($sql);
            header("refresh: 3");
            $successMessage = "Recorded Successfuly";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}
