<?php
if (isset($_GET['news_id'])) {
    require('nav.php');

    $news_id = $_GET['news_id'];

    $result = $mysqli->query("SELECT * FROM `news` WHERE n_id = '$news_id'");

    $row = $result->fetch_assoc();


    $datex = explode("-", $row['n_date']);
    $date = $datex[2] . "-" . $datex[1] . "-" . $datex[0]

?>
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

            <div class="row">
                <div class="col-md-6">
                    <img class="w-100 rounded shadow-sm mb-3" src="./imgnews/<?php echo $row['n_img'] ?>" alt="">

                </div>

                <div class="col-md-6 px-3">

                    <h4><b><?php echo $row['n_name'] ?></b></h4>
                    <p class="text"> อัพโหลด เมื่อวันที่ <?php echo $date ?></p>
                    <p class="text-break"><?php echo $row['n_detail'] ?></p>

                </div>

            </div>
        </div>

        <?php require('footer.php')?>

    </body>

    </html>

<?php
}
?>