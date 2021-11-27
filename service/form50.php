<?php
session_start();
require("../http/db.php");
//input 
$ID = $_POST["ID"];
$No = $_POST["No"];
$ID_T = $_POST["ID_T"];
$Name_T = $_POST["Name_T"];
$Address_T = $_POST["Address_T"];
$ID_G = $_POST["ID_G"];
$Name_G = $_POST["Name_G"];
$Address_G = $_POST["Address_G"];
$No_G = $_POST["No_G"];
$type_G = $_POST["type_G"];
$Income_D = $_POST["Income_D"];
$Income_P = $_POST["Income_P"];
$Income_S = $_POST["Income_S"];
$Fee_D = $_POST["Fee_D"];
$Fee_P = $_POST["Fee_P"];
$Fee_S = $_POST["Fee_S"];
$Copy_D = $_POST["Copy_D"];
$Copy_P = $_POST["Copy_P"];
$Copy_S = $_POST["Copy_S"];
$Interest_D = $_POST["Interest_D"];
$Interest_P = $_POST["Interest_P"];
$Interest_S = $_POST["Interest_S"];
$Interest_D11 = $_POST["Interest_D11"];
$Interest_P11 = $_POST["Interest_P11"];
$Interest_S11 = $_POST["Interest_S11"];
$Interest_D12 = $_POST["Interest_D12"];
$Interest_P12 = $_POST["Interest_P12"];
$Interest_S12 = $_POST["Interest_S12"];
$Interest_D13 = $_POST["Interest_D13"];
$Interest_P13 = $_POST["Interest_P13"];
$Interest_S13 = $_POST["Interest_S13"];
$Interest = $_POST["Interest"];
$Interest_D14 = $_POST["Interest_D14"];
$Interest_P14 = $_POST["Interest_P14"];
$Interest_S14 = $_POST["Interest_S14"];
$Interest_D21 = $_POST["Interest_D21"];
$Interest_P21 = $_POST["Interest_P21"];
$Interest_S21 = $_POST["Interest_S21"];
$Interest_D22 = $_POST["Interest_D22"];
$Interest_P22 = $_POST["Interest_P22"];
$Interest_S22 = $_POST["Interest_S22"];
$Interest_D23 = $_POST["Interest_D23"];
$Interest_P23 = $_POST["Interest_P23"];
$Interest_S23 = $_POST["Interest_D23"];
$Interest_D24 = $_POST["Interest_D24"];
$Interest_P24 = $_POST["Interest_P24"];
$Interest_S24 = $_POST["Interest_S24"];
$Interest_other = $_POST["Interest_other"];
$Interest_D25 = $_POST["Interest_D25"];
$Interest_P25 = $_POST["Interest_P25"];
$Interest_S25 = $_POST["Interest_S25"];
$Pay_D = $_POST["Pay_D"];
$Pay_P = $_POST["Pay_P"];
$Pay_S = $_POST["Pay_S"];
$Other = $_POST["Other"];
$Other_D = $_POST["Other_D"];
$Other_P = $_POST["Other_P"];
$Other_S = $_POST["Other_S"];
$Sum_pay = $_POST["Sum_pay"];
$Sum_sent = $_POST["Sum_sent"];
$Sum_vat = $_POST["Sum_vat"];
$School = $_POST["School"];
$Social = $_POST["Social"];
$Life = $_POST["Life"];
$Pay = $_POST["Pay"];
$Pay = $_POST["Pay"];
$Pay_other = $_POST["Pay_other"];
$Name = $_POST["Name"];
$Date = $_POST["Date"];

$queryTake = "INSERT INTO take(ID_T, Name_T, Address_T) 
            VALUES ('" . $ID_T . "','" . $Name_T . "','" . $Address_T . "')";
$queryGive = "INSERT INTO give(ID_G, Name_G, Address_G, No_G, type_G) 
            VALUES ('" . $ID_G . "','" . $Name_G . "','" . $Address_G . "','" . $No_G . "','" . $type_G . "')";
$queryDate = "INSERT INTO date
            (Income_D, 
            Fee_D, 
            Copy_D, 
            Interest_D, 
            Interest_D11, 
            Interest_D12, 
            Interest_D13, 
            Interest_D14, 
            Interest_D21, 
            Interest_D22, 
            Interest_D23, 
            Interest_D24, 
            Interest_D25, 
            Pay_D, 
            Other_D) 
            VALUES ('" . $Income_D . "','" . $Fee_D . "','" . $Copy_D . "','" . $Interest_D . "','" . $Interest_D11 . "','" . $Interest_D12 . "','" . $Interest_D13 . "',
            '" . $Interest_D14 . "','" . $Interest_D21 . "','" . $Interest_D22 . "','" . $Interest_D23 . "','" . $Interest_D24 . "','" . $Interest_D25 . "','" . $Pay_D . "','" . $Other_D . "')";
