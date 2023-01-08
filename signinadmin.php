<?php require('nav.php')?>

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

        <h4 class="text-center mb-4">เข้าสู่ระบบแอดมิน</h4>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="mb-2">
                    <label for="" class="form-label">อีเมลล์</label>
                    <input type="text" class="form-control" placeholder="อีเมลล์">
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">รหัสผ่าน</label>
                    <input type="text" class="form-control" placeholder="รหัสผ่าน">
                </div>
                <div class="mb-2">
                    <!-- <input type="submit" class="btn btn-primary w-100" value="เข้าสู่ระบบ"> -->
                    <a href="admin" class="btn btn-primary w-100">เข้าสู่ระบบ</a>

                </div>
                <!-- <p class="text-center">ยังไม่มีบัญชี <a href="signup.php">ลงทะเบียน</a></p> -->

            </div>
        </div>


    </div>

    <?php require('footer.php')?>


</body>

</html>