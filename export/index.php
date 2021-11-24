<?php
// Get data
$id = isset($_GET["id"]) ? $_GET["id"] : '';
// data Topic

require_once __DIR__ . '/../lib/pdf/vendor/autoload.php';
require('../http/db.php');

$mpdf = new \Mpdf\Mpdf();

$style = '
<style>
    .container{
        font-family: "Garuda";
        border:1px solid black;
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
      }
    tr, td, th{
      font-family: "Garuda";
      font-size: 8pt;
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
      padding: 5px;
    }
   td{
      border:1px solid black;
    }
    .th-1{
      width: 55%;
    }
    th{
      border:1px solid black;
      padding: 5px;
    }
    .text-label{
      font-size: 8pt;
      font-family: "Garuda";
    }
 
.header-label{
  font-size: 9pt;
  font-family: "Garuda";
}
    .column1 {
      float: left;
      border:1px solid black;
      border-radius: 10px;
      width: 41%;
      padding: 5px;
    
    }
    .column2 {
      float: left;
      border:1px solid black;
      border-radius: 10px;
      width: 55%;
      padding: 5px;
      text-align: center;
    }
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
</style>';
$mpdf->WriteHTML($style);

$query = "SELECT * FROM head WHERE ID_FR = '" . $id . "'";
$result = $conn->query($query);
$row = $result->fetch_assoc();

$queryImage = "SELECT * FROM image WHERE No = '" . $row["No"] . "'";
$resultImage = $conn->query($queryImage);
$rowImage = $resultImage->fetch_assoc();

$image = '&emsp;&emsp;&emsp;&emsp;<img src="' . $rowImage["image"] . '" />';
$mpdf->WriteHTML($image);
$mpdf->AddPage();

$text = '
<label>
  <span class="text-label">ฉบับที่ 1 (สำหรับผู้ถูกหักภาษี ณ ที่จ่าย ใช้แนบพร้อมกับแบบแสดงรายการภาษี)
    <br>ฉบับที่ 2 (สำหรับผู้ถูกหักภาษี ณ ที่จ่าย เก็บไว้เป็นหลักฐาน)
  </span>
</label>

<div class = "container">

    <label><span class="header-label">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;หนังสือรับรองหักภาษี ณ ที่จ่าย &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;เล่มที่ ' . $row["ID"] . '</span></label><br/>
    <label><span  class="header-label">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;ตามมาตรา 50 ทวิแหงประมวลรัษฎากร &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;เลขที่ ' . $row["No"] . '</span></label>

    <div class="box1">
    
        <label ><span class="text-label">ผู้มีหน้าที่หักภาษีณ ที่จ่าย : -  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;' . $id . '</span></label>
        <br><label><span class="text-label">ชื่อ.......................................................................................................  เลขประจำตัวผู้เสียอากร................................................................................</span></label>
        <br> <label><span class="text-label"><span>ที่อยู่........................................................................................................................................................................................................................</span></label>
     </div>

<div class="box1">


<label ><span class="text-label">ผู้มีหน้าที่หักภาษีณ ที่จ่าย : -  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;' . $id . '</span></label>
<br><label><span class="text-label">ชื่อ.......................................................................................................  เลขประจำตัวผู้เสียอากร................................................................................</span></label>
<br> <label><span class="text-label"><span>ที่อยู่........................................................................................................................................................................................................................</span></label>
<label>ลำดับที่....................ในแบบที่ &emsp;&emsp;
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1">(1) ภ.ง.ด.1ก </label>
&emsp;
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1">(2) ภ.ง.ด.1ก พิเศษ </label>
&emsp;
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1">(3) ภ.ง.ด.2 </label>
&emsp;
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1">(4) ภ.ง.ด.3 </label><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1">(5) ภ.ง.ด.2ก </label>
&emsp;
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1">(6) ภ.ง.ด.3ก </label>
&emsp;&emsp;&emsp;&nbsp;
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1">(7) ภ.ง.ด.53 </label>
</label>
</div>

<div class="box1">
<table style="width:100%">
  <tr>
    <th class="th-1">ประเภทเงินได้พึงประเมินที่จ่าย</th>
    <th>วันเดือนหรือปีภาษี ที่จ่าย</th>
    <th>จำนวนเงินที่จ่าย</th>
    <th>ภาษีที่หักและนำส่งไว้</th>
  </tr>
  
  <tr>
    <td>1. เงินเดือน ค่าจ้าง เบี้ยเลี้ยง โบนัส ฯลฯ ตามมาตรา 40 (1)</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>

  <tr>
  <td>2. ค่าธรรมเนียม ค่านายหน้า ฯลฯ ตามมาตรา 40 (2)</td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
<td>3. ค่าแห่งลิขสิทธิ์ ฯลฯ ตามมาตรา 40 (3)</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>4. (ก) ดอกเบี้ย ฯลฯ ตามมาตรา 40 (ก)</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>&emsp; (ข) เงินปันผล เงินส่วนแบ่งกำไร ฯลฯ ตามมาตรา 40 (4) (ข)
<br>&emsp;&emsp;&emsp; (1) กรณีผู้ที่ได้รับเงินปันผลได้รับเครดิตภาษี โดยจ่ายจาก
<br>&emsp;&emsp;&emsp;&emsp;&emsp; กำไรสุทธิของกิจการที่ต้องเสียภาษีเงินได้นิติบุคคลอัตราดังนี้
<br>&emsp;&emsp;&emsp;&emsp;&emsp; (1.1) อัตราร้อยละ 30 ของกำไรสุทธิ
</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (1.2) อัตราร้อยละ 25 ของกำไรสุทธิ</td>
<td></td>
<td></td>
<td></td>
</tr>


