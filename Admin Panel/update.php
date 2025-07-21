<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	 <!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!----webfonts--->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<!---//webfonts--->  
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<title>Update Page</title>
</head>
<body>
	<div class="panel-body no-padding" style="display: block;">
                <?php 
                include "config.php";
                        if($_GET['id'])
                        {
                            $view = mysqli_query($connect,"select * from contact where id='".$_GET['id']."'") or die(mysqli_error($connect));
                            $row = mysqli_fetch_array($view);
                        }
                    ?>
                <form method="POST">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control1" >
                <br>
                    <label>Email</label>
                   <input type="text" name="email" value="<?php echo $row['email'];?>" class="form-control1" >
                <br>
                    <label >Subject</label>
                    <input type="text" name="subject" value="<?php echo $row['subject'];?>" class="form-control1" >
                <br>
                    <label >URL</label>
                    <input type="text" name="url" value="<?php echo $row['url'];?>" class="form-control1" >
                <br>
                    <label>Message</label>
                    <input type="text" name="message" value="<?php echo $row['message'];?>" class="form-control1" >
                <br><br>
                <input class="btn btn-info btn-lg" type="submit" name="btn_update" value="Update">
                <input class="btn btn-success btn-lg" type="reset" name="btn_reset" value="Reset">
                </form>
                </div>  
            </div>
        </div>
 	</body>
</html>
<?php 
    if(isset($_POST["btn_update"]))
    {
        extract($_POST);

        $update = mysqli_query($connect," update contact set
        name='".$name."',
        email='".$email."',
        subject='".$subject."',
        url='".$url."',
        message='".$message."'
        where id='".$_GET["id"]."'") or die(mysqli_error($connect));
        if($update)
		{
			echo "<script>;";
			echo "window.alert('Data update successfully....!');";
			echo 'window.location.href = "basic_table.php";'; 
			echo "</script>";
		}
		else
		{
			echo "<script>;";
			echo "window.alert('Data error....!');";
			echo "</script>";
		}
    }
?>