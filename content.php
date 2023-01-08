<!-- <div class="container-xl"> -->


<!-- <img class="w-100 rounded" src="https://via.placeholder.com/1200x400" alt=""> -->


<!-- <div class="my-5"> -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./imgcontent/1.jpg" class="d-block w-100" alt="..." width="1200" height="400">
        </div>
        <div class="carousel-item">
            <img src="./imgcontent/2.jpg" class="d-block w-100" alt="..." width="1200" height="400">

        </div>
        <div class="carousel-item">
            <img src="./imgcontent/3.jpg" class="d-block w-100" alt="..." width="1200" height="400">

        </div>
        <div class="carousel-item">
            <img src="./imgcontent/4.jpg" class="d-block w-100" alt="..." width="1200" height="400">

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- </div>

<!-- </div> -->

<div class="container-xl">


    <div class="my-5">

        <div class="row mb-4">
            <div class="col-6">
                <h3 class="text-start">ห้องพักของเรา</h3>
            </div>
            <div class="col-6 text-end">
                <a href="rooms.php" class="text-end">ดูทั้งหมด</a>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">


        <?php
        
        $result = $mysqli->query("SELECT * FROM `room_type` ORDER BY `room_type`.`t_id` DESC LIMIT 3");

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                ?>
        <div class="col">
            <div class="card">
                <a href="reserve.php?room_type=<?=$row['t_id']?>">
                    <img src="./imgroom/<?php echo $row['t_img']?>" class="card-img-top" alt="...">

                </a>
                <div class="card-body">
                    <a href="reserve.php?room_type=<?=$row['t_id']?>" class="text-decoration-none">
                        <h5 class="card-title"><?php echo $row['t_name']?></h5>
                    </a>
                    <p class="card-text overflow-hidden" style="max-height: 50px;"><?php echo $row['t_detail']?></p>
                </div>
            </div>
        </div>

        <?php
            }
        }
    ?>

        </div>
    </div>



</div>



<div class="py-5 bg-light">
    <div class="container-xl">

        <div class="row mb-4">
            <div class="col-6">
                <h3 class="text-start">ประชาสัมพันธ์</h3>
            </div>
            <div class="col-6 text-end">
                <a href="news.php" class="text-end">ดูทั้งหมด</a>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">


            <?php
        
            $result = $mysqli->query("SELECT * FROM `news` ORDER BY `news`.`n_id` DESC LIMIT 3");

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    $datex = explode("-", $row['n_date']);
                    $date = $datex[2]."-".$datex[1]."-".$datex[0]
                    ?>
            <div class="col">
                <div class="card">
                    <a href="newsmain.php?news_id=<?=$row['n_id']?>">
                        <img src="./imgnews/<?php echo $row['n_img']?>" class="card-img-top" alt="...">

                    </a>
                    <div class="card-body">
                        <a href="newsmain.php?news_id=<?=$row['n_id']?>" class="text-decoration-none">
                            <h5 class="card-title"><?php echo $row['n_name']?></h5>
                        </a>
                        <p class="card-text overflow-hidden" style="max-height: 50px;"><?php echo $row['n_detail']?></p>
                        <p class="text"> อัพโหลด เมื่อวันที่ <?php echo $date?></p>
                    </div>
                </div>
            </div>

            <?php
                }
            }
        ?>




        </div>
    </div>

</div>



<!-- <div class="cover-container d-flex w-100 h-100 p-3 mx-auto align-items-center bg-dark text-light text-center">
    <main class="px-3">
        <h1>Cover your page.</h1>
        <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the
            text, and add your own fullscreen background photo to make it your own.</p>
        <p class="lead">
            <a href="rooms.php" class="btn btn-lg btn-outline-light fw-bold px-5">เลือกห้องพักเลย</a>
        </p>
    </main>
</div>


<div class="container-fluid text-dark py-5 text-center bg-light" id="contact">
    <div class="row">
        <div class="col">
            <h4 class="mb-4">contact</h4>
            <p class="my-0"><i class="bi bi-geo-alt-fill"></i> Lorem ipsum dolor sit amet, consectetur elit. distinctio?
            </p>
            <p class="my-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, nemo?</p>
            <p class="my-0"><i class="bi bi-telephone-fill"></i> phone : 0586884186441</p>
            <p class="my-0"><i class="bi bi-facebook"></i> facebook : <a
                    href="https://www.facebook.com/people/Diamond-Khaokho-Chalay-%E0%B9%84%E0%B8%94%E0%B8%A1%E0%B8%AD%E0%B8%99%E0%B8%94%E0%B9%8C-%E0%B9%80%E0%B8%82%E0%B8%B2%E0%B8%84%E0%B9%89%E0%B8%AD-%E0%B8%8A%E0%B8%B2%E0%B9%80%E0%B8%A5%E0%B8%A2%E0%B9%8C/100076698626051/">Diamond
                    Khaokho Chalay</a></p>

        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.9277091267672!2d100.20536891417987!3d16.82994202307362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dfbcdf34fb8a47%3A0x84e765ec5aec4d20!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lij4Liy4LiK4Lig4Lix4LiP4Lie4Li04Lia4Li54Lil4Liq4LiH4LiE4Lij4Liy4Lih!5e0!3m2!1sth!2sth!4v1659520662480!5m2!1sth!2sth"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div> -->