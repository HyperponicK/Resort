<?php 
require('nav.php');

$uid = $_SESSION['userid'];

// if(isset($_GET['delete'])){
//     /** ลบข้อมูลสินค้าออกจาก array */
//     unset($_SESSION['cart_item'][$_GET['delete']]);
//     echo "<script>
//             Swal.fire({
//                 text: 'ยกเลิกการจองแล้ว',
//                 icon: 'success',
//                 showConfirmButton: false,
//                 timer: 2000
//             })
//             window.history.replaceState(null, null, window.location.pathname)
//         </script>";

//         header('Refresh: 1; url=reserve_member.php');
// }


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
        <h4 class="mb-4">การจอง</h4>



        <?php
                    
                    // if(!empty($_SESSION['cart_item'])){
                    
                        // $total = array_sum(array_map(function($value){
                        //     return $value['price']/2;
                        // }, $_SESSION['cart_item']));

        $result = $mysqli->query("SELECT * FROM `books` WHERE b_uid = '$uid' AND b_status = '0'");

        if ($result->num_rows > 0) {



                  
                        ?>


        <div class="row">
            <div class="col-md-9">

                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>ลำดับ</th> -->
                            <!-- <th width="20%">รูป</th> -->
                            <th>เลขห้อง</th>
                            <th>check in</th>
                            <th>check out</th>
                            <th>ราคา</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                    


                        $sum = 0;

                        while($value = $result->fetch_assoc()){


                            $sum += $value['b_price'];


                            ?>
                        <tr>
                            <!-- <td>01</td> -->
                            <!-- <td>
                                <img class="w-100 rounded"
                                    src="https://scontent.fbkk10-1.fna.fbcdn.net/v/t39.30808-6/307447665_176313388268614_7677205801850721203_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=t35Dem7syD0AX-lgoNG&_nc_ht=scontent.fbkk10-1.fna&oh=00_AT9BrT4zW9uXNB2-z8nNAHV3wvGmo3IKPmDyqxxbZeWlww&oe=63334AE3"
                                    alt="">
                            </td> -->

                            <td><?php echo $value['b_room']?></td>
                            <td><?php echo $value['b_st']?></td>
                            <td><?php echo $value['b_end']?></td>
                            <td><?php echo $value['b_price']/2?></td>

                            <td>
                                <!-- <a href="reserve_member.php?delete=<?php echo $key ?>" class="btn btn-danger">ยกเลิกการจอง</a> -->
                                <button class="btn btn-danger delBtn"
                                    id="<?php echo $value['b_id']?>">ยกเลิกการจอง</button>
                            </td>
                        </tr>
                        <?php
                        }   


                    ?>



                    </tbody>
                </table>

            </div>

            <div class="col-md-3">

                <div class="border rounded p-3 py-4 text-center">
                    <h4 class="mb-3">รวม <?php echo $sum/2; ?> บาท</h4>
                    <a href="pay.php" class="btn btn-primary">ชำระเงิน</a>

                </div>

            </div>
        </div>

        <?php 
                }else{

                    ?>
        <a href="rooms.php">เลือกห้อง</a>
        <?php
                } 
                
                ?>




    </div>

    <?php require('footer.php')?>


    <script>
    $(document).ready(function() {

        $(".delBtn").on(('click'), function() {

            let bid = this.id;

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    // Swal.fire(
                    //     'Deleted!',
                    //     'Your file has been deleted.',
                    //     'success'
                    // )

                    $.ajax({

                        url: "process/deleteBooks.php",
                        method: "post",
                        data:{
                            bid
                        },
                        success: function(data) {
                            if(data == 'success'){
                                location.reload();

                            }
                        }
                    })
                }
            })

        });
    })
    </script>
    <?php require('footer.php')?>
</body>

</html>