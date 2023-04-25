<?php
include("connection.php");
error_reporting(0);

$query ="SELECT * FROM FORM";
$data = mysqli_query($conn,$query);


 $total=mysqli_num_rows($data);
 $result =mysqli_fetch_assoc($data);
echo $result[fname];

//echo $total;

if($total !=0)
{
//echo "table has record";

}
else
{
	echo " failed No record ";
}
?>