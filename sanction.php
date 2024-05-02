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

// Your SQL query to get row count Superintendent
$sqlSuperintendent = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Superintendent'";

// Your SQL query to get row count Assistant Superintendent
$sqlAssistantSuperintendent = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Assistant Superintendent'";

// Your SQL query to get row count Assistant
$sqlAssistant = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Assistant'";

// Your SQL query to get row count Assistant-I&S-branch
$sqlAssistantISbranch = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Assistant-I&S-branch'";

// Your SQL query to get row count Stenographer
$sqlStenographer = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Stenographer'";

// Your SQL query to get row count Librarian
$sqlLibrarian = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Librarian'";

// Your SQL query to get row count Data Coder
$sqlDC = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Data Coder'";


// Your SQL query to get row count Hardware & Network Technician
$sqlHNT = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Hardware & Network Technician'";

// Your SQL query to get row count Data Proceessing Assistant
$sqlDPA = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Data Proceessing Assistant'";

// Your SQL query to get row count Computer Operator
$sqlCO = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Computer Operator'";


// Your SQL query to get row count Accountant
$sqlAccountant = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Accountant'";

// Your SQL query to get row count Accountant
$sqlAccountant = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Accountant'";

// Your SQL query to get row count Assistant Accountant
$sqlAssistantAccountant = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Assistant Accountant'";


// Your SQL query to get row count Nazir of District Court
$sqlNazirofDistrictCourt = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Nazir of District Court'";



// Your SQL query to get row count COC of District Court
$sqlCOCofDistrictCourt = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'COC of District Court'";



// Your SQL query to get row count COC of Senior Civil Judge / Civil Judge
$sqlCOCofSeniorCivilJudgeCivilJudge = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'COC of Senior Civil Judge / Civil Judge'";


// Your SQL query to get row count Reader District Judge / Additional District Judge
$sqlReaderDistrictJudgeAdditionalDistrictJudge = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Reader District Judge / Additional District Judge'";


// Your SQL query to get row count Reader
$sqlReader = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Reader'";


// Your SQL query to get row count Reader Senior Civil Judge / Civil Judge
$sqlReaderSeniorCivilJudgeCivilJudge = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Reader Senior Civil Judge / Civil Judge'";


// Your SQL query to get row count Assistant Record Keeper District Court
$sqlAssistantRecordKeeperDistrictCourt = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Assistant Record Keeper District Court'";


// Your SQL query to get row count Senior Clerk
$sqlSeniorClerk = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Senior Clerk'";


// Your SQL query to get row count English Clerk of Civil Court
$sqlEnglishClerkofCivilCourt = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'English Clerk of Civil Court'";


// Your SQL query to get row count Junior Clerk
$sqlJuniorClerk = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Junior Clerk'";

// Your SQL query to get row count Driver
$sqlDriver = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Driver'";

// Your SQL query to get row count CCTV Operator
$sqlCCTVOperator = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'CCTV Operator'";

// Your SQL query to get row count Bailiff
$sqlBailiff = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Bailiff'";

// Your SQL query to get row count Book Binder
$sqlBookBinder = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Book Binder'";


// Your SQL query to get row count Naib Qasid
$sqlNaibQasid = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Naib Qasid' AND `posting` != 'CJJM-CONSUMER'";


// Your SQL query to get row count Naib Qasid Consumer Court
$sqlNaibQasidConsumer = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Naib Qasid' AND `posting` = 'CJJM-CONSUMER'";


// Your SQL query to get row count Chowkidar
$sqlChowkidar = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Chowkidar'";


// Your SQL query to get row count Farash
$sqlFarash = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Farash'";


// Your SQL query to get row count Malhi
$sqlMalhi = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Malhi'";


// Your SQL query to get row count Sweeper
$sqlSweeper = "SELECT COUNT(*) as count FROM employee WHERE `designation` = 'Sweeper'";


//$result = $con->query($sql);
$resultSuperintendent = $con->query($sqlSuperintendent);
$resultAssistantSuperintendent = $con->query($sqlAssistantSuperintendent);
$resultAssistant = $con->query($sqlAssistant);

