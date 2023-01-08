 <?php
    //  session_start();

    //  session_destroy();
    require('config/connect.php');

    //  $_SESSION['userid'] = '001';
    // session_destroy();
    ?>

 <!-- jquery -->
 <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
     crossorigin="anonymous"></script>


<!--  t-datepicker  -->
     <link href="Picker/public/theme/css/t-datepicker.min.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous"></script>
<script src="Picker/public/theme/js/t-datepicker.min.js"></script>
<link href="Picker/public/theme/css/themes/t-datepicker-blue.css" rel="stylesheet" type="text/css">



 <!-- bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
 </script>

 <!-- icon  -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

 <!-- font  -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Athiti&family=Mali&display=swap" rel="stylesheet">

 <!-- sweetalert2 -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <style>
@import url('https://fonts.googleapis.com/css2?family=Athiti&family=Mali&display=swap');

* {
    /* font-family: 'Athiti', sans-serif; */
    font-family: 'Mali', cursive;
}
 </style>

 <div class="bg-white sticky-top shadow-sm">
     <div class="container-xl">
         <header class="bg-white d-flex flex-wrap justify-content-center py-3">
             <a href="index.php"
                 class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                 <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg> -->
                 <i class="bi bi-rss-fill fs-2 text-primary"></i>
                 <span class="fs-3 ms-3"><b>Diamond Khaokho Chalay</b></span>
             </a>

             <ul class="nav nav-pills">
                 <!-- <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li> -->
                 <li class="nav-item"><a href="index.php" class="nav-link">หน้าหลัก</a></li>
                 
                 <li class="nav-item"><a href="rooms.php" class="nav-link">ห้องพัก</a></li>
                 <li class="nav-item"><a href="news.php" class="nav-link">ประชาสัมพันธ์</a></li>
                 <!-- <li class="nav-item"><a href="#" class="nav-link">ราคา</a></li> -->
                 <li class="nav-item"><a href="contact.php" class="nav-link">ติดต่อ</a></li>

                 <?php
                    if (isset($_SESSION['userid'])) {

                        $uid = $_SESSION['userid'];
                    ?>
                 <div class="d-flex">


                     <li class="nav-item"><a href="reserve_member.php" class="nav-link">การจอง
                             <?php

                                $result = $mysqli->query("SELECT * FROM `books` WHERE b_uid = '$uid' AND b_status = '0'");

                                $i = 0;

                                if ($result->num_rows > 0) {

                                while($value = $result->fetch_assoc()){
                                    $i++;
                                }
                                    ?>
                             <span class="badge bg-danger"><?php echo $i;?>
                             </span>
                             <?php
                                }
                            ?>

                         </a></li>


                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         <?php echo $_SESSION['userid'] ?>
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <li><a class="dropdown-item" href="profile.php">โปรไฟล์</a></li>

                         <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
                     </ul>
                 </div>
                 <?php
                    }
                    ?>


             </ul>


             <?php
                if (isset($_SESSION['userid'])) {
                } else {
                ?>
             <div class="d-flex">
                 <a href="signin.php" class="btn btn-outline-primary me-2">เข้าสู่ระบบ</a>
                 <a href="signup.php" class="btn btn-primary me-4">ลงทะเบียน</a>
             </div>
             <?php
                }
                ?>

         </header>
     </div>
 </div>