$queryPay = "INSERT INTO pay
            (Income_P, 
            Fee_P, 
            Copy_P, 
            Interest_P, 
            Interest_P11, 
            Interest_P12, 
            Interest_P13, 
            Interest_P14, 
            Interest_P21, 
            Interest_P22, 
            Interest_P23, 
            Interest_P24, 
            Interest_P25, 
            Pay_P, 
            Other_P) 
            VALUES ('" . $Income_P . "','" . $Fee_P . "','" . $Copy_P . "','" . $Interest_P . "','" . $Interest_P11 . "','" . $Interest_P12 . "','" . $Interest_P13 . "',
            '" . $Interest_P14 . "','" . $Interest_P21 . "','" . $Interest_P22 . "','" . $Interest_P23 . "','" . $Interest_P24 . "','" . $Interest_P25 . "','" . $Pay_P . "','" . $Other_P . "')";
$querySent = "INSERT INTO sent
            (Income_S, 
            Fee_S, 
            Copy_S, 
            Interest_S, 
            Interest_S11, 
            Interest_S12, 
            Interest_S13, 
            Interest_S14, 
            Interest_S21, 
            Interest_S22, 
            Interest_S23, 
            Interest_S24, 
            Interest_S25, 
            Pay_S, 
            Other_S) 
            VALUES ('" . $Income_S . "','" . $Fee_S . "','" . $Copy_S . "','" . $Interest_S . "','" . $Interest_S11 . "','" . $Interest_S12 . "','" . $Interest_S13 . "',
            '" . $Interest_S14 . "','" . $Interest_S21 . "','" . $Interest_S22 . "','" . $Interest_S23 . "','" . $Interest_S24 . "','" . $Interest_S25 . "','" . $Pay_S . "','" . $Other_S . "')";
$queryOther = "INSERT INTO other
            (
            ID_FR,
            Interest,
            Interest_other, 
            Other, 
            Sum_pay, 
            Sum_sent, 
            Sum_vat, 
            School, 
            Social, 
            Life, 
            Pay, 
            Pay_other, 
            Name, 
            Date) 
            VALUES ('" . $ID_G . "', '" . $Interest . "','" . $Interest_other . "','" . $Other . "','" . $Sum_pay . "','" . $Sum_sent . "','" . $Sum_vat . "','" . $School . "',
            '" . $Social . "','" . $Life . "','" . $Pay . "','" . $Pay_other . "','" . $Name . "','" . $Date . "')";
try {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $queryUpload = "";

    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $queryUpload = "INSERT INTO head(ID_FR, ID, No, image) 
                            VALUES ('" . $ID_G . "', '" . $ID . "','" . $No . "', '" . $target_file . "')";
            if (
                $conn->query($queryUpload) === TRUE
            ) {
                // 
            } else {
                echo "Error: " . $queryUpload . "<br>" . $conn->error;
                exit;
            }
        }
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
} catch (Throwable $th) {
    //throw $th;
}

$queryGetSum = "SELECT Sum_sent FROM other WHERE ID_FR = '" . $ID_G . "'";
$resultGetSum = $conn->query($queryGetSum);
$sum = 0;
if ($resultGetSum->num_rows > 0) {
    $rowGetSum = $resultGetSum->fetch_assoc();
    $sum = number_format($Sum_sent) +  number_format($rowGetSum["Sum_sent"]);
} else {
    $sum = $Sum_sent;
}

$queryGetCal = "SELECT sum FROM cal WHERE ID_FR = '" . $ID_G . "'";
$resultGetCal = $conn->query($queryGetCal);
$queryCal = "";
if ($resultGetCal->num_rows > 0) {
    $queryCal = "UPDATE cal SET sum='" . $sum . "' WHERE ID_FR = '" . $ID_G . "'";
} else {
    $queryCal = "INSERT INTO cal(ID_FR, sum) VALUES ('" . $ID_G . "','" . $sum . "')";
}

if (
    $conn->query($queryTake) === TRUE &&
    $conn->query($queryGive) === TRUE &&
    $conn->query($queryDate) === TRUE &&
    $conn->query($queryPay) === TRUE &&
    $conn->query($querySent) === TRUE &&
    $conn->query($queryOther) === TRUE &&
    $conn->query($queryCal) === TRUE
) {
    $_SESSION["save"] = 1;
    $_SESSION["idCard"] = $ID_G;
    header("location: ../");
} else {
    echo "Error: " . $queryTake . "<br>" . $conn->error;
    echo "Error: " . $queryGive . "<br>" . $conn->error;
    echo "Error: " . $queryDate . "<br>" . $conn->error;
    echo "Error: " . $queryPay . "<br>" . $conn->error;
    echo "Error: " . $querySent . "<br>" . $conn->error;
    echo "Error: " . $queryOther . "<br>" . $conn->error;
    echo "Error: " . $queryCal . "<br>" . $conn->error;
    exit;
}
