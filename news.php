<?php require('nav.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamondkhaokhochalay</title>
</head>

<body>


    <div class="container-xl my-5" style="min-height:90vh;">

        <h4 class="mb-5">ประชาสัมพันธ์</h4>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php

            $result = $mysqli->query("SELECT * FROM `news` ORDER BY `news`.`n_id` DESC");

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    $datex = explode("-", $row['n_date']);
                    $date = $datex[2]."-".$datex[1]."-".$datex[0]

            ?>
                    <div class="col">
                        <div class="card">
                            <a href="newsmain.php?news_id=<?= $row['n_id'] ?>">
                                <img src="./imgnews/<?php echo $row['n_img'] ?>" class="card-img-top" alt="...">

                            </a>
                            <div class="card-body">
                                <a href="newsmain.php?news_id=<?= $row['n_id'] ?>" class="text-decoration-none">
                                    <h5 class="card-title"><?php echo $row['n_name'] ?></h5>
                                </a>
                                <p class="card-text overflow-hidden" style="max-height: 50px;"><?php echo $row['n_detail'] ?></p>
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
    <?php require('footer.php')?>

</body>

</html>