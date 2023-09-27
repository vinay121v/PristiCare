<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{

 $sql=mysqli_query($con,"select workerName,id from workers where specilization='".$_POST['specilizationid']."'");?>
 <option selected="selected">Select Worker </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['workerName']); ?></option>
  <?php
}
}


if(!empty($_POST["worker"])) 
{

 $sql=mysqli_query($con,"select docFees from workers where id='".$_POST['worker']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}
}

?>

