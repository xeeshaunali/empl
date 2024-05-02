<?php
session_start();
if(isset($_SESSION['uid']))
{

}
else
{
    header('location:login.php');
}
?><?php include 'header.php';?>   

<style>
  label{
    color:green;
    font-weight: bold;
    word-spacing: 0.5rem;
    letter-spacing: 0.1rem;
  }
</style>


<div class="container-fluid">
<!-- form control start -->
    <form class="row g-3 mx-auto" action="addEmployee.php" method="POST">
      
  <div class="col-md-3" data-aos="fade-down">
    <label for="nameappln" class="form-label">Name</label>
    <input type="text" class="form-control text-center shadow rounded" id="text" name="name">
  </div>

  <div class="col-md-3" data-aos="fade-down">
    <label for="nameappln" class="form-label">Father's Name</label>
    <input type="text" class="form-control text-center shadow rounded" id="text" name="fname">
  </div>

  <div class="col-md-3" data-aos="fade-down">
    <label for="nameappln" class="form-label">Caste</label>
    <input type="text" class="form-control text-center shadow rounded" id="text" name="caste">
  </div>

  <div class="col-md-3" data-aos="fade-down">
    <label for="nameappln" class="form-label">Address</label>
    <input type="text" class="form-control text-center shadow rounded" id="address" name="address">
  </div>

  <!-- test -->
  <div class="col-md-6" data-aos="fade-down">
    <label for="inputState" class="form-label">Designation</label>
    <select id="designation" class="form-select text-center shadow rounded" name="designation" >      
      <option selected value="Superintendent">Superintendent</option>
      <option value="Assistant Superintendent">Assistant Superintendent</option>
      <option value="Assistant">Assistant</option>
      <option value="Assistant-I&S-branch">Assistant-I&S-branch</option>
      <option value="Stenographer">Stenographer</option>
      <option value="Librarian">Librarian</option>
      <option value="Data Coder">Data Coder</option>
      <option value="Hardware & Network Technician">Hardware & Network Technician</option>
      <option value="Data Proceessing Assistant">Data Proceessing Assistant</option>
      <option value="Computer Operator">Computer Operator</option>
      <option value="Accountant">Accountant</option>
      <option value="Assistant Accountant">Assistant Accountant</option>
      <option value="Nazir of District Court">Nazir of District Court</option>
      <option value="COC of District Court">COC of District Court</option>
      <option value="COC of Senior Civil Judge / Civil Judge">COC of Senior Civil Judge / Civil Judge</option>
      <option value="Reader District Judge / Additional District Judge">Reader District Judge / Additional District Judge</option>
      <option value="Reader">Reader</option>
      <option value="Reader Senior Civil Judge / Civil Judge">Reader Senior Civil Judge / Civil Judge</option>
      <option value="Assistant Record Keeper District Court">Assistant Record Keeper District Court</option>
      <option value="Senior Clerk">Senior Clerk</option>
      <option value="English Clerk of Civil Court">English Clerk of Civil Court</option>
      <option value="Junior Clerk">Junior Clerk</option>
      <option value="Driver">Driver</option>
      <option value="CCTV Operator">CCTV Operator</option>
      <option value="Bailiff">Bailiff</option>
      <option value="Book Binder">Book Binder</option>
      <option value="Naib Qasid">Naib Qasid</option>
      <option value="Chowkidar">Chowkidar</option>
      <option value="Farash">Farash</option>
      <option value="Malhi">Malhi</option>
      <option value="Sweeper">Sweeper</option>
      <option value="all">ALL</option>      
    </select>
  </div>

  <div class="col-md-6" data-aos="fade-down">
    <label for="inputState" class="form-label">Basic Pay Scale</label>
    <select id="bps" class="form-select text-center shadow rounded" name="bps" >      
      <option selected value="BPS(17)">BPS(17)</option>
      <option value="BPS(16)">BPS(16)</option>
      <option value="BPS(15)">BPS(15)</option>
      <option value="BPS(14)">BPS(14)</option>
      <option value="BPS(13)">BPS(13)</option>
      <option value="BPS(12)">BPS(12)</option>
      <option value="BPS(11)">BPS(11)</option>
      <option value="BPS(10)">BPS(10)</option>
      <option value="BPS(9)">BPS(9)</option>
      <option value="BPS(8)">BPS(8)</option>
      <option value="BPS(7)">BPS(7)</option>
      <option value="BPS(6)">BPS(6)</option>
      <option value="BPS(5)">BPS(5)</option>
      <option value="BPS(4)">BPS(4)</option>
      <option value="BPS(3)">BPS(3)</option>
      <option value="BPS(2)">BPS(2)</option>
      <option value="BPS(1)">BPS(1)</option>      
    </select>
  </div>

  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">CNIC</label>
    <input type="number" class="form-control text-center shadow rounded" id="inputPassword4" name="cnic">
  </div>


    
    <div class="col-md-3" data-aos="fade-down">
    <label for="inputState" class="form-label">Posting Place</label>
    <select id="posting" class="form-select text-center shadow rounded" name="posting" >      
      <option selected value="DJ">District & Sessions Court JSO</option>
      <option value="ADJ-I">Additional Court-I, Kotri</option>
      <option value="ADJ-II">Additional Court-II, Kotri</option>
      <option value="ADJ-S">Additional Court, Sehwan</option>
      <option value="SENIOR-I">Senior / Assistant Sessions Court-I, Kotri</option>
      <option value="SENIOR-II">Senior / Assistant Sessions Court-II, Kotri</option>
      <option value="SENIOR-S">Senior / Assistant Sessions Court, Sehwan</option>
      <option value="CJJM-I-K">Civil Court-I, Kotri</option>
      <option value="CJJM-II-K">Civil Court-II, Kotri</option>
      <option value="CJJM-CONSUMER">Consumer Protection Court</option>
      <option value="CJJM-FAMILY">Family Court JSO</option>
      <option value="CJJM-I-S">Civil Court-I, Sehwan</option>
      <option value="CJJM-II-S">Civil Court-II, Sehwan</option>
      <option value="CJJM-III-TBK">Civil Court-III, Sehwan at TBK</option>
      <option value="CJJM-MANJHAND">Civil Court Manjhand</option>
      <option value="all">ALL</option>      
    </select>
  </div>


  <!-- <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Case Number</label>
    <input type="number" class="form-control text-center shadow rounded" id="inputPassword4" name="caseno">
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Case Year</label>
    <input type="number" class="form-control text-center shadow rounded" id="inputPassword4" name="year">
  </div>
  <div class="col-md-3">
    <label for="inputAddress" class="form-label">Party One</label>
    <input type="text" class="form-control text-center shadow rounded" id="inputAddress" name="partyone">
  </div>
  <div class="col-md-3">
    <label for="inputAddress2" class="form-label">Party Two</label>
    <input type="text" class="form-control text-center shadow rounded" id="inputAddress2" name="partytwo">
  </div> -->

  <!-- <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Crime Number</label>
    <input type="number" class="form-control text-center shadow rounded" name="crimeno" id="inputPassword4">
  </div> -->

  <!-- <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Crime Year</label>
    <input type="number" class="form-control text-center shadow rounded" name="crimeyear" id="inputPassword4">
  </div>
   -->

  <div class="col-md-3">
    <label for="inputSyaye" class="form-label">HQ / Taluka of Posting</label>
    <select id="inputState" class="form-select text-center shadow rounded" name="taluka" >      
      <option selected value="Jamshoro Headquarter">Jamshoro Headquarter</option>
      <!-- <option value="Kotri">Kotri</option>       -->
      <option value="Manjhand">Manjhand</option>
      <option value="Sehwan">Sehwan</option>      
      <!-- <option value="NILL">Nill</option> -->
    </select>
  </div>

  <div class="col-md-3">
    <label for="inputCity" class="form-label">Cell Number</label>
    <input type="text" class="form-control text-center shadow rounded" name="cell" id="cell">
  </div>

  <!-- <div class="col-md-3">
    <label for="date" class="form-label">Disposal Date</label>
    <input type="date" class="form-control text-center shadow rounded" name="datedisposal" id="date">
  </div> -->

  <!-- <div class="col-md-4">
    <label for="date" class="form-label">Date of Birth</label>
    <input type="date" class="form-control text-center shadow rounded" name="dob" id="date">
  </div> -->

  <div class="col-md-4 col-xl-12 col-sm-12">
    <label for="date" class="form-label">Date of Appointment</label>
    <input type="date" class="form-control text-center shadow rounded" name="doa" id="date">
  </div>

  <!-- <div class="col-md-4">
    <label for="date" class="form-label">Date of Retirement</label>
    <input type="date" class="form-control text-center shadow rounded" name="dor" id="date">
  </div> -->

  <!-- <div class="col-md-3">
    <label for="status" class="form-label">CTC Status</label>
    <select id="status" name="status" class="form-select text-center shadow rounded" >      
      <option selected id="pending" value="Pending">Pending</option>
      <option id="Ready" value="Ready">Ready</option>
      <option id="pending" value="Delivered">Deleivered</option>
    </select>
  </div>  -->


  <!-- <div class="col-md-3">
    <label for="ready" class="form-label">CTC Prepared</label>
    <select id="ready" name="ready" class="form-select text-center shadow rounded" >      
      <option selected id="Not Ready" value="Not Ready">Not Ready</option>
      <option id="Ready" value="Ready">Ready</option>
    </select>
  </div>  -->

  <!-- <div class="col-md-4">
    <label for="inputCity" class="form-label">Amount / Cost</label>
    <input type="number" class="form-control text-center shadow rounded" name="cost" id="cost">
  </div> -->
  
  <div class="col-12 text-center mt-5 mb-1">
    <button type="submit" class="btn btn-success btn-lg w-50 " name="submit">Submit</button>
  </div>

  <!-- <div class="col-12 text-center mt-5 mb-5">
    <a href="receiptPrint.php" style="text-decoration:none; font-weight:bold; font-size:1rem;" class="btn btn-success shadow round">Print Receipt</a>
  </div> -->
