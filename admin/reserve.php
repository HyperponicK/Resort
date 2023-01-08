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

            <div class="col-9 overflow-auto" style="flex-grow: 1;">

                <div class="row p-3" style="height:11vh;">
                    <div class="col-md-6">
                        <h3>การจอง</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="bookking.php" class="btn btn-primary" 
                          >เพิ่มการจอง</a>
                    </div>
                </div>


                <div class="col-md-12 p-3" style="height:89vh;">
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
                                <?php for($i=1;$i<15;$i++){?>

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
                                    <?php }?>

                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- </div> -->


            </div>
        </div>
    </div>






    <input type="hidden" value="reserve" id="page">
    <script src="menu.js"></script>

</body>

</html>