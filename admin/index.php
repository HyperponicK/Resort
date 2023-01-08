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
                <?php require('nav.php')?>
            </div>

            <div class="col-9" style="flex-grow: 1;">

                <div class="row p-3">
                    <div class="col-md-6">
                        <h3>การจอง</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">เพิ่มการจอง</a>
                    </div>
                </div>


                <div class="col-md-12 p-3">
                    <div class="card">
                        <div class="card-header">
                            <i class="bi bi-table"></i>
                            ตารางการจอง
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>เลขที่การจอง</th>
                                        <th>เลขที่ห้อง</th>
                                        <th>ผู้จอง</th>
                                        <th>จำนวนคืน</th>
                                        <th>ราคา</th>
                                        <th>วันที่จอง</th>
                                        <th>สถานะ</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>r-1</td>                                        
                                        <td>room-1</td>
                                        <td>user1 user1</td>
                                        <td>2</td>
                                        <td>5000</td>
                                        <td>20-20-2022</td>
                                        <td>รอชำระเงิน</td>
                                        <td>
                                            <button class="btn btn-warning mb-1">แก้ไข</button>
                                            <button class="btn btn-danger mb-1">ยกเลิกการจอง</button>
                                        </td>
                                    </tr>

                                    
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
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">เพิ่มลูกค้า</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" placeholder="ชื่อ">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" placeholder="นามสกุล">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" placeholder="เบอร์โทร">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">อีเมลล์</label>
                        <input type="text" class="form-control" placeholder="อีเมลล์">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">รหัสผ่าน</label>
                        <input type="text" class="form-control" placeholder="รหัสผ่าน">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">ยืนยันรหัสผ่าน</label>
                        <input type="text" class="form-control" placeholder="ยืนยันรหัสผ่าน">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">ลงทะเบียน</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>

                </div>
            </div>
        </div>
    </div>

</body>

</html>