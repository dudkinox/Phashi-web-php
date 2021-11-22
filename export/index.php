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
      
        border:1px solid black;
 
  padding: 10px;
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
    font-size: 9pt;
    } 
    label{
      font-family: "Garuda";
      font-size: 9pt;
      }
    tr, td{
      font-family: "Garuda";
      font-size: 9pt;
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

  
   
    .box1{
      border:1px solid black;
      border-radius: 10px;
      padding: 8px;
    }
 
  
</style>';
$mpdf->WriteHTML($style);

$text = '
<div class = "container">
  

<h3>หนังสือรับรองหักภาษี ณ ที่จ่าย</h3>

<div class="box1">
<table >
  <tr>
    <td>ผู้มีหน้าที่หักภาษีณ ที่จ่าย : -</td>
    <td>เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*</td>
    <td>....................................................</td>
  </tr>
  <tr>
    <td>ชื่อ.....................................................................................</td>
    <td>Tobias</td>
  </tr>
  <tr>
    <td>16</td>
    <td>14</td>
    <td>10</td>
  </tr>
</table>
</div>
<div class="box1">
<div class="row">

  <div class="column">
  <p>ผู้มีหน้าที่หักภาษีณ ที่จ่าย : เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)* ........................................................</p>
  </div>
  <div class="column">
  <p>เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*</p>
  </div>
  <div class="column">
  <p>........................................................</p>
  </div>

  
<div class="column">
<p>ผู้มีหน้าที่หักภาษีณ ที่จ่าย : -</p>
</div>

</div>
</div>

  


</div>
        ';
$mpdf->WriteHTML($text);

$mpdf->Output();
$conn->close();
