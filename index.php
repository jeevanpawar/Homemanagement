<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/screen.css" media="screen" />
<link rel="stylesheet" type="text/css" href="demo/css/datePicker.css" />

</head>
<?php
error_reporting(0);
include("include/database.php");

$h_qry="select * from category";
$h_res=mysql_query($h_qry);
?>
<?php

if(isset($_REQUEST['b1']))
{
	$a=$_POST['amt'];
	$c=$_POST['cat'];
	$b=$_POST['e_date'];
	$d=$_POST['mon'];	
	$e=$_POST['year'];
	
	$qry="insert into amount(c_name,a_amt,a_date,a_month,a_year) values('".$c."','".$a."','".$b."','".$d."','".$e."')";
	
	$res=mysql_query($qry);
	if($res)
	{
		header("location:index.php");
	}
	else
	{
		echo "not inserted";
	}
}
?>
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


<div class="main">

<div id="container">


		
		

		<form id="form2" action="" method="post">	
		
			<h3><span>Deposit Amount</span></h3>
		
			<fieldset><legend>Contact form</legend>
				<p class="first">
					<label for="name">Select Category Name</label>
					<select name="cat">
                    <?php
					while($row=mysql_fetch_array($h_res))
					{
					 echo"<option>";
					 echo $row[1];
					 echo"</option>";
					}
					?>
                    </select>
				</p>
				<p>
					<label for="email">Enter Amount</label>
					<input type="text" name="amt" id="email" size="30" />
				</p>
				<p>
					<label for="web">Select Date</label>
					<select name="e_date">
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
                <p>
					<label for="web">Select Month</label>
					<select name="mon">
                    <option>Jan</option>
                    <option>Feb</option>
                    <option>Mar</option>
                    <option>Apr</option>
                    <option>May</option>
                    <option>Jun</option>
                    <option>Jal</option>
                    <option>Aug</option>
                    <option>Sep</option>
                    <option>Oct</option>
                    <option>Nov</option>
                    <option>Des</option>
                    </select>
				</p>
                <p>
					<label for="web">Select year</label>
					<select name="year">
                    <?php
						for($i=2013; $i<=2015; $i++)
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