$resultAssistantISbranch = $con->query($sqlAssistantISbranch);
$resultStenographer = $con->query($sqlStenographer);
$resultLibrarian = $con->query($sqlLibrarian);

$resultDC = $con->query($sqlDC);
$resultHNT = $con->query($sqlHNT);
$resultDPA = $con->query($sqlDPA);

$resultCO = $con->query($sqlCO);
$resultAccountant = $con->query($sqlAccountant);
$resultAssistantAccountant = $con->query($sqlAssistantAccountant);


$resultNazirofDistrictCourt = $con->query($sqlNazirofDistrictCourt);
$resultCOCofDistrictCourt = $con->query($sqlCOCofDistrictCourt);
$resultCOCofSeniorCivilJudgeCivilJudge = $con->query($sqlCOCofSeniorCivilJudgeCivilJudge);


$resultReaderDistrictJudgeAdditionalDistrictJudge = $con->query($sqlReaderDistrictJudgeAdditionalDistrictJudge);

$resultReader = $con->query($sqlReader);

$resultReaderSeniorCivilJudgeCivilJudge = $con->query($sqlReaderSeniorCivilJudgeCivilJudge);


$resultAssistantRecordKeeperDistrictCourt = $con->query($sqlAssistantRecordKeeperDistrictCourt);

$resultSeniorClerk = $con->query($sqlSeniorClerk);
$resultEnglishClerkofCivilCourt = $con->query($sqlEnglishClerkofCivilCourt);


$resultJuniorClerk = $con->query($sqlJuniorClerk);
$resultDriver = $con->query($sqlDriver);


$resultCCTVOperator = $con->query($sqlCCTVOperator);
$resultBailiff = $con->query($sqlBailiff);

$resultBookBinder = $con->query($sqlBookBinder);
$resultNaibQasid = $con->query($sqlNaibQasid);

// Naib Qasid Consumer Court
$resultNaibQasidConsumer = $con->query($sqlNaibQasidConsumer);

$resultChowkidar = $con->query($sqlChowkidar);
$resultFarash = $con->query($sqlFarash);


$resultMalhi = $con->query($sqlMalhi);
$resultSweeper = $con->query($sqlSweeper);


// Initialize Variable and set value to zero
$rowCount = 0;
$rowCountSuperintendent = 0;
$rowCountAssistantSuperintendent= 0;
$rowCountAssistant= 0;
$rowCountAssistantISbranch = 0;
$rowCountStenographer= 0;
$rowCountLibrarian= 0;
$rowCountDC = 0;
$rowCountHNT= 0;
$rowCountCO= 0;
$rowCountDPA = 0;
$rowCountAccountant= 0;
$rowCountAssistantAccountant= 0;
$rowCountNazirofDistrictCourt = 0;
$rowCountCOCofDistrictCourt= 0;
$rowCountCOCofSeniorCivilJudgeCivilJudge= 0;


$rowCountReaderDistrictJudgeAdditionalDistrictJudge= 0;
$rowCountReader= 0;
$rowCountReaderSeniorCivilJudgeCivilJudge = 0;
$rowCountAssistantRecordKeeperDistrictCourt= 0;
$rowCountSeniorClerk= 0;

$rowCountEnglishClerkofCivilCourt= 0;
$rowCountJuniorClerk= 0;
$rowCountDriver = 0;
$rowCountCCTVOperator= 0;
$rowCountBailiff= 0;

$rowCountBookBinder= 0;
$rowCountNaibQasid= 0;
//NAib Qasid Consumer
$rowCourntNaibQasidConsumer;
$rowCountChowkidar = 0;
$rowCountFarash= 0;
$rowCountMalhi= 0;
$rowCountSweeper= 0;



//Naib Qasid Consumer

if ($resultNaibQasidConsumer->num_rows > 0) {
    // Fetch the result as an associative array
    $rowNaibQasidConsumer = $resultNaibQasidConsumer->fetch_assoc();   
    $rowCountNaibQasidConsumer = $rowNaibQasidConsumer['count'];
    
}



