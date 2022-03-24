<main class="container ">
    <form method="POST">
        <div class="d-flex flex-column mt-4">
            <h3>Add Carousel images</h3>
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
</main>