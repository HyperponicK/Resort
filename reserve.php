<?php
if (isset($_GET['room_type'])) {
    require('nav.php');

    $room_type = $_GET['room_type'];
    $c = $_GET['count'];


    $result = $mysqli->query("SELECT * FROM `room_type` WHERE t_id = '$room_type'");

    $row = $result->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href='lib/main.css' rel='stylesheet' />
    <script src='lib/main.js'></script>

</head>

<body>


    <div class="container-xl my-5" style="min-height:90vh;">

        <h4 class="mb-5"><?php echo $row['t_name'] ?></h4>

        <div class="row">
            <div class="col-md-7">
                <img class="w-100 rounded shadow-sm mb-3" src="imgroom/<?php echo $row['t_img'] ?>" alt="">

                <h5>รายละเอียดห้องพัก</h5>
                <p><?php echo $row['t_detail'] ?></p>


            </div>

            <div class="col-md-5 px-3">

                <h5>รายละเอียดการจอง</h5>

                <form action="" method="post">
                    <input type="hidden" name="r_type" id="r_type" value="<?php echo $room_type; ?>">



                    <div class="mb-2 row g-2 ">
                        <div class="col">
                            <label for="" class="form-label">check in</label>
                            <input type="date" name="date1" id="chIn" class="form-control"
                                value="<?php echo $_SESSION['chIn'] ?>" required>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">check out</label>
                            <input type="date" name="date2" id="chOut" class="form-control"
                                value="<?php echo  $_SESSION['chOut'] ?>" required>
                        </div>
                    </div>
                    <input type="hidden" name="price" id="priceInput" class="form-control">



                    <div class="mb-2">
                        <label for="" class="form-label">เลือกชั้น</label>
                        <select name="level" id="level" class="form-select" required>
                            <option value="">เลือกชั้นเพื่อดูราคา</option>
                            <option value="2" <?php if($_SESSION['level'] == '2'){echo "selected";}?>>ชั้นบน</option>
                            <option value="1" <?php if($_SESSION['level'] == '1'){echo "selected";}?>>ชั้นล่าง</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="" class="form-label">จำนวนห้อง <span>(<?php echo $c;?>)</span></label>
                        <input type="number" name="r_count" id="r_count" class="form-control" min="1"
                            max="<?php echo  $c; ?>" value="1">
                    </div>

                    <div class="mb-2">
                        <label for="" class="form-label">เตียงเสริม(ที่ละ 250 บาท)</label>
                        <!-- <p id="dayy">3</p> -->
                        <input type="number" name="bed" id="bed" class="form-control" min="0" value="0">
                    </div>

                    <div class="mb-2">
                        <label for="" class="form-label">จำนวนการจอง(วัน)</label>
                        <input type="text" id="count" class="form-control" readonly>
                    </div>

                    <div class="mb-2 border rounded p-3">
                        <label for="" class="form-label">ราคา</label>
                        <h3><span id="price">ราคา</span> บาท</h3>
                    </div>

                    <div class="mb-2">
                        <input type="submit" class="btn btn-primary w-100" value="จอง">
                        <!-- <a href="reserve_member.php" class="btn btn-primary w-100">จอง</a> -->
                    </div>

                </form>


                <div class="mb-2">
                    <div id='calendar'></div>
                </div>


            </div>
        </div>
    </div>

    <?php require('footer.php')?>

</body>

</html>




<script>
$(document).ready(function() {


    getPrice()

    function getPrice() {


        let nights = getDay();

        let bedC = $("#bed").val();
        let r_count = $('#r_count').val();

        let levelPrice = getLevelPrice();

        bed = 250 * parseInt(bedC);

        sum = parseInt(levelPrice) * parseInt(nights);

        sum = sum + bed;

        sum = sum * nights;

        if (sum <= 0) {
            $('#price').html('-');
            $("#priceInput").val('')
        } else {
            $('#price').html(sum);
            $("#priceInput").val(sum)
        }
    }

    function getLevelPrice() {

        let r_type = $('#r_type').val();
        let level = $('#level').val();

        $.ajax({
            url: "process/getLevelPrice.php",
            method: "post",
            data: {
                r_type: r_type,
                level: l
            },
            success: function(data) {
                return data;
            }
        })
    }

  

    // function getPrice(price) {

    //     sum = 0;

    //     let d = getDay();


    //     let bedC = $("#bed").val();
    //     let nights = $('#nights').val();

    //     bed = 250 * parseInt(bedC);

    //     sum = parseInt(price) * parseInt(d);

    //     sum = sum + bed;

    //     sum = sum * nights;

    //     console.log(sum, price, d);


    //     if (sum <= 0) {
    //         $('#price').html('-');
    //         $("#priceInput").val('')
    //     } else {
    //         $('#price').html(sum);
    //         $("#priceInput").val(sum)
    //     }
    // }


  



    // getDateBooked()

    // function getDateBooked() {

    //     let r_id = $('#room_id').val();

    //     console.log(r_id);
    //     $.ajax({

    //         url: "process/getDateBooked.php",
    //         method: "post",
    //         data:{
    //             room_id : r_id
    //         },
    //         success: function(data) {

    //             if (data) {
    //                 let ob = JSON.parse(data);

    //                 let da = [];

    //                 for (let i = 0; i < ob.length; i++) {

    //                     var nDate = new Date(ob[i].b_end);
    //                     nDate.setDate(nDate.getDate() + 1);


    //                     var out = nDate.getFullYear() + '-' + ((nDate.getMonth() > 8) ? (nDate
    //                         .getMonth() + 1) : ('0' + (nDate
    //                         .getMonth() + 1))) + '-' + ((nDate.getDate() > 9) ? nDate
    //                     .getDate() : ('0' + nDate.getDate()))

    //                     // console.log(out);


    //                     let c = {
    //                         start: ob[i].b_st,
    //                         end: out,
    //                         overlap: false,
    //                         display: 'background',
    //                         color: '#FF0000'
    //                     }

    //                     da.push(c);
    //                 }
    //                 console.log(da);

    //                 ca(da)

    //             }
    //             else{
    //                 // console.log(33);
    //                 ca()
    //             }
    //         }
    //     })

    // }

    // console.log(price);

    // getPrice();



    // getDay()

    function getDay() {
        let chIn = $("#chIn").val();
        let chOut = $("#chOut").val();

        if (chIn != '' && chOut != '') {

            console.log(chIn, chOut);

            var date1 = new Date(chIn);
            var date2 = new Date(chOut);

            var diffTime = date2.getTime() - date1.getTime();
            var diffDay = diffTime / (1000 * 3600 * 24);

            // getPrice(parseInt(diffDay))

            if (diffDay <= 0) {
                $("#count").val('-');
            } else {
                $("#count").val(diffDay);
            }

            return diffDay;
        }
    }


    // $("#level").change(function() {
    //     getLevelPrice($("#level").val())
    // });

    // $("#nights").change(function() {
    //     getLevelPrice($("#level").val())
    // });

    // $("#chIn").change(function() {
    //     getLevelPrice($("#level").val())

    // });

    // $("#chOut").change(function() {
    //     getLevelPrice($("#level").val())


    // });

    // $("#chIn").keyup(function(e) {
    //     getLevelPrice($("#level").val())


    // });
    // $("#chOut").keyup(function(e) {
    //     getLevelPrice($("#level").val())

    // });


    // $("#bed").change(function() {
    //     getLevelPrice($("#level").val())
    // });


    function checkDate(logg) {

        if (logg == 'not') {
            sweet('error', 'ไม่ได้ล็อกอิน', 'กรุณาล็อกอินเพื่อใช้งาน');
        } else {

            $.ajax({

                url: "process/reserv.php",
                method: "post",
                data: $('form').serialize(),
                success: function(data) {
                    console.log(data);

                    if (data == 'success') {
                        // sweet('success', 'จองสำเร็จ', 'ฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟ')

                        location.href = 'reserve_member.php';

                    } else if (data == 'error') {
                        sweet('error', 'ผิดพลาด')

                    } else {
                        sweet('error', data)
                    }
                }
            })
        }
    }

    function checkLogin() {
        $.ajax({

            url: "process/checklogin.php",
            method: "post",
            success: function(data) {
                checkDate(data)
            }
        })
    }



    $('form').on('submit', function(e) {

        e.preventDefault();

        checkLogin();
    })



    function sweet(icon, title) {

        Swal.fire({
            icon: icon,
            title: title
        })
    }

})
</script>


<!-- <script>

function ca(ob) {

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev',
            center: 'title',
            right: 'next'
        },
        initialDate: Date.now(),
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        selectable: true,
        events: ob
    });

    calendar.render();
};
</script> -->


<?php
}
?>