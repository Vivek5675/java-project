<?php
include("../config.php");
if(isset($_SESSION['uloginid']) && $_SESSION['uloginid'] != ''){
    Header("location:index.php");
}

if(isset($_GET['id'])){
    $hotel_id = $_GET['id'];
    $delete = mysqli_query($conn, "delete from hotels where id = '".$hotel_id."'");
    if($delete){
        $_SESSION['hotel_success_msg'] = "Hotel deleted successfully.";
        Header("location:all-rooms.php");
    }else{
        $_SESSION['hotel_error_msg'] = "Error on deleteing hotel, Please try again.";
        Header("location:all-rooms.php");
    }
}else{
    $_SESSION['hotel_error_msg'] = "Error on deleteing exam, Please try again.";
    Header("location:all-rooms.php");
}
?>