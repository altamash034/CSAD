<?php
define('TITLE', 'Work Done');
define('PAGE', 'CheckStatus');
//include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_login'])){
  $uEmail = $_SESSION['uEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }

  $sql = "SELECT myfile FROM workdone_tb WHERE request_id = {$_SESSION['rid']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 
?>
<div class="col-sm-5 mt-5 mo">
	<h1 class="text-center">BILL</h1>
	<div >
	<img src="<?php if(isset($row[ 'myfile'])) {echo "../Technician/".$row['myfile']; }?>" width="700px" height="1000px">
	</div>
	<div class="text-center">
  
  <form class='d-print-none d-inline' action="CheckStatus.php"><input class='btn btn-secondary' type='submit' value='Close'></form>
 </div>
</div>
<?php
include('includes/footer.php'); 
?>