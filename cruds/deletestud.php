<?php

// deleting admin
 $srol= $_GET['stdid'];
 //echo  $rsrol;

include('../connection.php');
$dbsadm=db_connect();
        

$query3="DELETE FROM tnp_memb where tnpenroll='".$srol."'";
$result_setadmd=mysqli_query($dbsadm,$query3);

$query2="DELETE FROM sp_info where spenroll='".$srol."'";
$result_setadmd=mysqli_query($dbsadm,$query2);
$query1="DELETE FROM s_login where logenroll='".$srol."'";
$result_setadmd=mysqli_query($dbsadm,$query1);
$query="DELETE FROM student where senrollno='".$srol."'";
$result_setadmd=mysqli_query($dbsadm,$query);



//$counttadmn=mysqli_num_rows($result_setad);

 
if(!$result_setadmd || !$result_setadmd || !$result_setadmd){
    echo mysqli_error($dbsadm);
}
  

?>