if ($resultSuperintendent->num_rows > 0) {
    // Fetch the result as an associative array
    $rowSuperintendent = $resultSuperintendent->fetch_assoc();   
    $rowCountSuperintendent = $rowSuperintendent['count']; 
        
}

if ($resultAssistantSuperintendent->num_rows > 0) {
    // Fetch the result as an associative array
    $rowAssistantSuperintendent = $resultAssistantSuperintendent->fetch_assoc();   
    $rowCountAssistantSuperintendent = $rowAssistantSuperintendent['count'];    
}

if ($resultAssistant->num_rows > 0) {
    // Fetch the result as an associative array
    $rowAssistant = $resultAssistant->fetch_assoc();   
    $rowCountAssistant = $rowAssistant['count'];    
}

if ($resultAssistantISbranch->num_rows > 0) {
    // Fetch the result as an associative array
    $rowAssistantISbranch = $resultAssistantISbranch->fetch_assoc();   
    $rowCountAssistantISbranch = $rowAssistantISbranch['count'];    
}

if ($resultStenographer->num_rows > 0) {
    // Fetch the result as an associative array
    $rowStenographer = $resultStenographer->fetch_assoc();   
    $rowCountStenographer = $rowStenographer['count'];    
}



if ($resultLibrarian->num_rows > 0) {
    // Fetch the result as an associative array
    $rowLibrarian = $resultLibrarian->fetch_assoc();   
    $rowCountLibrarian = $rowLibrarian['count'];    
}


if ($resultDC->num_rows > 0) {
    // Fetch the result as an associative array
    $rowDC = $resultDC->fetch_assoc();   
    $rowCountDC = $rowDC['count'];    
}

if ($resultHNT->num_rows > 0) {
    // Fetch the result as an associative array
    $rowHNT = $resultHNT->fetch_assoc();   
    $rowCountHNT = $rowHNT['count'];    
}

if ($resultCO->num_rows > 0) {
    // Fetch the result as an associative array
    $rowCO = $resultCO->fetch_assoc();   
    $rowCountCO = $rowCO['count'];    
}


if ($resultDPA->num_rows > 0) {
    // Fetch the result as an associative array
    $rowDPA = $resultDPA->fetch_assoc();   
    $rowCountDPA = $rowDPA['count'];    
}

if ($resultAccountant->num_rows > 0) {
    // Fetch the result as an associative array
    $rowAccountant = $resultAccountant->fetch_assoc();   
    $rowCountAccountant = $rowAccountant['count'];    
}


if ($resultAssistantAccountant->num_rows > 0) {
    // Fetch the result as an associative array
    $rowAssistantAccountant = $resultAssistantAccountant->fetch_assoc();   
    $rowCountAssistantAccountant = $rowAssistantAccountant['count'];    
}


if ($resultNazirofDistrictCourt->num_rows > 0) {
    // Fetch the result as an associative array
    $rowNazirofDistrictCourt = $resultNazirofDistrictCourt->fetch_assoc();   
    $rowCountNazirofDistrictCourt = $rowNazirofDistrictCourt['count'];    
}


if ($resultCOCofDistrictCourt->num_rows > 0) {
    // Fetch the result as an associative array
    $rowCOCofDistrictCourt = $resultCOCofDistrictCourt->fetch_assoc();   
    $rowCountCOCofDistrictCourt = $rowCOCofDistrictCourt['count'];    
}


if ($resultCOCofSeniorCivilJudgeCivilJudge->num_rows > 0) {
    // Fetch the result as an associative array
    $rowCOCofSeniorCivilJudgeCivilJudge = $resultCOCofSeniorCivilJudgeCivilJudge->fetch_assoc();   
    $rowCountCOCofSeniorCivilJudgeCivilJudge = $rowCOCofSeniorCivilJudgeCivilJudge['count'];    
}


