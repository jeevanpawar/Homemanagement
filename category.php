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

if(isset($_REQUEST['b1']))
{
	$c=$_POST['cat'];
	$ca=$_POST['cap'];
	
	$qry="insert into category(c_name,caption) values('".$c."','".$ca."')";
	
	$res=mysql_query($qry);
	if($res)
	{
		echo "inserted";
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
		
			<h3><span>Category</span></h3>
		
			<fieldset><legend>Contact form</legend>
				<p class="first">
                <label for="email">Enter Category Name</label>
					<input type="text" name="cat" id="email" size="30" />
					
				</p>
				<p>
					<label for="email">Caption</label>
					<input type="text" name="cap" id="email" size="30" />
				</p>
																							
				
				<p class="submit"><button type="submit" name="b1">Insert</button></p>		
							
			</fieldset>					
						
		</form>	
		
		
</div>
</div>
</body>
</html>