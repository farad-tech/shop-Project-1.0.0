<div class="d-flex row p-2 container-fluid m-0">
    <div class="col-md-8 col-12 d-flex">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $titlesArray = array();
                $imagesArray = array();

                $sql = 'SELECT * FROM carouselimages ORDER BY id DESC LIMIT 4';

                foreach ($conn->query($sql) as $row) {
                    $id = $row['id'];
                    $image = $row['imageLink'];
                    $title = $row['imageTitle'];

                    array_push($imagesArray, $image);
                    array_push($titlesArray, $title);
                }
                ?>
                <div class="carousel-item active">
                    <img src="<?php echo $imagesArray[0]; ?>" class="d-block w-100 rounded-3" alt="<?php echo $titlesArray[0]; ?>">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $imagesArray[1]; ?>" class="d-block w-100 rounded-3" alt="<?php echo $titlesArray[1]; ?>">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $imagesArray[2]; ?>" class="d-block w-100 rounded-3" alt="<?php echo $titlesArray[2]; ?>">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $imagesArray[3]; ?>" class="d-block w-100 rounded-3" alt="<?php echo $titlesArray[3]; ?>">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-md-4 col-12">
                ffffffffffff
    </div>
</div>