if ($resultReaderDistrictJudgeAdditionalDistrictJudge->num_rows > 0) {
    // Fetch the result as an associative array
    $rowReaderDistrictJudgeAdditionalDistrictJudge = $resultReaderDistrictJudgeAdditionalDistrictJudge->fetch_assoc();   
    $rowCountReaderDistrictJudgeAdditionalDistrictJudge = $rowReaderDistrictJudgeAdditionalDistrictJudge['count'];    
}


if ($resultReader->num_rows > 0) {
    // Fetch the result as an associative array
    $rowReader = $resultReader->fetch_assoc();   
    $rowCountReader = $rowReader['count'];    
}


if ($resultReaderSeniorCivilJudgeCivilJudge->num_rows > 0) {
    // Fetch the result as an associative array
    $rowReaderSeniorCivilJudgeCivilJudge = $resultReaderSeniorCivilJudgeCivilJudge->fetch_assoc();   
    $rowCountReaderSeniorCivilJudgeCivilJudge = $rowReaderSeniorCivilJudgeCivilJudge['count'];    
}


if ($resultAssistantRecordKeeperDistrictCourt->num_rows > 0) {
    // Fetch the result as an associative array
    $rowAssistantRecordKeeperDistrictCourt = $resultAssistantRecordKeeperDistrictCourt->fetch_assoc();   
    $rowCountAssistantRecordKeeperDistrictCourt = $rowAssistantRecordKeeperDistrictCourt['count'];    
}


if ($resultSeniorClerk->num_rows > 0) {
    // Fetch the result as an associative array
    $rowSeniorClerk = $resultSeniorClerk->fetch_assoc();   
    $rowCountSeniorClerk = $rowSeniorClerk['count'];    
}


if ($resultEnglishClerkofCivilCourt->num_rows > 0) {
    // Fetch the result as an associative array
    $rowEnglishClerkofCivilCourt = $resultEnglishClerkofCivilCourt->fetch_assoc();   
    $rowCountEnglishClerkofCivilCourt = $rowEnglishClerkofCivilCourt['count'];    
}


if ($resultJuniorClerk->num_rows > 0) {
    // Fetch the result as an associative array
    $rowJuniorClerk = $resultJuniorClerk->fetch_assoc();   
    $rowCountJuniorClerk = $rowJuniorClerk['count'];    
}


if ($resultDriver->num_rows > 0) {
    // Fetch the result as an associative array
    $rowDriver = $resultDriver->fetch_assoc();   
    $rowCountDriver = $rowDriver['count'];    
}

if ($resultCCTVOperator->num_rows > 0) {
    // Fetch the result as an associative array
    $rowCCTVOperator = $resultCCTVOperator->fetch_assoc();   
    $rowCountCCTVOperator = $rowCCTVOperator['count'];    
}

if ($resultBailiff->num_rows > 0) {
    // Fetch the result as an associative array
    $rowBailiff = $resultBailiff->fetch_assoc();   
    $rowCountBailiff = $rowBailiff['count'];    
}

if ($resultBookBinder->num_rows > 0) {
    // Fetch the result as an associative array
    $rowBookBinder = $resultBookBinder->fetch_assoc();   
    $rowCountBookBinder = $rowBookBinder['count'];    
}

if ($resultNaibQasid->num_rows > 0) {
    // Fetch the result as an associative array
    $rowNaibQasid = $resultNaibQasid->fetch_assoc();   
    $rowCountNaibQasid = $rowNaibQasid['count'];    
}


if ($resultChowkidar->num_rows > 0) {
    // Fetch the result as an associative array
    $rowChowkidar = $resultChowkidar->fetch_assoc();   
    $rowCountChowkidar = $rowChowkidar['count'];    
}


if ($resultFarash->num_rows > 0) {
    // Fetch the result as an associative array
    $rowFarash = $resultFarash->fetch_assoc();   
    $rowCountFarash = $rowFarash['count'];    
}

if ($resultMalhi->num_rows > 0) {
    // Fetch the result as an associative array
    $rowMalhi = $resultMalhi->fetch_assoc();   
    $rowCountMalhi = $rowMalhi['count'];    
}

