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
                        <h3>ประชาสัมพันธ์</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="" class="btn btn-primary addbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">เพิ่มข่าวประชาสัมพันธ์</a>
                    </div>
                </div>


                <div class="col-md-12 p-3" style="height:89vh;">
                    <div class="card">
                        <div class="card-header">
                            <i class="bi bi-table"></i>
                            ตารางประชาสัมพันธ์
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width:15%;">รูป</th>
                                        <th>หัวข้อ</th>
                                        <th style="width:40%;">รายละเอียด</th>
                                        <th>วันที่</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    $result = $mysqli->query("SELECT * FROM `news` ORDER BY `news`.`n_id` DESC");

                                    if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {
                                            $datex = explode("-", $row['n_date']);
                                            $date = $datex[2] . "-" . $datex[1] . "-" . $datex[0]

                                    ?>

                                            <tr>
                                                <td><img class="w-100" src="../imgnews/<?php echo $row['n_img'] ?>" alt="" ></td>
                                                <td><?php echo $row['n_name'] ?></td>
                                                <td><?php echo $row['n_detail'] ?></td>
                                                <td><?php echo $row['n_date'] ?></td>
                                                <td>
                                                    <button class="btn btn-warning mb-1 editbtn" id="<?php echo $row['n_id'] ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">แก้ไข</button>
                                                    <button class="btn btn-danger mb-1 deletebtn" id="<?php echo $row['n_id'] ?>">ลบ</button>
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



    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">เพิ่มข่าวประชาสัมพันธ์</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="" id="form1">

                        <div class="mb-2">
                            <label for="" class="form-label">หัวข้อข่าว</label>
                            <input type="text" name="title" class="form-control" placeholder="หัวข้อข่าว" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">รายละเอียด</label>
                            <textarea class="form-control" name="detail" placeholder="รายละเอียด" id="floatingTextarea2" style="height: 100px" required></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">รูป</label>
                            <input type="file" name="img" class="form-control" required>
                        </div>

                </div>
                <div class="modal-footer">
                    <p id="texterror" class="text-start"> </p>
                    <button type="submit" class="btn btn-primary">เพิ่ม</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>

                </div>

                </form>

            </div>
        </div>
    </div>

    <!-- Modal update -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">แก้ไขข่าวประชาสัมพันธ์</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="" id="form2">

                        <input type="hidden" id="nid" name="nid">
                        <div class="mb-2">
                            <label for="" class="form-label">หัวข้อข่าว</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="หัวข้อข่าว" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">รายละเอียด</label>
                            <textarea class="form-control" id="detail" name="detail" placeholder="รายละเอียด" id="floatingTextarea2" style="height: 100px" required></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">รูป</label>
                            <input type="file" name="img" class="form-control">
                        </div>

                </div>
                <div class="modal-footer">
                    <p id="texterror2" class="text-start"> </p>
                    <button type="submit" class="btn btn-primary">แก้ไข</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>

                </div>

                </form>

            </div>
        </div>
    </div>
    <input type="hidden" value="news" id="page">
    <script src="menu.js"></script>


    <script>
        $(document).ready(function() {

            $('#form1').on('submit', function(e) {

                e.preventDefault();


                $.ajax({

                    url: "../process/addnews.php",
                    method: "post",
                    data: new FormData(this),
                    success: function(data) {

                        console.log(data);
                        if (data == "success") {
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
                        } else if (data == "error") {
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
                        } else {
                            $("#texterror").html(data)
                        }
                    },
                    contentType: false,
                    processData: false
                })
            })

            $('.addbtn').on('click', function() {
                $("#texterror").html("")
                $('#form1')[0].reset()

            });


            $('#form2').on('submit', function(e) {

                e.preventDefault();


                $.ajax({

                    url: "../process/editnews.php",
                    method: "post",
                    data: new FormData(this),
                    success: function(data) {

                        console.log(data);
                        if (data == "success") {
                            location.reload()
                        } else if (data == "error") {
                            console.log("error");
                        } else {
                            $("#texterror2").html(data)
                        }
                    },
                    contentType: false,
                    processData: false
                })
            })
            $('.editbtn').on('click', function() {
                $("#texterror2").html("")
                $('#form2')[0].reset()
                let nid = this.id
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#nid').val(nid);
                $('#title').val(data[1]);
                $('#detail').val(data[2]);

            });


            $('.deletebtn').on("click", function() {
                let nid = this.id
                console.log(nid);
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

                            url: "../process/deletenews.php",
                            method: "post",
                            data: {
                                nid: nid
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
            $('.table').DataTable();

        })
    </script>

</body>

</html>