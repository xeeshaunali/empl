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


<div class="container mt-5">
    <h2 class="mb-4">Generate Report</h2>
    <form action="searchResult.php" method="GET" id="myForm">
        <div class="row mb-3">


        <div class="col-md-3" data-aos="fade-down">
            <label for="nameappln" class="form-label">Name</label>
            <input type="text" class="form-control text-center shadow rounded" id="text" name="name">
        </div>

        <div class="col-md-3" data-aos="fade-down">
            <label for="nameappln" class="form-label">Father's Name</label>
            <input type="text" class="form-control text-center shadow rounded" id="text" name="fname">
        </div>

  <!-- test -->
  <div class="col-md-3" data-aos="fade-down">
    <label for="inputState" class="form-label">Designation</label>
    <select id="designation" class="form-select text-center shadow rounded" name="designation" >
      <option selected value="all">All</option>      
      <option value="Superintendent">Superintendent</option>
      <option value="Assistant Superintendent">Assistant Superintendent</option>
      <option value="Assistant">Assistant</option>
      <option value="Assistant-I&S-branch ">Assistant-I&S-branch</option>
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

  <div class="col-md-3" data-aos="fade-down">
    <label for="inputState" class="form-label">Basic Pay Scale</label>
    <select id="bps" class="form-select text-center shadow rounded" name="bps" >
    <option selected value="all">ALL</option>      
      <option value="BPS(17)">BPS(17)</option>
      <option value="BPS(16)">BPS(16)</option>
      <option value="BPS(15)">BPS(15)</option>
      <option value="BPS(14)">BPS(14)</option>
      <option value="BPS(13)">BPS(13)</option>
      <option value="BPS(12)">BPS(12)</option>
      <option value="BPS(11)">BPS(11)</option>
      <option value="BPS(10)">BPS(10)</option>
      <option value="BPS(9)">BPS(+)</option>
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
    <option selected value="all">ALL</option>      
      <option value="DJ">District & Sessions Court JSO</option>
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

  <div class="col-md-3">
    <label for="inputSyaye" class="form-label">HQ / Taluka of Posting</label>
    <select id="inputState" class="form-select text-center shadow rounded" name="taluka" >      
    <option selected value="all">ALL</option>
      <option value="Jamshoro Headquarter">Jamshoro Headquarter</option>
      <!-- <option value="Kotri">Kotri</option>       -->
      <option value="Manjhand">Manjhand</option>
      <option value="Sehwan">Sehwan</option>      
      <option value="NILL">Nill</option>
    </select>
  </div>
        


        <!-- <div class="col-md-4">
    <label for="inputSyaye" class="form-label">Police Station</label>
    <select id="ps" class="form-select text-center shadow rounded" name="ps" >
    <option selected value="all">ALL</option>      
      <option value="Jamshoro">Jamshoro</option>
      <option value="Kotri">Kotri</option>      
      <option value="Railway">Railway</option>
      <option value="Excise & ANF">Excise & ANF</option>
      <option value="Sehwan">Sehwan</option>
      <option value="Looni Kot">Looni Kot</option>      
      <option value="Bhaan Saeedabad">Bhaan Saeedabad</option>
      <option value="Manjhand">Manjhand</option>
      <option value="Nooriabad">Nooriabad</option>
      <option value="Chachar">Chachar</option>
      <option value="Khanoth">Khanoth</option>
      <option value="Budhapur">Budhapur</option>
      <option value="	Thebat">Thebat</option>
      <option value="Rajri">Rajri</option>
      <option value="Naing Sharif">Naing Sharif</option>
      <option value="Amri">Amri</option>
      <option value="	Mahi Otho">Mahi Otho</option>
      <option value="Khero Dero">Khero Dero</option>
      <option value="Jhangara">Jhangara</option>
      <option value="other">Other PS</option>
      <option value="NILL">Nill</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="inputAddress" class="form-label">Party One</label>
    <input type="text" class="form-control text-center shadow rounded" id="inputAddress" name="partyone">
  </div>

  <div class="col-md-4">
    <label for="inputAddress2" class="form-label">Party Two</label>
    <input type="text" class="form-control text-center shadow rounded" id="inputAddress2" name="partytwo">
  </div>


            <div class="col-md-3">
                <label for="start_date" class="form-label">From Date:</label>
                <input type="date" name="start_date" id="start_date" class="form-control text-center shadow rounded">
            </div>
            <div class="col-md-3">
                <label for="end_date" class="form-label">To Date:</label>
                <input type="date" name="end_date" id="end_date" class="form-control text-center shadow rounded">
            </div>
            <div class="col-md-3">
                <label for="courtname" class="form-label ">Court Name:</label>
                <select name="courtname" id="courtname" class="form-select text-center shadow rounded">
                <option selected value="all">ALL</option>
                <option value="DJ">District & Sessions Court JSO</option>
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
                </select>
            </div>
            <div class="col-md-3">
                <label for="status" class="form-label">Status:</label>
                <select name="status" id="status" class="form-select text-center shadow rounded">
                <option selected value="all">All</option>
                    <option value="LyingWithRecord">Lying With Record</option>
                    <option value="DistrictTransffer">District Transffer</option>
                    <option value="LyingWithClerk">Lying With Clerk</option>
                    <option  id="LyingWithOneWindow" value="LyingWithOneWindow">Lying with One Window</option>
                </select>
            </div> -->

            <!-- <div class="col-md-4">
                <label for="court_name" class="form-label">Court Name:</label>
                <input type="text" name="court_name" id="court_name" class="form-control">
            </div> -->

            <!-- <div class="col-md-12 text-center">
                <label for="status" class="form-label">ShelfNo</label>
                <select id="shelf" name="shelf" class="form-select text-center shadow rounded" >      
                <option selected id="all" value="all" class="text-center">All</option>
                <option id="A" value="A" class="text-center">A</option>
                <option id="B" value="B" class="text-center">B</option>
                <option id="C" value="C" class="text-center">C</option>
                <option id="A" value="D" class="text-center">D</option>
                <option id="B" value="E" class="text-center">E</option>
                <option id="C" value="F" class="text-center">F</option>
                <option id="A" value="G" class="text-center">G</option>
                <option id="B" value="H" class="text-center">H</option>
                <option id="C" value="I" class="text-center">I</option>
                <option id="A" value="J" class="text-center">J</option>
                <option id="B" value="K" class="text-center">K</option>
                <option id="C" value="L" class="text-center">L</option>
                <option id="A" value="M" class="text-center">M</option>
                <option id="B" value="N" class="text-center">N</option>
                <option id="C" value="O" class="text-center">O</option>
                <option id="A" value="P" class="text-center">P</option>
                <option id="B" value="Q" class="text-center">Q</option>
                <option id="C" value="R" class="text-center">R</option>
                <option id="A" value="S" class="text-center">S</option>
                <option id="B" value="T" class="text-center">T</option>
                <option id="C" value="U" class="text-center">U</option>
                <option id="A" value="V" class="text-center">V</option>
                <option id="B" value="W" class="text-center">W</option>
                <option id="C" value="X" class="text-center">X</option>
                <option id="A" value="Y" class="text-center">Y</option>
                <option id="B" value="Z" class="text-center">Z</option> -->
                
                <!-- TransferredOutDistrict -->
                <!-- </select>
            </div> -->
        
        
        
        </div>
        <div class="row mb-3 text-center">            
            <div class="col-md-12">
                <button type="submit" class="btn btn-success btn-lg mt-2">Search</button>
            </div>
        </div>

        
    </form>
</div>
<script>
    // Set the content of the new window
    printWindow.document.body.innerHTML = tableDataString;
</script>

<!-- Stops page data submission upon page refresh or submitting empty value START-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>
<!-- Stops page data submission upon page refresh or submitting empty value END -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-eUHJ3A5Cf7pyRffLZ/Dagx3lfUq76EdW8eN7eUtjhKp5AR6Vr+Qe4izfcSeJfBA" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-eUHJ3A5Cf7pyRffLZ/Dagx3lfUq76EdW8eN7eUtjhKp5AR6Vr+Qe4izfcSeJfBA" crossorigin="anonymous"></script>
</body>
</html>
