<?php 
require('nav.php');

    $m_id = $_SESSION['userid'];


    $result = $mysqli->query("SELECT * FROM `member` WHERE m_id = '$m_id'");

    $value = $result->fetch_assoc();

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

        <h4 class="text-center mb-4">แก้ไขโปรไฟล์</h4>

        <form action="">

            <div class="row">
                <div class="col-md-6 mx-auto">

                    <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']?>">

                    <div class="mb-2">
                        <label for="" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" name="fname" placeholder="ชื่อ"
                            value="<?php echo $value['m_name']?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" name="lname" placeholder="นามสกุล"
                            value="<?php echo $value['m_lastname']?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" name="tel" placeholder="เบอร์โทร"
                            value="<?php echo $value['m_tel']?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">อีเมลล์</label>
                        <input type="text" class="form-control" placeholder="อีเมลล์"
                            value="<?php echo $value['m_email']?>" readonly>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">รหัสผ่าน</label>
                        <input type="text" class="form-control" name="pass1" placeholder="รหัสผ่าน" required>
                    </div>
                    <!-- <div class="mb-4">
                    <label for="" class="form-label">ยืนยันรหัสผ่าน</label>
                    <input type="text" class="form-control" name="pass2" placeholder="ยืนยันรหัสผ่าน" required>
                </div> -->
                    <div class="mb-2">
                        <input type="submit" class="btn btn-primary w-100" value="อัพเดต">
                    </div>


                </div>
            </div>

        </form>

        <?php require('footer.php')?>

    </div>



    <script>
    $(document).ready(function() {
        $('form').on('submit', function(e) {

            e.preventDefault();

            $.ajax({

                url: "process/updateProfile.php",
                method: "post",
                data: $('form').serialize(),
                success: function(data) {

                    console.log(data);
                    if (data == 'success') {

                        sweet('success', 'อัพเดตข้อมูลสำเร็จ');

                    }else if(data == 'error'){
                        sweet('error', 'อัพเดตข้อมูลไม่สำเร็จ');

                    }else{
                        sweet('warning', data);
                    }
                }
            })

        })



        function sweet(icon, title) {

            Swal.fire({
                icon: icon,
                title: title
            })
        }

    })
    </script>

</body>

</html>