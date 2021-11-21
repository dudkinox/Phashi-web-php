<?php
// Get data
$page = isset($_GET["page"]) ? $_GET["page"] : '';
// data Topic

require_once __DIR__ . '/../lib/pdf/vendor/autoload.php';
// require('../Database/connection.php');

$mpdf = new \Mpdf\Mpdf();

$style = '
<style>
    .container{
        font-family: "Garuda";
    }
    .container .wrapper{
        font-size: 12pt;
        text-align: center;
    }
    h3{
    text-align: center;
    font-family: "Garuda";
    }
    h4{
    font-family: "Garuda";
    }
    p{
    font-family: "Garuda";
    }
    /* วันที่ */
    .date{
    position: relative;
    left: 60%;
    }
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        font-family: "Garuda";
    }
    
    #customers td, #customers th {
        border: 1px solid #000;
        padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        color: #000;
    }

    td{
        text-align: center;
    }
</style>';
$mpdf->WriteHTML($style);

$text = '
<div class = "container">
    <div class="wrapper">
        <p>ทดสอบ</p>
    </div>
</div>
        ';
$mpdf->WriteHTML($text);

$mpdf->Output();
$conn->close();
