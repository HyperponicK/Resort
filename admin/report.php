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
                        <h3>รายงาน</h3>
                    </div>
                    <!-- <div class="col-md-6 text-end">
                        <a href="" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">เพิ่มการจอง</a>
                    </div> -->
                </div>


                <div class="col-md-12 p-3">
                    <a href="" class="btn btn-primary">รายงานการจอง</a>
                    <a href="" class="btn btn-primary">รายงานห้องพัก</a>
                    <a href="" class="btn btn-primary">รายงานลูกค้า</a>
                    <a href="" class="btn btn-primary">รายงานการชำระเงิน</a>


                </div>
                <!-- </div> -->


            </div>
        </div>
    </div>



    <input type="hidden" value="report" id="page">
    <script src="menu.js"></script>


   

</body>

</html>