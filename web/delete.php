<meta charset="utf-8">
<?php
	error_reporting(0);
	session_start();
	$Article_id=$_GET["ID"];

	mysql_connect("localhost","root","root");
	mysql_select_db("pawarisaclinic");
	$strSQL = "DELETE FROM article WHERE article_id = $Article_id";
	echo $strSQL;
	$objQuery = mysql_query($strSQL);
	?>
				<script> 
				window.location = "showdata.php";
				alert("ลบข้อมูลสำเร็จ");
				</script>
				<?php	
	
	?>