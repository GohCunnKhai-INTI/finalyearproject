
<?php
require_once "config.php";
date_default_timezone_set('Asia/Taipei');
$date = date('Y-m-d');
$sqla="select count('1') from booking where booking_date='$date'";

$result2=mysqli_query($link,$sqla);
$row2=mysqli_fetch_array($result2);

$tot=$row2[0];
?>

 <a href="bookingManage.php?id=<?php echo $date;?>" class="notification">
  <i class="fa fa-bell"></i>
  <span class="badge"> <?php echo $tot;?></span>
   </a>
     <div class="dropdown">	
  
 
    <a href="logout.php">
      <i class="fa fa-sign-out"></i>
     </a>

  </div> 

   