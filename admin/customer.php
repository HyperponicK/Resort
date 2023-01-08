<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลูกค้า</title>
</head>

<body>

    <div class="container-fluid">

        <div class="row">

            <div class="col-3 bg-info p-0">
                <?php require('nav.php') ?>
            </div>

            <div class="col-9 overflow-auto" style="flex-grow: 1;">

                <div class="row p-3" style="height:11vh;">
                    <div class="col-md-6">
                        <h3>ลูกค้า</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">เพิ่มลูกค้า</a>
                    </div>
                </div>


                <div class="col-md-12 p-3" style="height:89vh;">
                    <div class="card">
                        <div class="card-header">
                            <i class="bi bi-table"></i>
                            ตารางลูกค้า
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th hidden class="text-center">รหัสลูกค้า</th>
                                        <th class="text-center">ชื่อ-นามสกุล</th>
                                        <th class="text-center">เบอร์โทร</th>
                                        <th class="text-center">อีเมลล์</th>
                                        <th class="text-center">จัดการ</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    $result = $mysqli->query("SELECT * FROM `member` ORDER BY `member`.`m_id` DESC");

                                    if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {


                                    ?>

                                            <tr>
                                                <td hidden><?php echo $row['m_id'] ?></td>
                                                <td><?php echo $row['m_name'] . " " . $row['m_lastname'] ?></td>
                                                <td><?php echo $row['m_tel'] ?></td>
                                                <td><?php echo $row['m_email'] ?></td>

                                                <td>
                                                    <button class="btn btn-warning editbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop5" id="<?php echo $row['m_id'] ?>">แก้ไข</button>

                                                    <button class="btn btn-danger deletebtn" id="<?php echo $row['m_id'] ?>">ลบ</button>
                                                </td>
                                            </tr>

                                    <?php }
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- </div> -->


            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">เพิ่มลูกค้า</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" id="form">

                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" name="fname" placeholder="ชื่อ" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" name="lname" placeholder="นามสกุล" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">เบอร์โทร</label>
                            <input type="text" class="form-control" name="tel" placeholder="เบอร์โทร" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">อีเมลล์</label>
                            <input type="text" class="form-control" name="email" placeholder="อีเมลล์" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">รหัสผ่าน</label>
                            <input type="text" class="form-control" name="pass1" placeholder="รหัสผ่าน " id="p1" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">ยืนยันรหัสผ่าน</label>
                            <input type="text" class="form-control" name="pass2" placeholder="ยืนยันรหัสผ่าน" id="p2" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">ลงทะเบียน</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>

                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- Modal  editprofile-->
    <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">แก้ไขข้อมูล</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" id="form5">

                    <input type="hidden" id="m_id" name="m_id">

                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="ชื่อ" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="นามสกุล" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">เบอร์โทร</label>
                            <input type="text" class="form-control" name="tel" id="tel" placeholder="เบอร์โทร" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">อีเมลล์</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="อีเมลล์" readonly>

                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">รหัสผ่าน</label>
                            <input type="text" class="form-control" name="pass1" id="pass1" placeholder="รหัสผ่าน " id="p1">
                        </div>
                        <!-- <div class="mb-2">
                            <label for="" class="form-label">ยืนยันรหัสผ่าน</label>
                            <input type="text" class="form-control" name="pass2" placeholder="ยืนยันรหัสผ่าน" id="p2">
                        </div> -->

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">แก้ไข</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>

                    </div>

                </form>

            </div>
        </div>
    </div>




    <input type="hidden" value="customer" id="page">
    <script src="menu.js"></script>

</body>

</html>


<script>
    $(document).ready(function() {



        $('#form').on('submit', function(e) {

            e.preventDefault();

            var p1 = $('#p1').val();
            var p2 = $('#p2').val();

            if (p1 == '' || p2 == '') {
                sweet('error', 'รหัสผ่านไม่ครบ', 'กรุณากรอกรหัสผ่านให้ครบ')

            } else if (p1 == p2) {

                $.ajax({

                    url: "../process/reg.php",
                    method: "post",
                    data: $('#form').serialize(),
                    success: function(data) {
                        console.log(data);

                        if (data == 'success') {

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








        $('#form5').on('submit', function(e) {

            e.preventDefault();

            $.ajax({

                url: "../process/updataprofileadmin.php",
                method: "post",
                data: $('#form5').serialize(),
                success: function(data) {

                    console.log(data);
                    if (data == 'success') {

                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'อัพเดตข้อมูลสำเร็จ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout((function() {
                            window.location.reload();
                        }), 1500);



                    } else if (data == 'error') {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'อัพเดตข้อมูลไม่สำเร็จ',
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

        })



        $('.editbtn').on('click', function() {

            let rid = this.id;
            console.log('up', rid);


            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);
            const name = data[1].split(" ");
            $('#m_id').val(rid);
            $('#fname').val(name[0]);
            $('#lname').val(name[1]);
            $('#email').val(data[3]);
            $('#tel').val(data[2]);
            // $('#room_status').val(data[4]);
        })


        function sweet(icon, title) {

            Swal.fire({
                icon: icon,
                title: title
            })
        }


        $('.deletebtn').on("click", function() {
                let cid = this.id
                console.log(cid);
                Swal.fire({
                    title: 'ลบข้อมูล',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ยืนยัน',
                    cancelButtonText: 'ยกเลิก'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({

                            url: "../process/deletecustomer.php",
                            method: "post",
                            data: {
                                cid: cid
                            },
                            success: function(data) {

                                console.log(data);
                                if (data == "success") {
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: 'ลบข้อมูลสำเร็จ',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                    setTimeout((function() {
                                        window.location.reload();
                                    }), 1500);
                                } else {
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'error',
                                        title: 'ลบข้อมูลไม่สำเร็จ',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                    setTimeout((function() {
                                        window.location.reload();
                                    }), 1500);

                                }

                            },

                        })

                    }
                })
            });


    })
</script>