<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (1.3) อัตราร้อยละ 20 ของกำไรสุทธิ</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (1.4) อัตราอื่นๆ (ระบุ)........................ของกำไรสุทธิ</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp; (2) กรณีผู้ที่ได้รับเงินปันผลไม่ได้รับเครดิตภาษี เนื่องจากจ่ายจาก
<br>&emsp;&emsp;&emsp;&emsp;&emsp; (2.1) กำไรสุทธิของกิจการที่ได้รับยกเว้นภาษีเงินได้นิติบุคคล
</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (2.2) เงินปันผลหรือเงินส่วนแบงของกำไรที่ได้รับยกเว้นไม่ต้อง
<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;นำมารวมคำนวณเป็นรายได้เพื่อเสียภาษีเงินได้นิติบุคคล
</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (2.3) กำไรสุทธิส่วนที่ได้หักผลขาดทุนสุทธิยกมาไม่เกิน 5 ปี
<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ก่อนรอบระยะเวลาบัญชีปีปัจจุบัน
</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (2.4) กำไรที่รับรู้ทางบัญชีโดยวิธีส่วนได้เสีย (equity method)
<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ก่อนรอบระยะเวลาบัญชีปีปัจจุบัน
</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (2.5) อื่นๆ (ระบุ)...............................................
</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>5. การจ่ายเงินได้ที่ต้องหักภาษี ณ ที่จ่าย ตามคำสั่งกรมสรรพากรที่ออกตาม
<br>&emsp; มาตรา3 เตรส เช่น รางวัล ส่วนลดหรือประโยชน์ใดๆ เนื่องจากการส่งเสริม
<br>&emsp; การขาย รางวัลในการประกวด การแข่งขัน การชิงโชค ค่าแสดงของนักแสดง
<br>&emsp; สาธารณะ ค่าจ้างทำของ ค่าโฆษณา ค่าเช่า ค่าขนส่ง ค่าบริการ ค่าเบี้ยประกัน
<br>&emsp; วินาศภัย ฯลฯ
</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>6. อื่นๆ (ระบุ)...............................................
</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td style = "border: 0px;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; รวมเงินที่จ่ายและภาษีที่หักนำส่ง
</td>
<td style = "border: 0px;"></td>
<td></td>
<td></td>
</tr>

<tr>
<td style = "border: 0px;">รวมเงินภาษีที่หักนำส่ง (ตัวอักษร)..................
</td>
</tr>




</table>
</div>



        ';
$text2 = '
        <div class="box1">
        <label><span class="text-label">เงินที่จ่ายเข้า กบข./กสจ./กองทุนสงเคราะห์ครูโรงเรียนเอกชน................บาท กองทุนประกันสังคม................บาท กองทุนสำรองเลี้ยงชีพ................บาท</span></label>
        </div>
        <div class="box1">
        <label><span class="text-label">
        ผู้จ่ายเงิน
        &emsp;&emsp;&emsp;&emsp;
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1">(1) ภ.ง.ด.1ก </label>
        &emsp;&emsp;&emsp;&emsp;
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1">(1) ภ.ง.ด.1ก </label>
        &emsp;&emsp;&emsp;&emsp;
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1">(1) ภ.ง.ด.1ก </label>
        &emsp;&emsp;&emsp;&emsp;
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1">(1) ภ.ง.ด.1ก </label>
        </span>
        </label>
        </div>
      


      
        <div class="row">
        <div class="column1">
        
        <label><span class="text-label">คำเตือน &emsp;&emsp; ผู้มีหน้าที่ออกหนังสือรับรองการหักภาษี ณ ที่จ่าย
        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; ฝ่าฝืนไม่ปฎิบัติตามมาตรา 50 ทวิ แห่งประมวล
        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; รัษฎากร ต้องรับดทษทางอาญาตามมาตรา 35
        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; แห่งประมวลรัษฎากร
        </span></label>
        </div>
        
        <div class="column2">
        <label><span class="text-label">ขอรับรองว่าข้อความและตัวเลขดังกล่าวข้างต้นถูกต้องตรงกับความจริงทุกประการ
        <br>ลงชื่อ............................................ผู้จ่ายเงิน
        <br>..................../..................../....................
        <br>(วัน เดือน ปี ที่ออกหนังสือรับรองฯ)
        </span></label>
        </div>
      </div>

        
      <label><span class="text-label">หมายเหตุ เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)* หมายถึง &emsp;&emsp; 1.กรณีบุคคลธรรมดาไทย ให้ใช้เลขประจำตัวประชาชนของกรมการปกครอง
      <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2. กรณีนิติบุคคล ให้ใช้เลขทะเบียนนิติบุคคลของกรมพัฒนาธุรกิจการค้า
      <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;3. กรณีอื่นๆ นอกเหนือจาก 1. และ 2. ให้ใช้เลข ประจำตัวผู้เสียภาษีอากร (13 หลัก) 
      <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ของกรรมสรรพากร
      </span></label>


        </div>';

$querySum = "SELECT * FROM cal WHERE ID_FR = '" . $id . "'";
$resultSum = $conn->query($querySum);
$rowSum = $resultSum->fetch_assoc();
$text3 = "<h3>ผลรวมรวมเงินที่จ่ายและภาษีที่หักนำส่ง : " . number_format($rowSum["sum"]) . " บาท</h3>";

$mpdf->WriteHTML($text);
$mpdf->WriteHTML($text2);
$mpdf->WriteHTML($text3);
$mpdf->Output();
$conn->close();
