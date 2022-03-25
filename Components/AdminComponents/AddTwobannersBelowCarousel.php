<form method="POST">
    <div class="d-flex flex-column mt-4 border rounded-3 p-3 bg-light shadow-sm">
        <div class="d-flex justify-content-between">
            <h3>Add Carousel images</h3>
            <a href="admin.php" class="text-decoration-none text-danger h5"><i class="bi bi-x-square-fill"></i></a>
        </div>
        <label for="#imageLinkID">Image Link</label>
        <input class="form-control" type="text" name="imageLink" id="imageLinkID" placeholder="Enter the image link">
        <label for="#imageLinkID">Title</label>
        <input class="form-control" type="text" name="imageTitle" id="imageTitleID" placeholder="Enter the title of the images">
        <?php
        if (isset($ErrorMessage)) {
            errorMessage($ErrorMessage);
        }

        if (isset($successMessage)) {
            successMessage($successMessage);
        }

        ?>
        <button class="btn my-4 btn-submit" type="submit" name="imageCarouselSubmit">Submit</button>
    </div>
</form>