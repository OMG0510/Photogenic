 <?php 
 	include "config.php";

 	if (isset($_GET['id'])) 
 	{
 	// 	$sel=mysqli_query($connect,"select * from student where id='".$_GET['stud_id']."' ");
		// while ($fetch=mysqli_fetch_array($sel))
  //        {
  //                  $img=$fetch["photo"];
  //        }
  //        $isrc="image/".$img;
  //         unlink($isrc);

 		$delete = mysqli_query($connect,"delete from contact where id='".$_GET['id']."'");

 		if ($delete) 				
		{
			echo "<script>;";
			echo "alert('Record Delete....!');";
			echo 'window.location.href = "basic_table.php";';
			echo "</script>;";
		}
		else
		{
			echo "<script>;";
			echo "alert('Data error....!');";
			echo 'window.location.href = "basic_table.php";';
			echo "</script>;";
		}
 	}

  ?>