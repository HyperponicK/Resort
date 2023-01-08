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

        <h4 class="text-center mb-4">ลงทะเบียน</h4>

        <div class="row">
            <div class="col-md-6 mx-auto">

                <form action="">


                    <div class="mb-2">
                        <label for="" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" name="fname" placeholder="ชื่อ">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" name="lname" placeholder="นามสกุล">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" name="tel" placeholder="เบอร์โทร">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">อีเมลล์</label>
                        <input type="email" class="form-control" name="email" placeholder="อีเมลล์">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">รหัสผ่าน</label>
                        <input type="text" class="form-control" name="pass1" id="p1" placeholder="รหัสผ่าน">
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">ยืนยันรหัสผ่าน</label>
                        <input type="text" class="form-control" name="pass2" id="p2" placeholder="ยืนยันรหัสผ่าน">
                    </div>
                    <div class="mb-2">
                        <input type="submit" class="btn btn-primary w-100" value="ลงทะเบียน">
                    </div>

                </form>

                <p class="text-center">มีบัญชีแล้ว <a href="signin.php">เข้าสู่ระบบ</a></p>


            </div>
        </div>


    </div>




    <script>
        $(document).ready(function() {



            $('form').on('submit', function(e) {

                e.preventDefault();

                var p1 = $('#p1').val();
                var p2 = $('#p2').val();

                if (p1 == '' || p2 == '') {
                    sweet('error', 'รหัสผ่านไม่ครบ', 'กรุณากรอกรหัสผ่านให้ครบ')

                } else if (p1 == p2) {

                    $.ajax({

                        url: "process/reg.php",
                        method: "post",
                        data: $('form').serialize(),
                        success: function(data) {

                            if (data == 'success') {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'เพิ่มข้อมูลสำเร็จ',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                setTimeout((function() {
                                    window.location.href = "signin.php";
                                }), 1500);

                            } else if (data == 'error') {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'เพิ่มข้อมูลสำเร็จ',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                setTimeout((function() {
                                    window.location.reload();
                                }), 1500);

                            } else {
                                sweet('warning', data);
                            }
                        }
                    })


                } else {

                    sweet('error', 'รหัสผ่านไม่ตรงกัน')

                }
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