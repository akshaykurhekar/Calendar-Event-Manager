<?php 

if(isset($_POST['status'])){
    $name = $_POST['event_name'];
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];

    include('config.inc.php');
    $res = mysqli_query($con,"INSERT INTO `event`(`occasion`, `year`, `month`, `day`) VALUES('$name', '$year','$month','$day') ");
    $con=null;
    if($res){
        echo 'success...';
    }else{
        echo 'failed...';
    }
}

?>