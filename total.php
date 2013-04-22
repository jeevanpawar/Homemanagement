<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/screen.css" media="screen" />
</head>
<?php
error_reporting(0);
include("include/database.php");

$qry="SELECT c_name, SUM(a_amt) from amount GROUP By c_name";

$res=mysql_query($qry);

$qry_s="SELECT SUM(a_amt) from amount";
$res_s=mysql_query($qry_s);

?>
<body>


    <div id="container">
		<form id="form2" action="" method="post">	
		
			<h3><span>Total </span></h3>
		
			<fieldset>
            
           
            <?php
				while($row = mysql_fetch_array($res))
				{
					echo "&nbsp;&nbsp;&nbsp;&nbsp;";
					echo $row['c_name'];
					echo ":&nbsp;&nbsp;";
					echo $row['SUM(a_amt)'];
					echo "&nbsp;Rs";
					echo "<br />";
				}
			?>
           	<?php
			$row_s=mysql_fetch_array($res_s);
			
			echo "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;Total Amount:&nbsp;&nbsp;";
			
			echo $row_s[0];
			
			echo "&nbsp;Rs";
			
			?>			
                        
		</form>	
		
		
</div>
</body>

</html>