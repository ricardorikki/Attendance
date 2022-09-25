<?php $title = "Success";
require_once 'includes/header.php'; 
require_once 'db/conn.php';

if(isset($_POST['submit'])){
  $fname = $_POST['FirstName'];
  $lname = $_POST['LastName'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $specialty = $_POST['specialty'];
  $isSuccecc = $crud->insertAttendee($fname,$lname,$dob,$email,$contact,$specialty);
}
if ($isSuccecc){
  echo '<h4 class="text-center" style="color: green">Great everything works</h4>';
}
else{
  echo '<h3>Something is wrong</h3>';
}

?>

<br/>
<h3 class="text-center">Thanks for Registering</h3>
<p class="text-center">In the coming days you will be getting a series of emails from us indicating your next steps.</p>

<div class="center" style="padding: 50px;">
<div class="card" style="width: 54rem;">
  <div class="card-body">

  <!--Get-->
   <!-- <h5 class="card-title"><?php //echo $_GET['FirstName'].' '. $_GET['LastName']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php //echo 'Date of Birth is: '.$_GET['dob'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php //echo 'Specialty is: '.$_GET['specialty'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php //echo 'Email Address is: '.$_GET['email'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php //echo 'Telephone Number is: '.$_GET['contact'];?></h6>

-->
<div class="card-body">
    <h5 class="card-title"><?php echo $_POST['FirstName'].' '. $_POST['LastName']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Date of Birth is: '.$_POST['dob'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Specialty is: '.$_POST['specialty'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Email Address is: '.$_POST['email'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Telephone Number is: '.$_POST['contact'];?></h6>
  </div>
</div>

</div>







<?php require_once'includes/footer.php'; ?>

