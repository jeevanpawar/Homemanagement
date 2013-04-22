<?php
include("include/database.php");
if(isset($_REQUEST['b1']))
{
	$a=$_POST['i_amt'];
	$b=$_POST['i_date'];
	
	$qry_ad="insert into income(i_amt,i_date) values('".$a."','".$b."')";
	
	echo $qry_ad;
	
	$res_ad=mysql_query($qry_ad);
	
	if($res_ad)
	{
		header("location:dashboard.php");
	}
	else
	{
		echo "error";
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/screen.css" media="screen" />

</head>
<body>

<div class="header">


<div class="menu">

<ul>

<li><a href="dashboard.php">Home</a></li>
<li><a href="income.php">Income</a></li>
<li><a href="index.php">Expense</a></li>
<li><a href="category.php">New Category</a></li>


</ul>

</div>
</div>

<div class="middle">
   <div id="container">


		
		

		<form id="form2" action="" method="post">	
		
			<h3><span>Income</span></h3>
		
			<fieldset><legend>Income</legend>
				<p class="first">
                <label for="email">Amount</label>
					<input type="text" name="i_amt"  size="30" />
					
				</p>
				<p>
					<label for="email">Date</label>
					<select class="sdate">
                    <?php
						for($i=1; $i<=31; $i++)
						{
							echo "<option>";
							echo $i;
							echo "</option>";
						}
					?>
                    </select>
				</p>
																							
				
				<p class="submit"><button type="submit" name="b1">Insert</button></p>		
							
			</fieldset>					
						
		</form>
		
		
</div>

</div>

</body>

</html>