<?php
error_reporting(0);

include("include/database.php");

$qry="SELECT c_name, SUM(a_amt) from amount GROUP By c_name";
$res=mysql_query($qry);

$qry_s="SELECT SUM(a_amt) from amount";
$res_s=mysql_query($qry_s);

$qry_i="SELECT SUM(i_amt) from income";
$res_i=mysql_query($qry_i);


?>

<html>
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
	        <table class="tab_month">
            <tr class="tab1">
            <td>Details Of Expenses</td>
            <td>&nbsp;</td>
            </tr>
            </table>
            <table class="tab_last">
            <tr>
            <td>
                <table class="tab_select">
                    <tr>
                    <td>
                    <form action="" method="post">
                    <?php
						if(isset($_REQUEST['detail']))
						{
							$find=$_POST['f1'];
							$qryfind="select * from amount where c_name='$find'";
							$resfind=mysql_query($qryfind);
						}
					?>
					<?php
						
						$qry_f="select * from category";
						$res_f=mysql_query($qry_f);
					?>
                    <label>Select Category</label>
                    <select name="f1">
                    <?php
					 
					 $qry_select="select * from amount";
					 $res_select=mysql_query($qry_select);
					 $row_select=mysql_fetch_array($res_select);
					 
					while($row_f=mysql_fetch_array($res_f))
					{
						if($row_f[1] == $row_select[1])
						{
						echo "<option selected='selected'>";
						}
						else
						{
							echo "<option>";
						}
						echo $row_f[1];						
						echo "</option>";
					}
					?>
                    
                    </select>
                                    
                    </td>
                    <td><input type="submit" class="button" name="detail" value="Details" />
                    
                    </td>
                    </tr>
                    <tr>
                    </tr>
                    </table>
                    <table class="tabd">
                    <tr>
                    <td>Expense</td><td>Date</td><td>Month</td><td>Year</td>
                    </tr>
                    <?php
						if(isset($_REQUEST['detail']))
						{
							while($rowfind=mysql_fetch_array($resfind))
							{
								echo "<tr>";
								echo "<td>";
								echo $rowfind[2];
								echo "</td>";
								echo "<td>";
								echo $rowfind[3];
								echo "</td>";
								echo "<td>";
								echo $rowfind[4];
								echo "</td>";
								echo "<td>";
								echo $rowfind[5];
								echo "</td>";
								echo "</tr>";
							}
							
						}
					?>
                    </table>
                    </tr>
                    </form>
                    </table>
            </td>
            </tr>
            </table>
			<table class="tab_month">
            <tr class="tab1">
            <td>Income & Expense of Last Three Months</td>
            <td>&nbsp;</td>
            </tr>
            </table>
            <table class="tab_last">
            <tr>
            <td>
                <table class="month">
                    <tr>
                    <td>Month</td><td>Month</td>
                    </tr>
                    <tr>
                    <td>Income</td><td>Month</td>
                    </tr>
                    <tr>
                    <td>Expense</td><td>Month</td>
                    </tr>
                    <tr>
                    <td>Profit</td><td>Month</td>
                    </tr>
                </table>
            </td>
            <td>
            	<table class="month">
                    <tr>
                    <td>Month</td><td>Month</td>
                    </tr>
                    <tr>
                    <td>Income</td><td>Month</td>
                    </tr>
                    <tr>
                    <td>Expense</td><td>Month</td>
                    </tr>
                    <tr>
                    <td>Profit</td><td>Month</td>
                    </tr>
                </table>
            </td>
            <td>
            	<table class="month">
                    <tr>
                    <td>Month</td><td>Month</td>
                    </tr>
                    <tr>
                    <td>Income</td><td>Month</td>
                    </tr>
                    <tr>
                    <td>Expense</td><td>Month</td>
                    </tr>
                    <tr>
                    <td>Profit</td><td>Month</td>
                    </tr>
                </table>
            </td>
            </tr>
            </table>
        


</div>

<div class="total">
			
            
            <form action="" method="post">
            <table class="tab">
            <tr class="tab1">
            <td>Total Income:</td>
            <td>
			<?php 
				$row_i=mysql_fetch_array($res_i);
				echo $row_i[0];
				echo "&nbsp;Rs";
			?>
            </td>
            </tr>
            </table>
            
            <table class="tab">
            <tr class="tab1">
            <td>Total Amount:</td>
            <td>
			<?php 
				include("include/database.php");
				
				$qry_p="SELECT SUM(a_amt) from amount";
				$res_p=mysql_query($qry_p);
				$row_p=mysql_fetch_array($res_p);
				
				$qry_a="SELECT SUM(i_amt) from income";
				$res_a=mysql_query($qry_a);
				$row_a=mysql_fetch_array($res_a);
				
				$a=$row_p[0];
				$b=$row_a[0];
				
				$c = $b - $a;
				
				echo $c;
				echo "&nbsp;Rs";
 
			?>
            </td>
            </tr>
            </table>
			<table class="tab" >
			<tr class="tab1">
            <td>Category Name</td><td>Expense</td>
            </tr>
           <?php
				while($row = mysql_fetch_array($res))
				{	
					echo "<tr>";
					echo "<td>";
					echo $row['c_name'];
					echo "</td>";
					echo "<td class='cat'>";
					echo $row['SUM(a_amt)'];
					echo "&nbsp;Rs";
					echo "</td>";
					echo "</tr>";
				}
			?>
             
           	<?php
			$row_s=mysql_fetch_array($res_s);
				echo "<tr class='tab1'>";
				echo "<td>";
				echo "Total Expense:";
				echo "</td>";
				echo "<td>";
				echo $row_s[0];
				echo "&nbsp;Rs";
				echo "</td>";	
			?>	
            </table>

            </form>

</div>

</body>

</html>