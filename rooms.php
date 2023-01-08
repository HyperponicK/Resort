<?php require('nav.php');

// unset($_SESSION["chIn"]);
// unset($_SESSION["chOut"]);

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


        <form action="">


            <div class="row mb-5">
                <div class="col-md-12 mb-3">
                    <h4 class="text-center">ห้องพัก</h4>
                </div>

                <div class="col-md-5">
                <label class="form-label">check in-check out</label>

                <div class="t-datepicker">
                    <div class="t-check-in"></div>
                    <div class="t-check-out"></div>
                </div>
                </div>
               



                <!-- <div class="col-md-3">
                    <label class="form-label">check in</label>
                    <input type="date" class="form-control" name="chIn" required>
                </div>

                <div class="col-md-3">
                    <label class="form-label">check out</label>
                    <input type="date" class="form-control" name="chOut" required>
                </div> -->

                <div class="col-md-3">
                    <label class="form-label">ประเภท</label>
                    <select class="form-select" name="r_type" id="" required>
                        <option value="0" selected>ทั้งหมด</option>
                        <option value="1">111</option>
                        <option value="2">222</option>
                        <option value="3">333</option>
                    </select>
                </div>

                <div class="col-md-1">
                    <label class="form-label">ชั้น</label>
                    <select class="form-select" name="level" id="">
                        <option value="0" selected>ทั้งหมด</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <p class="m-1 text-white">.</p>
                    <button type="submit" class="btn btn-primary w-100">ค้นหา</button>
                    <!-- <input type="submit" class="btn btn-primary"> -->
                </div>


            </div>
        </form>





        <div class="row row-cols-1 row-cols-md-3 g-4" id="roomShow">


            <!-- <?php
                    $result = $mysqli->query("SELECT * FROM `room_type` ORDER BY `room_type`.`t_id` ASC");


                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {

                    ?>

            <div class="col">
                <div class="card">
                    <a href="reserve.php?room_type=<?= $row['t_id'] ?>">

                        <img src="imgroom/<?php echo $row['t_img'] ?>" class="card-img-top" alt="...">

                    </a>
                    <div class="card-body">
                        <a href="reserve.php?room_type=<?= $row['t_id'] ?>" class="text-decoration-none">
                            <h5 class="card-title"><?php echo $row['t_name'] ?></h5>
                        </a>
                        <p class="card-text overflow-hidden" style="max-height: 50px;"><?php echo $row['t_detail'] ?></p>

                        <a href="reserve.php?room_type=<?= $row['t_id'] ?>" class="btn btn-primary">จองเลย</a>

                    </div>
                </div>
            </div>

            <?php
                        }
                    }
            ?> -->
        </div>

    </div>

    <?php require('footer.php') ?>

    <script>
        $(document).ready(function() {

            $('form').on('submit', function(e) {

                e.preventDefault();

                $.ajax({

                    url: "process/getRooms.php",
                    method: "post",
                    data: $('form').serialize(),
                    success: function(data) {
                        console.log(data);

                        if (data) {
                            $('#roomShow').html(data);
                        }
                    }
                })
            })


            $('.t-datepicker').tDatePicker({

                // auto close after selection
                autoClose: true,

                // animation speed in milliseconds
                durationArrowTop: 200,

                // the number of calendars
                numCalendar: 2,

                // localization
                titleCheckIn: 'Check In',
                titleCheckOut: 'Check Out',
                titleToday: 'Today',
                titleDateRange: 'night',
                titleDateRanges: 'nights',
                titleDays: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
                titleMonths: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'Septemper', 'October', 'November', "December"],

                // the max length of the title
                titleMonthsLimitShow: 3,

                // replace moth names
                replaceTitleMonths: null,

                // e.g. 'dd-mm-yy'
                showDateTheme: null,

                // icon options
                iconArrowTop: true,
                iconDate: '&#x279C;',
               
                arrowPrev: '&#x276E;',
                arrowNext: '&#x276F;',
                // https://fontawesome.com/v4.7.0/icons/
                // iconDate: '<i class="li-calendar-empty"></i><i class="li-arrow-right"></i>',
                // arrowPrev: '<i class="fa fa-chevron-left"></i>',
                // arrowNext: '<i class="fa fa-chevron-right"></i>',

                // shows today title
                toDayShowTitle: true,

                // showss dange range title
                dateRangesShowTitle: true,

                // highlights today
                toDayHighlighted: false,

                // highlights next day
                nextDayHighlighted: false,

                // an array of days
                daysOfWeekHighlighted: [0, 6],

                // custom date format
                formatDate: 'yyyy-mm-dd',

                // dateCheckIn: '25/06/2018',  // DD/MM/YY
                // dateCheckOut: '26/06/2018', // DD/MM/YY
                dateCheckIn: null,
                dateCheckOut: null,
                startDate: null,
                endDate: null,

                // limits the number of months
                limitPrevMonth: 0,
                limitNextMonth: 11,

                // limits the number of days
                limitDateRanges: 365,

                // true -> full days || false - 1 day
                showFullDateRanges: false,

                // DATA HOLIDAYS
                // Data holidays
                fnDataEvent: null

            });

        })
    </script>

</body>

</html>