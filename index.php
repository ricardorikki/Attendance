<?php $title = "Home";
require_once 'includes/header.php'; 
require_once 'db/conn.php';
?>

<br/>
<h3 class="text-center">Registration for IT Conference 2022 </h3>

<!--
    - First name
    - Last name
    - Date of Birth (use Datepicker)
    - Specialty (Database Admin, Software Developer, Web Administrator )
    - Email Address 
    - Contact Number
-->

<div class="form">
 <form action="success.php" class="was-validated" method="post">
  <div class="mb-3 mt-3">
    <label for="fname" class="form-label">First Name:</label>
    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="FirstName" required>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="mb-3 mt-3">
    <label for="lname" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="LastName" required>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="mb-3 mt-3">

    
    <p>Date of Birth: <input type="text" class="form-control" id="dateofbirth" name="dob" required></p>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <label for="spe" class="form-label" >Specialty</label>
  <select class="form-select" id="spe" aria-label="Default select example" name="specialty" required> 
  <option value="1">Software Developer</option>
  <option value="2">Web Administrator</option>
  <option value="3">Database Administrator</option>
  <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please select.</div>  
</select><p></p>
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
  <div class="mb-3">
    <label for="contact" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="contact" required name="contact">
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>  
</div>


  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
  
</form>
</div><!--Form Div closing-->
<?php require_once'includes/footer.php'; ?>

