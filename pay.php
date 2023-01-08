<?php 
    require('nav.php');

$uid = $_SESSION['userid'];
    
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

        <h4 class="mb-5">ชำระเงิน</h4>

        <h6 class="mb-3">สรุปการจอง</h6>

        <div class="row">

            <div class="col-md-7">
                <?php
                    // if(isset($_SESSION['cart_item'])){


                    //     $total = array_sum(array_map(function($value){
                    //         return $value['price']/2;
                    //     }, $_SESSION['cart_item']));

                    //     foreach ($_SESSION['cart_item'] as $key => $value){

            $result = $mysqli->query("SELECT * FROM `books` WHERE b_uid = '$uid' AND b_status = '0'");

            if ($result->num_rows > 0) {

                $sum = 0;

                while($value = $result->fetch_assoc()){

                    $sum += $value['b_price'];


            
            ?>
                <div class="col-md-12">
                    <div class="alert alert-info" role="alert">
                        <p>ห้อง <?php echo $value['b_room']?></p>
                        <p class="mb-0">check in <?php echo $value['b_st']?></p>
                        <p class="mb-0">check out <?php echo $value['b_end']?></p>
                        <p class="mb-0">ราคา <?php echo $value['b_price']/2?></p>
                    </div>
                </div>
                <?php
                        }


            ?>
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h5 class="alert-link">รวม</h5>
                        <p><?php echo $sum/2?></p>

                    </div>
                </div>
                <?php
                    }            
            ?>
            </div>

            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label">หลักฐานการชำระ</label>
                        <input type="file" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary w-100" value="ส่งหลักฐาน">
                    </div>
                </div>
            </div>


        </div>
    </div>

    <?php require('footer.php')?>

</body>

</html>