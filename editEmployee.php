<?php
session_start();
if(isset($_SESSION['uid']))
{

}
else
{
    header('location:login.php');
}
?>
<?php include 'header.php';?>   

<div class="container-fluid">

    <h2 class="text-center text-success">Edit Employee Record </h2>
    <!-- Search Edit Form Start -->
    <form action="editEmployee.php" method="GET" class="text-center">
        <label for="search">Search Employee Details by ID:</label>
        <input type="number" name="id" id="search" required class="shadow rounded form-select text-center">
        <button type="submit" class="btn btn-success btn-lg shadow rounded mt-5">Search</button>
    </form>
    <!-- Search Edit Form End -->

    <?php
    // Display the record for editing
    if (isset($_GET['id'])) {

        include "dbconn.php";
        $id = $_GET['id'];
        

        if ($con->connect_error) {
            die('Connection failed: ' . $con->connect_error);
        }

        // Fetch record based on ID
        $query = "SELECT * FROM employee WHERE id = $id";
        $result = $con->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
            <!-- Edit Form -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">

      <form action="save.php" method="POST">

            <div class="col-md-3">
                <label for="name">Employee ID:</label>
                <input class="fw-bold text-danger" style="border:none;" type="" name="id" value="<?php echo $row['id']; ?>">
                <!-- <label for="name">Name:</label>                 -->
            </div>

            <div class="row">

                <div class="col-md-3 mt-5">
                    <label for="name">Name:</label>
                    <input type="" name="name" id="name" value="<?php echo $row['name']; ?>" class="shadow rounded form-select text-center" >
                </div>

                <div class="col-md-3 mt-5">
                <label for="name">Father's Name:</label>
                    <input type="" name="fname" id="fname" value="<?php echo $row['fname']; ?>" class="shadow rounded form-select text-center" >          
                </div>

                <div class="col-md-3 mt-5" >
                    <label for="posting" class="form-label">Posting Court:</label>
                    <select  id="posting" name="posting" class="form-select text-center shadow rounded" >                              
                    

                        <option id="DJ" value="DJ" <?php echo ($row['posting'] == 'DJ') ? 'selected' : ''; ?>>DJ</option>

                        <option id="ADJ-I" value="ADJ-I" <?php echo ($row['posting'] == 'ADJ-I') ? 'selected' : ''; ?>>ADJ-I</option>

                        <option id="ADJ-II" value="ADJ-II" <?php echo ($row['posting'] == 'ADJ-II') ? 'selected' : ''; ?>>ADJ-II</option>
                        
                        <option id="ADJ-S" value="ADJ-S" <?php echo ($row['posting'] == 'ADJ-S') ? 'selected' : ''; ?>>ADJ-S</option>

                        <option id="SENIOR-I" value="SENIOR-I" <?php echo ($row['posting'] == 'SENIOR-I') ? 'selected' : ''; ?>>SENIOR-I</option>

                        <option id="SENIOR-II" value="SENIOR-II" <?php echo ($row['posting'] == 'SENIOR-II') ? 'selected' : ''; ?>>SENIOR-II</option>

                        <option id="SENIOR-S" value="SENIOR-II" <?php echo ($row['posting'] == 'SENIOR-II') ? 'selected' : ''; ?>>SENIOR-S</option>

                        <option id="CJJM-I-K" value="CJJM-I-K" <?php echo ($row['posting'] == 'CJJM-I-K') ? 'selected' : ''; ?>>CJJM-I-K</option>

                        <option id="CJJM-II-K" value="CJJM-II-K" <?php echo ($row['posting'] == 'CJJM-II-K') ? 'selected' : ''; ?>>SENIOR-S</option>

                        <option id="CJJM-CONSUMER" value="CJJM-CONSUMER" <?php echo ($row['posting'] == 'CJJM-CONSUMER') ? 'selected' : ''; ?>>CJJM-CONSUMER</option>

                        <option id="CJJM-FAMILY" value="CJJM-FAMILY" <?php echo ($row['posting'] == 'CJJM-FAMILY') ? 'selected' : ''; ?>>CJJM-FAMILY</option>

                        <option id="CJJM-I-S" value="CJJM-I-S" <?php echo ($row['posting'] == 'CJJM-I-S') ? 'selected' : ''; ?>>CJJM-I-S</option>

                        <option id="CJJM-II-S" value="CJJM-II-S" <?php echo ($row['posting'] == 'CJJM-II-S') ? 'selected' : ''; ?>>CJJM-II-S</option>

                        <option id="CJJM-III-TBK" value="CJJM-III-TBK" <?php echo ($row['posting'] == 'CJJM-III-TBK') ? 'selected' : ''; ?>>CJJM-III-TBK</option>

                        <option id="CJJM-MANJHAND" value="CJJM-MANJHAND" <?php echo ($row['posting'] == 'CJJM-MANJHAND') ? 'selected' : ''; ?>>CJJM-MANJHAND</option>
                        

                    </select>          
                </div>


                <div class="col-md-3 mt-5" >
                    <label for="taluka" class="form-label">HQ / Taluka:</label>
                    <select  id="taluka" name="taluka" class="form-select text-center shadow rounded" >                              
                    

                        <option id="Jamshoro Headquarter" value="Jamshoro Headquarter" <?php echo ($row['taluka'] == 'Jamshoro Headquarter') ? 'selected' : ''; ?>>Jamshoro Headquarter</option>

                        <option id="Manjhand" value="Manjhand" <?php echo ($row['taluka'] == 'Manjhand') ? 'selected' : ''; ?>>Manjhand</option>

                        <option id="Sehwan" value="Sehwan" <?php echo ($row['taluka'] == 'Sehwan') ? 'selected' : ''; ?>>Sehwan</option>
                        
                        

                    </select>          
                </div>

            </div>
           

          
<!-- Add other fields as needed -->
            <div class="row">
                <div class="col-md-12 text-center rounded shadow"><button type="submit" class="btn btn-danger btn-lg text-center mt-5 mb-3">Save Changes</button></div>
            </div>
            
        </form>
    </div>

    </div>
</div>
            
    <?php
        } else {
            echo "Record not found.";
        }

        $con->close();
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


