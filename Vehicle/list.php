<?php

 include "vehicle.php";
 
 $obj = new vehicle();
 $obj->setdebug(1);
 if(isset($_GET['delete'])){
 	$delete_number=$_GET["delete"];
 	$delete_status=$obj->delete($delete_number);
 }
 if(isset($_POST)){	 
	 $target_dir = "images/";
	 $target_file = $target_dir. basename($_FILES["image"]["name"]); 
	 $_POST["image"]=basename($_FILES["image"]["name"]);
	 $uploads=move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
	}
 $insert = $obj->insert($_POST);
 $list =$obj->select();

 echo '<table  border = 1 style ="width:50%" align="center">';
 echo "<tr>";
 echo "<th> Name </th>";
 echo "<th> Wheel </th>";
 echo "<th> Type </th>";
 echo "<th> Color </th>";
 echo "<th> Number </th>";
 echo "<th> Date </th>";
 echo "<th> Delete </th>";
 echo "<th> image </th>";
 echo "</tr>";
  
 foreach ($list as $key => $value) {
 	echo "<tr>";
 	echo "<td>" .$value['name']. "</td>";
 	echo "<td>". $value["wheel"]. "</td>";
 	echo "<td>" .$value["type"] ."</td>";
 	echo "<td>" .$value["color"]. "</td>";
 	echo "<td>". $value["number"]. "</td>";
 	echo "<td>". $value["date"] ."</td>";
 	$number=$value["number"];
 	echo '<td><a href="list.php?delete='.$number.'" onclick= "return confirm(\'Are u sure ?\');"> DELETE </a></td>';
 	echo "<td><img  height='150' width='150' src='images/".$value['image']."'> </td>";
 	echo "</tr>";

 }
 echo "</table>";
?>