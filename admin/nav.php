<?php
//  session_start();
 require('../config/connect.php');

 ?>

 <!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>


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
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<!-- datatable  -->
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"> -->

<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

 <!-- sweetalert2 -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Athiti&family=Mali&display=swap');

* {
    /* font-family: 'Athiti', sans-serif; */
    font-family: 'Mali', cursive;
}
</style>


<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark w-100" style="height:100vh;">
    <a href="index.php" class="d-flex mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <!-- <i class="bi bi-rss-fill fs-2 me-2"></i> -->

        <span class="fs-4"><b> Diamond Khaokho Chalay </b></span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <!-- <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
            <i class="bi bi-house-door-fill"></i>
                Home
            </a>
        </li> -->
        <li id='menu1'>
            <a href="news.php" class="nav-link text-white">
                <i class="bi bi-newspaper"></i>
                ประชาสัมพันธ์
            </a>
        </li>
        <li id='menu2'>
            <a href="reserve.php" class="nav-link text-white">
                <i class="bi bi-table"></i>
                การจอง
            </a>
        </li>
        <li id='menu3'>
            <a href="rooms.php" class="nav-link text-white">
                <i class="bi bi-grid"></i>
                ห้องพัก
            </a>
        </li>

        <li id='menu4'>
            <a href="customer.php" class="nav-link text-white">
                <i class="bi bi-person-circle"></i>
                ลูกค้า
            </a>
        </li>
        <li id='menu5'>
            <a href="pay.php" class="nav-link text-white">
                <i class="bi bi-credit-card-2-back-fill"></i>
                ชำระเงิน
            </a>
        </li>
        <li id='menu6'>
            <a href="report.php" class="nav-link text-white">
                <i class="bi bi-file-earmark-text"></i>
                รายงาน
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <!-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> -->
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" >
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>

<script>
  $(document).ready(function() {
    $('.table').DataTable({
      scrollY: '60vh',
      scrollCollapse: true,
      paging: false,


      language: {
        "emptyTable": "ไม่มีข้อมูลในตาราง",
        "info": "",
        // "info": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
        "infoFiltered": "(กรองข้อมูล _MAX_ รายการ)",
        "infoThousands": ",",
        "lengthMenu": "แสดง _MENU_ รายการ",
        "loadingRecords": "กำลังโหลดข้อมูล...",
        "processing": "กำลังดำเนินการ...",
        "zeroRecords": "ไม่พบข้อมูล",
        "paginate": {
          "first": "หน้าแรก",
          "previous": "ก่อนหน้า",
          "next": "ถัดไป",
          "last": "หน้าสุดท้าย"
        },
        "aria": {
          "sortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
          "sortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
        },
        "autoFill": {
          "cancel": "ยกเลิก",
          "fill": "กรอกทุกช่องด้วย",
          "fillHorizontal": "กรอกตามแนวนอน",
          "fillVertical": "กรอกตามแนวตั้ง"
        },
        "buttons": {
          "collection": "ชุดข้อมูล",
          "colvis": "การมองเห็นคอลัมน์",
          "colvisRestore": "เรียกคืนการมองเห็น",
          "copy": "คัดลอก",
          "copyKeys": "กดปุ่ม Ctrl หรือ Command + C เพื่อคัดลอกข้อมูลบนตารางไปยัง Clipboard ที่เครื่องของคุณ",
          "copySuccess": {
            "_": "คัดลอกช้อมูลแล้ว จำนวน %ds แถว",
            "1": "คัดลอกข้อมูลแล้ว จำนวน 1 แถว"
          },
          "copyTitle": "คัดลอกไปยังคลิปบอร์ด",
          "csv": "CSV",
          "excel": "Excel",
          "pageLength": {
            "_": "แสดงข้อมูล %d แถว",
            "-1": "แสดงข้อมูลทั้งหมด"
          },
          "pdf": "PDF",
          "print": "สั่งพิมพ์"
        },
        "infoEmpty": "แสดงทั้งหมด 0 ถึง 0 จาก 0 รายการ",
        "search": "ค้นหา :",
        "thousands": ",",
        "datetime": {
          "amPm": [
            "เที่ยงวัน",
            "เที่ยงคืน"
          ],
          "hours": "ชั่วโมง",
          "minutes": "นาที",
          "months": {
            "0": "มกราคม",
            "1": "กุมภาพันธ์",
            "10": "พฤศจิกายน",
            "11": "ธันวาคม",
            "2": "มีนาคม",
            "3": "เมษายน",
            "4": "พฤษภาคม",
            "5": "มิถุนายน",
            "6": "กรกฎาคม",
            "7": "สิงหาคม",
            "8": "กันยายน",
            "9": "ตุลาคม"
          },
          "next": "ถัดไป",
          "previous": "ก่อนกน้า",
          "seconds": "วินาที",
          "unknown": "ไม่ทราบ",
          "weekdays": [
            "วันอาทิตย์",
            "วันจันทร์",
            "วันอังคาร",
            "วันพุธ",
            "วันพฤหัส",
            "วันศุกร์",
            "วันเสาร์"
          ]
        },
        "decimal": "จุดทศนิยม",
        "editor": {
          "close": "ปิด",
          "create": {
            "button": "สร้าง",
            "submit": "สร้างข้อมูล",
            "title": "สร้างข้อมูลใหม่"
          },
          "edit": {
            "button": "แก้ไข",
            "submit": "บันทึก",
            "title": "แก้ไขข้อมูล"
          },
          "error": {
            "system": "เกิดข้อผิดพลาดของระบบ (&lt;a target=\"\\\" rel=\"nofollow\" href=\"\\\"&gt;ดูข้อมูลเพิ่มเติม)."
          },
          "remove": {
            "button": "ลบ",
            "submit": "ลบข้อมูล",
            "title": "ลบข้อมูล",
            "confirm": {
              "_": "คุณแน่ใจที่จะลบข้อมูล %d รายการนี้ หรือไม่?",
              "1": "คุณแน่ใจที่จะลบข้อมูลรายการนี้ หรือไม่?"
            }
          },
          "multi": {
            "restore": "ยกเลิกการแก้ไข"
          }
        },
        "searchBuilder": {
          "add": "เพิ่มเงื่อนไข",
          "clearAll": "ยกเลิกทั้งหมด",
          "condition": "เงื่อนไข",
          "data": "ข้อมูล",
          "deleteTitle": "ลบเงื่อนไขการกรอง"
        },
        "select": {
          "cells": {
            "1": "เลือก 1 cell",
            "_": "เลือก %d cells"
          },
          "columns": {
            "1": "เลือก 1 column",
            "_": "เลือก %d columns"
          }
        }
      }
    });
  });
</script>