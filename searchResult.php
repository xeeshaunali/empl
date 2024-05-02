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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">   
    <script src="datatable/jquery-3.7.0.js"></script>
    <style>
        body{
            margin: 0 auto;
            padding: 0px;
        }

    </style>

<style>
        /* Add a CSS rule to hide the button when printing */
        @media print {
            .print-button {
                display: none !important;
            }
        }
    </style>
    
    <title>|| EMPLOYEE MANAGEMENT SYSTEM ||</title>
</head>
<body>


<?php
// Your database connection code here
include "dbconn.php";

//$start_date = isset($_GET['start_date']) ? $_GET['start_date'] : '';
//$end_date = isset($_GET['end_date']) ? $_GET['end_date'] : '';
$name = isset($_GET['name']) ? $_GET['name'] :'';
$fname = isset($_GET['fname']) ? $_GET['fname'] :'';
$cnic = isset($_GET['cnic']) ? $_GET['cnic'] :'';
$designation = isset($_GET['designation']) ? $_GET['designation'] : 'all';
$posting = isset($_GET['posting']) ? $_GET['posting'] : 'all';
$bps = isset($_GET['bps']) ? $_GET['bps'] : 'all';
$taluka = isset($_GET['taluka']) ? $_GET['taluka'] : 'all';
//$caseno = isset($_GET['cnic']) ? $_GET['cnic'] :'';
//$year = isset($_GET['year']) ? $_GET['year'] :'';
//$partyone = isset($_GET['partyone']) ? $_GET['partyone'] :'';
//$partytwo = isset($_GET['partytwo']) ? $_GET['partytwo'] :'';
//$court_name = isset($_GET['courtname']) ? $_GET['courtname'] : 'all';
//$status = isset($_GET['status']) ? $_GET['status'] : 'all';
//$shelf = isset($_GET['shelf']) ? $_GET['shelf'] : 'all';


// Build the SQL query based on the selected filters
$sql = "SELECT * FROM employee WHERE 1";

// Add conditions based on the provided filters
if (!empty($start_date) && !empty($end_date)) {
    //$sql .= " AND dateSubmission BETWEEN '$start_date' AND '$end_date'";    
}


// Filter by Police Statation
if ($designation !== 'all') {
    $sql .= " AND designation = '$designation'";
}


// Filter by Crime Number
if (!empty($crimeno)) {
    //$sql .= " AND crimeno = '$crimeno'";
}

// Filter by Crime Year
if (!empty($crimeyear)) {
    //$sql .= " AND crimeyear = '$crimeyear'";
}

// Filter by Case Number
if (!empty($cnic)) {
    $sql .= " AND cnic = '$cnic'";
}

// Filter by Case Year
if (!empty($year)) {
    //$sql .= " AND year = '$year'";
}


// Filter by name
if (!empty($name)) {
    $sql .= " AND name like '%$name%'";
}

// Filter by Father Name
if (!empty($fname)) {
    $sql .= " AND fname like '%$fname%'";
}

// Filter by Posting Court
if ($bps !== 'all') {
    $sql .= " AND bps = '$bps'";
}


// Filter by Posting Court
if ($posting !== 'all') {
    $sql .= " AND posting = '$posting'";
}

// Filter by taluka of Posting
if ($taluka !== 'all') {
    $sql .= " AND taluka = '$taluka'";
}


$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5uoF0Zl3+kv4o5C/gSA4gEhqU7TWq18LDnZwiabtGUpJ3pi5P3BYWBn2bvy5+J" crossorigin="anonymous">
    <title>Search Results</title>
    <style>
            tr th {
                border:2px solid black !important;
                text-align: center;             
            }
            td {
                border: 2px solid black;
                text-align: center;
                padding-top: 1px !important;
                padding-bottom:3px !important;


            }
    </style>
</head>
<body>

<div class="container-fluid mt-5">
    <h2 class="mb-4 text-center text-success fw-bolder">|| EMPLOYEE DETAILS || </h2>
    <?php
     if ($result && $result->num_rows > 0) {
        ?>
        <table class="table table-striped bordered">
            <thead>
            <tr>
                        <th>ID</th>                        
                        <th>Name</th>
                        <th>Father<br>Name</th>
                        <th>Caste</th>
                        <th>Address</th>
                        <th>Designation</th>
                        <th>BPS</th>
                        <th>CNIC</th>
                        <th>Cell</th>
                        <th>Posting Court</th>
                        <th>Posting Place</th>
                        <th>DOB</th>
                        <th>Appointment</th>
                        <th>Retirement</th>
                        
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["fname"]; ?></td>
                            <td><?php echo $row["caste"]; ?></td>
                            <td><?php echo $row["address"]; ?></td>
                            <td><?php echo $row["designation"]; ?></td>
                            <td><?php echo $row["bps"]; ?></td>
                            <td><?php echo $row["cnic"]; ?></td>
                            <td><?php echo $row["cell"]; ?></td>
                            <td><?php echo $row["posting"]; ?></td>
                            <td><?php echo $row["taluka"]; ?></td>
                            <td><?php echo $row["dob"]; ?></td>
                            <td><?php echo $row["doa"]; ?></td>
                            <td><?php echo $row["dor"]; ?></td>                            
                            
                </tr>
                <?php
            }
            mysqli_free_result($result);
            ?>
            </tbody>
        </table>
        <?php
    } else {
        echo "No records found.";
    }


    $con->close();

    ?>
</div>

    <div class="text-center mt-3 fw-bold">
            <div class="print-date">Printed on: <?php date_default_timezone_set('Asia/Karachi'); echo date('Y-m-d H:i:s'); 
            ?><br><br>
             <button class="btn btn-danger btn-lg shadow rounded print-button" onclick="printPage()">PRINT</button>
    </div>
                        
    </div>


<script>
    // Function to print the page
    function printPage() {
        window.print();
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-eUHJ3A5Cf7pyRffLZ/Dagx3lfUq76EdW8eN7eUtjhKp5AR6Vr+Qe4izfcSeJfBA" crossorigin="anonymous"></script>
</body>
</html>