</form>
<!-- form control end -->

<!-- REPORT CARDS START -->


<!-- ID Generated   -->


<?php
if(isset($_POST['submit']))
{
    include "dbconn.php";
    $name         = $_POST['name'];
    $fname        = $_POST['fname'];
    $caste        = $_POST['caste'];
    $address      = $_POST['address'];
    $designation  = $_POST['designation'];
    $bps          = $_POST['bps'];
    $cnic         = $_POST['cnic'];
    $cell         =$_POST['cell'];
    $posting      = $_POST['posting'];
    $taluka       = $_POST['taluka'];
    //$crimeno       = $_POST['crimeno'];
    //$crimeyear     = $_POST['crimeyear'];
    $dob          = $_POST['dob'];
    $doa          = $_POST['doa'];
    $dor          = $_POST['dor'];

    //$datedisposal  = $_POST['datedisposal'];
    // $datehearing   = $_POST['datehearing'];
    //$datedelev     = $_POST['datedelev'];
    // $ready     = $_POST['ready'];
    //$status        = $_POST['status'];
    //$cost          = $_POST['cost'];
    //$ps            = $_POST['ps'];
    

    // $imagename = $_FILES['image']['name'];
    // $temp_name = $_FILES['image']['tmp_name'];
    // move_uploaded_file($temp_name,"../dataimg/$imagename");

    $qry ="INSERT INTO `employee`(`name`, `fname` , `caste` , `address`, `designation` , `bps`, `cnic`, `posting`, `dob`, `doa`,`dor`, `cell`, `taluka`) VALUES ('$name','$fname' , '$caste', '$address' , '$designation', '$bps', '$cnic','$posting', '$dob', '$doa', '$dor', '$cell', '$taluka')";

    $run = mysqli_query($con,$qry);
    
    $last_id = null;

    if($run == false)
    {
        $error = mysqli_error($con);
         echo "Error: $error";
        ?>
          <script>
            alert("Fill all fields first");
          </script>
        <?php
    }
    else
    {
        ?>
            <script>
                alert("success");
            </script>
            
        <?php
        
        // Last Row Record Generated Start
        $last_id = $con->insert_id;
        // echo "New record created successfully. Last inserted ID is: " . $last_id;
       
        ?>
            <h1 class="id">
              <?php // echo "Employee id is:"."  " . $last_id; ?>
            </h1>
            
            <!-- // Last Row Record Generated Stop -->
        <?php
        ?>
            <script>
            if ( window.history.replaceState )
            {
              window.history.replaceState( null, null, window.location.href );
            }
            </script>
        <?php
    }   
}

?>


<!-- Stops page data submission upon page refresh or submitting empty value START-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!-- Stops page data submission upon page refresh or submitting empty value END -->


</body>
</html>


