<?php
    include 'header.php';    
?>

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

<?php
include "dbconn.php";

// Your SQL query to get row count
$sql = "SELECT COUNT(*) as count FROM employee";

// Your SQL query to get row count Jamshoro Headquarter
$sqlHQ = "SELECT COUNT(*) as count FROM employee WHERE `taluka` = 'Jamshoro Headquarter'";

// Your SQL query to get row count Manjhand
$sqlManjhand = "SELECT COUNT(*) as count FROM employee WHERE `taluka` = 'Manjhand'";

// Your SQL query to get row count Sehwan
$sqlSehwan = "SELECT COUNT(*) as count FROM employee WHERE `taluka` = 'Sehwan'";

$result = $con->query($sql);
$resultHQ = $con->query($sqlHQ);
$resultManjhand = $con->query($sqlManjhand);
$resultSehwan = $con->query($sqlSehwan);

$rowCount = 0;
$rowCountHQ = 0;
$rowCountManjhand= 0;
$rowCountSehwan= 0;

if ($result->num_rows > 0) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();   
    $rowCount = $row['count'];    
}

if ($resultHQ->num_rows > 0) {
    // Fetch the result as an associative array
    $rowHQ = $resultHQ->fetch_assoc();   
    $rowCountHQ = $rowHQ['count'];    
}


if ($resultManjhand->num_rows > 0) {
    // Fetch the result as an associative array
    $rowManjhand = $resultManjhand->fetch_assoc();   
    $rowCountManjhand = $rowManjhand['count'];    
}


if ($resultSehwan->num_rows > 0) {
    // Fetch the result as an associative array
    $rowSehwan = $resultSehwan->fetch_assoc();   
    $rowCountSehwan = $rowSehwan['count'];    
}

// Close the connection
$con->close();
?>


<div class="container-fluid">
    <!-- ADD EMPLOYEE RECORD BUTTON -->
    <div class="row mx-auto">
    <div class="col-xl-12 col-md-6 mb-4 mt-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="sanction.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-left" >Print Sanctioned Strength</a>  
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>    
    <div class="row mx-auto">
                        <!-- ADD EMPLOYEE RECORD BUTTON -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="addEmployee.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-left" >Add Employee Record</a>  
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- EDIT EMPLOYEE RECORD BUTTON -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="editEmployee.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-up">Edit Employee Record</a>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- GENERATE REPORT BUTTON -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="search.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-down">Generate Report</a>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PRINT EMPOYEE RECORD BUTTON -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="receiptPrint.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-right" >Print Employee record</a>  
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    <!-- TOTAL EMPLOYEES WORKING NUMBER CARD -->
                    <div class="row mx-auto text-center">                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary fw-bold text-uppercase mb-1">
                                                Total Staff Working</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCount; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <!-- TOTAL STAFF AT HQ NUMBER CARD -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success fw-bold text-uppercase mb-1">
                                                Staff At HQ </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCountHQ; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TOTAL STAFF AT TALUKA MANJHAND  NUMBER CARD -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger fw-bold text-uppercase mb-1">
                                                Staff Posted at Manjhand</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCountManjhand; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                     <!-- TOTAL TOTAL STAFF TALUKA SEHWAN NUMBER CARD -->
                     <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger fw-bold text-uppercase mb-1">
                                                Staff Posted at Sehwan </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCountSehwan; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
<!-- END ROW -->

    
</div>
</body>
</html>

