<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <h3>ห้องพัก</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">เพิ่มประเภทห้องพัก</a>
                        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">เพิ่มห้องพัก</a>
                    </div>
                </div>


                <div class="col-md-12 p-3" style="height:89vh;">
                    <div class="card">
                        <div class="card-header">
                            <i class="bi bi-table"></i>
                            ตารางห้องพัก
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th width="5%" class="text-center">ห้อง</th>
                                        <th width="40%" class="text-center">รายละเอียด</th>
                                        <th class="text-center">ชั้น</th>
                                        <th class="text-center">ราคา</th>
                                        <th class="text-center">สถานะ</th>
                                        <th class="text-center">จัดการ</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    // $result = $mysqli->query("SELECT r_id,r_detail,r_name,r_price,roomdetail.d_detail FROM `room` INNER JOIN roomdetail ON room.r_detail = roomdetail.d_id ORDER BY `room`.`r_id` DESC");
                                    $result = $mysqli->query("SELECT * FROM `room`");

                                    if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {


                                    ?>
                                            <tr>

                                                <td class="text-center"><?php echo $row['r_name'] ?></td>
                                                <td><?php echo $row['r_type'] ?></td>
                                                <td class="text-center"><?php echo $row['r_level'] ?></td>
                                                <td class="text-center"><?php echo $row['r_price'] ?></td>
                                                <td class="text-center"><?php echo $row['r_status'] ?></td>




                                                <td class="text-center">
                                                    <button class="btnEdit btn btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#editModal" id="<?php echo $row['r_id'] ?>">แก้ไข</button>
                                                    <button class="btnDelete btn btn-danger mb-1" id="<?php echo $row['r_id'] ?>">ลบ</button>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- </div> -->


            </div>
        </div>
    </div>

   <!-- Modal เพิ่มรายระเอียด-->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">ประเภทห้องพัก</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" id="form1">


                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="" class="form-label">ชื่อห้อง</label>
                            <input type="text" name="r_name" id="" class="form-control" placeholder="ชื่อห้อง" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">รายละเอียด</label>
                            <!-- <input type="text" name="r_detail" class="form-control" placeholder="รายละเอียด"> -->

                            <select name="room_type" id="" class="form-select" required>
                                <option value="">เลือกประเภทห้อง</option>

                                <?php

                                $query = $mysqli->query("SELECT * FROM `roomdetail` ORDER BY `roomdetail`.`d_id` ASC");

                                if ($query->num_rows > 0) {

                                    while ($items = $query->fetch_assoc()) {

                                ?>

                                        <option value="<?php echo $items['d_id'] ?>"><?php echo $items['d_detail'] ?></option>

                                <?php
                                    }
                                }
                                ?>

                            </select>

                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">เลือกชั้น</label>
                            <!-- <input type="text" name="r_detail" class="form-control" placeholder="รายละเอียด"> -->

                            <select name="room_level" id="" class="form-select" required>
                                <option value="">เลือกชั้น</option>
                                <option value="1">ชั้นล่าง</option>
                                <option value="2">ชั้นบน</option>

                            </select>

                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">ราคา</label>
                            <input type="number" name="r_price" class="form-control" min="1" placeholder="ราคา" required>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">ตกลง</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>

                    </div>

                </form>

            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">เพิ่มห้องพัก</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" id="form1">


                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="" class="form-label">ชื่อห้อง</label>
                            <input type="text" name="r_name" id="" class="form-control" placeholder="ชื่อห้อง" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">รายละเอียด</label>
                            <!-- <input type="text" name="r_detail" class="form-control" placeholder="รายละเอียด"> -->

                            <select name="room_type" id="" class="form-select" required>
                                <option value="">เลือกประเภทห้อง</option>

                                <?php

                                $query = $mysqli->query("SELECT * FROM `roomdetail` ORDER BY `roomdetail`.`d_id` ASC");

                                if ($query->num_rows > 0) {

                                    while ($items = $query->fetch_assoc()) {

                                ?>

                                        <option value="<?php echo $items['d_id'] ?>"><?php echo $items['d_detail'] ?></option>

                                <?php
                                    }
                                }
                                ?>

                            </select>

                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">เลือกชั้น</label>
                            <!-- <input type="text" name="r_detail" class="form-control" placeholder="รายละเอียด"> -->

                            <select name="room_level" id="" class="form-select" required>
                                <option value="">เลือกชั้น</option>
                                <option value="1">ชั้นล่าง</option>
                                <option value="2">ชั้นบน</option>

                            </select>

                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">ราคา</label>
                            <input type="number" name="r_price" class="form-control" min="1" placeholder="ราคา" required>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">ตกลง</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>

                    </div>

                </form>

            </div>
        </div>
    </div>



    <!-- Modal edit-->
    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">แก้ไขห้องพัก</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" id="form2">

                    <input type="hidden" name="r_id" id="r_id">


                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="" class="form-label">ชื่อห้อง</label>
                            <input type="text" name="r_name" id="r_name" class="form-control" placeholder="ชื่อห้อง" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">เลือกประเภทห้อง</label>
                            <!-- <input type="text" name="r_detail" class="form-control" placeholder="รายละเอียด"> -->

                            <select name="room_type" id="room_type" class="form-select" required>


                                <?php

                                $query = $mysqli->query("SELECT * FROM `roomdetail` ORDER BY `roomdetail`.`d_id` ASC");

                                if ($query->num_rows > 0) {

                                    while ($items = $query->fetch_assoc()) {

                                ?>

                                        <option value="<?php echo $items['d_id'] ?>"><?php echo $items['d_detail'] ?></option>

                                <?php
                                    }
                                }
                                ?>

                            </select>

                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">เลือกชั้น</label>
                            <!-- <input type="text" name="r_detail" class="form-control" placeholder="รายละเอียด"> -->

                            <select name="room_level" id="room_level" class="form-select" required>

                                <option value="1">ชั้นล่าง</option>
                                <option value="2">ชั้นบน</option>

                            </select>

                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">ราคา</label>
                            <input type="number" name="r_price" id="r_price" class="form-control" min="1" placeholder="ราคา" required>
                        </div>


                        <div class="mb-2">
                            <label for="" class="form-label">สถานะ</label>
                            <!-- <input type="text" name="r_detail" class="form-control" placeholder="รายละเอียด"> -->

                            <select name="room_status" id="room_status" class="form-select" required>

                                <option value="0">ใช้งานได้</option>
                                <option value="1">ปิดปรับปรุง</option>

                            </select>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">อัพเดต</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>

                    </div>

                </form>

            </div>
        </div>
    </div>



    <input type="hidden" value="rooms" id="page">



    <script>
        $(document).ready(function() {

            $('#form1').on('submit', function(e) {

                e.preventDefault();


                $.ajax({

                    url: "../process/addroom.php",
                    method: "post",
                    data: new FormData(this),
                    success: function(data) {

                        // console.log(data);
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
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'เพิ่มข้อมูลไม่สำเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            setTimeout((function() {
                                window.location.reload();
                            }), 1500);
                        }
                    },
                    contentType: false,
                    processData: false
                })
            })

            $('#form2').on('submit', function(e) {

                e.preventDefault();

                // console.log(3);
                $.ajax({

                    url: "../process/updateRoom.php",
                    method: "post",
                    data: new FormData(this),
                    success: function(data) {

                        // console.log(data);
                        if (data == 'success') {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'แก้ไขข้อมูลสำเร็จ',
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
                                title: 'แก้ไขข้อมูลไม่สำเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            setTimeout((function() {
                                window.location.reload();
                            }), 1500);
                        }
                    },
                    contentType: false,
                    processData: false
                })
            })


            $('.btnEdit').on('click', function() {

                let rid = this.id;
                // console.log('up', rid);


                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#r_id').val(rid);
                $('#r_name').val(data[0]);
                $('#room_type').val(data[1]);
                $('#room_level').val(data[2]);
                $('#r_price').val(data[3]);
                $('#room_status').val(data[4]);
            })


            $('.btnDelete').on('click', function() {

                let rid = this.id;
                // console.log('de', rid);


                Swal.fire({
                    title: 'ท่านต้องการลบห้องนี้ใช่หรือไม่?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ตกลง',
                    cancelButtonText: 'ยกเลิก'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({

                            url: "../process/deleteRoom.php",
                            method: "post",
                            data: {
                                rid
                            },
                            success: function(data) {

                                if (data == 'success') {

                                    // Swal.fire(
                                    //     'ลบห้องสำเร็จ!',
                                    //     'Your file has been deleted.',
                                    //     'success'
                                    // )

                                    location.reload();

                                }
                            }
                        })
                    }
                })

            });

            $('.table').DataTable();

        })
    </script>

    <script src="menu.js"></script>



</body>

</html>