if ($resultSweeper->num_rows > 0) {
    // Fetch the result as an associative array
    $rowSweeper = $resultSweeper->fetch_assoc();   
    $rowCountSweeper = $rowSweeper['count'];    
}

// Close the connection
$con->close();
?>




<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <fieldset>                
                <form action="#" class="form">
                    <h3>STATEMENT SHOWING THE SANCTIONED, WORKING AND VACANT STRENGHT OF STAFF DISTIRCT & SUB-ORDINATE COURTS DISTRICT JAMSHORO</h3>
                    <h4>AS STOOD ON 01-01-2024</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Name of Post</th>
                                <th scope="col">Scale</th>
                                <th scope="col">Sacntioned Strenght</th>
                                <th scope="col">Working Strenght</th>
                                <th scope="col">Vacant</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Superintendent</td>
                                <td >17</td>
                                <td >1</td>
                                <td ><?php echo $rowCountSuperintendent; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Assistant Superintendent</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountAssistantSuperintendent; ?></td>
                                <td >1</td>
                            </tr>                            
                            <tr>
                                <th scope="row">3</th>
                                <td>Assistant-I&S-branch</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountAssistantISbranch; ?></td>
                                <td >1</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Stenographer</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountStenographer; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Librarian</td>
                                <td >14</td>
                                <td >1</td>
                                <td ><?php echo $rowCountLibrarian; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Data Coder</td>
                                <td >14</td>
                                <td >1</td>
                                <td ><?php echo $rowCountDC; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>hardware & Network Technician</td>
                                <td >14</td>
                                <td >1</td>
                                <td ><?php echo $rowCountHNT; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Computer Operator</td>
                                <td >16</td>
                                <td >2</td>
                                <td ><?php echo $rowCountCO; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Accountant</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountAccountant; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Assistant Accountant</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountAssistantAccountant; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Nazir of District Court</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountNazirofDistrictCourt; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>COC of District Court</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountCOCofDistrictCourt; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>COC of Senior Civil Judge / Civil Judge</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountCOCofSeniorCivilJudgeCivilJudge; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Reader District Judge / Additional District Judge</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountReaderDistrictJudgeAdditionalDistrictJudge; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Reader Senior Civil Judge / Civil Judge</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountReaderSeniorCivilJudgeCivilJudge; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Assistant Record Keeper District Court</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountAssistantRecordKeeperDistrictCourt; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">17</th>
                                <td>Senior Clerk</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountSeniorClerk; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">18</th>
                                <td>English Clerk of Civil Court</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountEnglishClerkofCivilCourt; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">19</th>
                                <td>Junior Clerk</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountJuniorClerk; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">20</th>
                                <td>Driver</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountDriver; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">21</th>
                                <td>CCTV Operator</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountCCTVOperator; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">22</th>
                                <td>Bailiff</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountBailiff; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">23</th>
                                <td>Book Binder</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountBookBinder; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">24</th>
                                <td>Naib Qasid</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountNaibQasid; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">25</th>
                                <td>Chowkidar</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountChowkidar; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">26</th>
                                <td>Farash</td>
                                <td >16</td>
                                <td >1</td>
                                <td ><?php echo $rowCountFarash; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">27</th>
                                <td>Malhi</td>
                                <td >3</td>
                                <td >1</td>
                                <td ><?php echo $rowCountMalhi; ?></td>
                                <td >0</td>
                            </tr>
                            <tr>
                                <th scope="row">28</th>
                                <td>Sweeper</td>
                                <td >3</td>
                                <td >1</td>
                                <td ><?php echo $rowCountSweeper; ?></td>
                                <td >0</td>
                            </tr>

                            <tr>
                                <th scope="row">29</th>
                                <td>Naib Qasid Consumer</td>
                                <td >3</td>
                                <td >1</td>
                                <td ><?php echo $rowCountNaibQasidConsumer; ?></td>
                                <td >0</td>
                            </tr>





                        </tbody>
                    </table>
                    

                </form>
            </fieldset>
        </div>
    </div>
</div>    
</div>
</body>
</html>

