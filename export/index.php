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

$query = "SELECT B.Name_T, B.Address_T, A.image, A.ID, A.No, B.ID_T, 
          C.Name_G, C.Address_G, C.No_G, C.type_G,
          D.Income_D, D.Fee_D, D.Copy_D, D.Interest_D, D.Interest_D11, D.Interest_D12, D.Interest_D13, D.Interest_D14, D.Interest_D21, D.Interest_D22, D.Interest_D23, D.Interest_D24, D.Interest_D25, D.Pay_D, D.Other_D,
          E.Income_P AS EIncome_P, E.Fee_P AS EFee_P, E.Copy_P AS ECopy_P, E.Interest_P AS EInterest_P, E.Interest_P11 AS EInterest_P11, E.Interest_P12 AS EInterest_P12, E.Interest_P13 AS EInterest_P13, E.Interest_P14 AS EInterest_P14, E.Interest_P21 AS EInterest_P21, E.Interest_P22 AS EInterest_P22, E.Interest_P23 AS EInterest_P23, E.Interest_P24 AS EInterest_P24, E.Interest_P25 AS EInterest_P25, E.Pay_P AS EPay_P, E.Other_P AS EOther_P,
          F.Income_S, F.Fee_S, F.Copy_S, F.Interest_S, F.Interest_S11, F.Interest_S12, F.Interest_S13, F.Interest_S14, F.Interest_S21, F.Interest_S22, F.Interest_S23, F.Interest_S24, F.Interest_S25, F.Pay_S, F.Other_S,
          G.Interest, G.Interest_other, G.Other, G.Sum_pay, G.Sum_sent, G.Sum_vat, G.School, G.Social, G.Life, G.Pay, G.Pay_other, G.Name, G.Date
          FROM head AS A 
          INNER JOIN take AS B 
          ON A.ID_FR = B.ID_T
          INNER JOIN give AS C
          ON C.ID_G = '" . $id . "'
          INNER JOIN date AS D
          ON D.ID_FR = '" . $id . "'
          INNER JOIN pay AS E
          ON E.ID_FR = '" . $id . "'
          INNER JOIN sent AS F
          ON F.ID_FR = '" . $id . "'
          INNER JOIN other AS G
          ON G.ID_FR = '" . $id . "'
          WHERE A.ID_FR = '" . $id . "'";
$result = $conn->query($query);

$text = "";
$text2 = "";

while ($row = $result->fetch_assoc()) {

  $image = '&emsp;&emsp;&emsp;&emsp;<img src="' . $row["image"] . '" />';
  $mpdf->WriteHTML($image);
  $mpdf->AddPage();

  $check = ["<input type='checkbox'>", "<input type='checkbox'>", "<input type='checkbox'>", "<input type='checkbox'>", "<input type='checkbox'>", "<input type='checkbox'>", "<input type='checkbox'>"];
  switch ($row["type_G"]) {
    case "ภ.ง.ด.1ก":
      $check[0] = "<input type='checkbox' checked='checked'>";
      break;
    case "ภ.ง.ด.1ก พิเศษ":
      $check[1] = "<input type='checkbox' checked='checked'>";
      break;
    case "ภ.ง.ด.2":
      $check[2] = "<input type='checkbox' checked='checked'>";
      break;
    case "ภ.ง.ด.3":
      $check[3] = "<input type='checkbox' checked='checked'>";
      break;
    case "ภ.ง.ด.2ก":
      $check[4] = "<input type='checkbox' checked='checked'>";
      break;
    case "ภ.ง.ด.3ก":
      $check[5] = "<input type='checkbox' checked='checked'>";
      break;
    case "ภ.ง.ด.53":
      $check[6] = "<input type='checkbox' checked='checked'>";
      break;
  }

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
        <br><label><span class="text-label">ชื่อ ' . $row["Name_T"] . ' เลขประจำตัวผู้เสียอากร ' . $row["ID_T"] . ' </span></label>
        <br> <label><span class="text-label"><span>ที่อยู่ ' . $row["Address_T"] . ' </span></label>
     </div>

<div class="box1">


<label ><span class="text-label">ผู้มีหน้าที่หักภาษีณ ที่จ่าย : -  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;' . $id . '</span></label>
<br><label><span class="text-label">ชื่อ ' . $row["Name_G"] . ' </span></label>
<br> <label><span class="text-label"><span>ที่อยู่ ' . $row["Address_G"] . ' </span></label>
<label>ลำดับที่ ' . $row["No_G"] . ' ในแบบที่ &emsp;&emsp;
' . $check[0] . '
<label for="vehicle1">(1) ภ.ง.ด.1ก </label>
&emsp;
' . $check[1] . '
<label for="vehicle1">(2) ภ.ง.ด.1ก พิเศษ </label>
&emsp;
' . $check[2] . '
<label for="vehicle1">(3) ภ.ง.ด.2 </label>
&emsp;
' . $check[3] . '
<label for="vehicle1">(4) ภ.ง.ด.3 </label><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
' . $check[4] . '
<label for="vehicle1">(5) ภ.ง.ด.2ก </label>
&emsp;
' . $check[5] . '
<label for="vehicle1">(6) ภ.ง.ด.3ก </label>
&emsp;&emsp;&emsp;&nbsp;
' . $check[6] . '
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
    <td style = "text-align:center">' . $row["Income_D"] . '</td>
    <td style = "text-align:center">' . $row["EIncome_P"] . '</td>
    <td style = "text-align:center">' . $row["Income_S"] . '</td>
  </tr>

  <tr>
  <td>2. ค่าธรรมเนียม ค่านายหน้า ฯลฯ ตามมาตรา 40 (2)</td>
  <td style = "text-align:center">' . $row["Fee_D"] . '</td>
  <td style = "text-align:center">' . $row["EFee_P"] . '</td>
  <td style = "text-align:center">' . $row["Fee_S"] . '</td>
</tr>

<tr>
<td>3. ค่าแห่งลิขสิทธิ์ ฯลฯ ตามมาตรา 40 (3)</td>
<td style = "text-align:center">' . $row["Copy_D"] . '</td>
<td style = "text-align:center">' . $row["ECopy_P"] . '</td>
<td style = "text-align:center">' . $row["Copy_S"] . '</td>
</tr>

<tr>
<td>4. (ก) ดอกเบี้ย ฯลฯ ตามมาตรา 40 (ก)</td>
<td style = "text-align:center">' . $row["Interest_D"] . '</td>
<td style = "text-align:center">' . $row["EInterest_P"] . '</td>
<td style = "text-align:center">' . $row["Interest_S"] . '</td>
</tr>

<tr>
<td>&emsp; (ข) เงินปันผล เงินส่วนแบ่งกำไร ฯลฯ ตามมาตรา 40 (4) (ข)
<br>&emsp;&emsp;&emsp; (1) กรณีผู้ที่ได้รับเงินปันผลได้รับเครดิตภาษี โดยจ่ายจาก
<br>&emsp;&emsp;&emsp;&emsp;&emsp; กำไรสุทธิของกิจการที่ต้องเสียภาษีเงินได้นิติบุคคลอัตราดังนี้
<br>&emsp;&emsp;&emsp;&emsp;&emsp; (1.1) อัตราร้อยละ 30 ของกำไรสุทธิ
</td>
<td style = "text-align:center">' . $row["Interest_D11"] . '</td>
<td style = "text-align:center">' . $row["EInterest_P11"] . '</td>
<td style = "text-align:center">' . $row["Interest_S11"] . '</td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (1.2) อัตราร้อยละ 25 ของกำไรสุทธิ</td>
<td style = "text-align:center">' . $row["Interest_D12"] . '</td>
<td style = "text-align:center">' . $row["EInterest_P12"] . '</td>
<td style = "text-align:center">' . $row["Interest_S12"] . '</td>
</tr>


<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (1.3) อัตราร้อยละ 20 ของกำไรสุทธิ</td>
<td style = "text-align:center">' . $row["Interest_D13"] . '</td>
<td style = "text-align:center">' . $row["EInterest_P13"] . '</td>
<td style = "text-align:center">' . $row["Interest_S13"] . '</td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (1.4) อัตราอื่นๆ (ระบุ) ' . $row["Interest"] . ' ของกำไรสุทธิ</td>
<td style = "text-align:center">' . $row["Interest_D14"] . '</td>
<td style = "text-align:center">' . $row["EInterest_P14"] . '</td>
<td style = "text-align:center">' . $row["Interest_S14"] . '</td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp; (2) กรณีผู้ที่ได้รับเงินปันผลไม่ได้รับเครดิตภาษี เนื่องจากจ่ายจาก
<br>&emsp;&emsp;&emsp;&emsp;&emsp; (2.1) กำไรสุทธิของกิจการที่ได้รับยกเว้นภาษีเงินได้นิติบุคคล
</td>
<td style = "text-align:center">' . $row["Interest_D21"] . '</td>
<td style = "text-align:center">' . $row["EInterest_P21"] . '</td>
<td style = "text-align:center">' . $row["Interest_S21"] . '</td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (2.2) เงินปันผลหรือเงินส่วนแบงของกำไรที่ได้รับยกเว้นไม่ต้อง
<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;นำมารวมคำนวณเป็นรายได้เพื่อเสียภาษีเงินได้นิติบุคคล
</td>
<td style = "text-align:center">' . $row["Interest_D22"] . '</td>
<td style = "text-align:center">' . $row["EInterest_P22"] . '</td>
<td style = "text-align:center">' . $row["Interest_S22"] . '</td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (2.3) กำไรสุทธิส่วนที่ได้หักผลขาดทุนสุทธิยกมาไม่เกิน 5 ปี
<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ก่อนรอบระยะเวลาบัญชีปีปัจจุบัน
</td>
<td style = "text-align:center">' . $row["Interest_D23"] . '</td>
<td style = "text-align:center">' . $row["EInterest_P23"] . '</td>
<td style = "text-align:center">' . $row["Interest_S23"] . '</td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (2.4) กำไรที่รับรู้ทางบัญชีโดยวิธีส่วนได้เสีย (equity method)
<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ก่อนรอบระยะเวลาบัญชีปีปัจจุบัน
</td>
<td style = "text-align:center">' . $row["Interest_D24"] . '</td>
<td style = "text-align:center">' . $row["EInterest_P24"] . '</td>
<td style = "text-align:center">' . $row["Interest_S24"] . '</td>
</tr>

<tr>
<td>&emsp;&emsp;&emsp;&emsp;&emsp; (2.5) อื่นๆ (ระบุ) ' . $row["Interest_other"] . '
</td>
<td style = "text-align:center">' . $row["Interest_D25"] . '</td>
<td style = "text-align:center">' . $row["EInterest_P25"] . '</td>
<td style = "text-align:center">' . $row["Interest_S25"] . '</td>
</tr>

<tr>
<td>5. การจ่ายเงินได้ที่ต้องหักภาษี ณ ที่จ่าย ตามคำสั่งกรมสรรพากรที่ออกตาม
<br>&emsp; มาตรา3 เตรส เช่น รางวัล ส่วนลดหรือประโยชน์ใดๆ เนื่องจากการส่งเสริม
<br>&emsp; การขาย รางวัลในการประกวด การแข่งขัน การชิงโชค ค่าแสดงของนักแสดง
<br>&emsp; สาธารณะ ค่าจ้างทำของ ค่าโฆษณา ค่าเช่า ค่าขนส่ง ค่าบริการ ค่าเบี้ยประกัน
<br>&emsp; วินาศภัย ฯลฯ
</td>
<td style = "text-align:center">' . $row["Pay_D"] . '</td>
<td style = "text-align:center">' . $row["EPay_P"] . '</td>
<td style = "text-align:center">' . $row["Pay_S"] . '</td>
</tr>

<tr>
<td>6. อื่นๆ (ระบุ) ' . $row["Other"] . '
</td>
<td style = "text-align:center">' . $row["Other_D"] . '</td>
<td style = "text-align:center">' . $row["EOther_P"] . '</td>
<td style = "text-align:center">' . $row["Other_S"] . '</td>
</tr>

<tr>
<td style = "border: 0px;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; รวมเงินที่จ่ายและภาษีที่หักนำส่ง
</td>
<td style = "border: 0px;"></td>
<td style = "text-align:center">' . $row["Sum_pay"] . '</td>
<td style = "text-align:center">' . $row["Sum_sent"] . '</td>
</tr>

<tr>
<td style = "border: 0px;">รวมเงินภาษีที่หักนำส่ง (ตัวอักษร) ' . $row["Sum_vat"] . '
</td>
</tr>

</table>
</div>
        ';

  $check2 = ["<input type='checkbox'>", "<input type='checkbox'>", "<input type='checkbox'>", "<input type='checkbox'>"];
  $textOther = "";
  switch ($row["Pay_other"]) {
    case "หัก ณ ที่จ่าย":
      $check2[0] = "<input type='checkbox' checked='checked'>";
      break;
    case "ออกให้ตลอดไป":
      $check2[1] = "<input type='checkbox' checked='checked'>";
      break;
    case "ออกให้ครั้งเดียว":
      $check2[2] = "<input type='checkbox' checked='checked'>";
      break;
    default:
      $check2[3] = "<input type='checkbox' checked='checked'>";
      $textOther = $row["Pay_other"];
      break;
  }

  $text2 = '
        <div class="box1">
        <label><span class="text-label">เงินที่จ่ายเข้า กบข./กสจ./กองทุนสงเคราะห์ครูโรงเรียนเอกชน ' . $row["School"] . ' บาท กองทุนประกันสังคม ' . $row["Social"] . ' บาท กองทุนสำรองเลี้ยงชีพ ' . $row["Life"] . ' บาท</span></label>
        </div>
        <div class="box1">
        <label><span class="text-label">
        ผู้จ่ายเงิน
        &emsp;&emsp;&emsp;&emsp;
        ' . $check2[0] . '
        <label for="vehicle1">(1) หัก ณ ที่จ่าย </label>
        &emsp;&emsp;&emsp;&emsp;
        ' . $check2[1] . '
        <label for="vehicle1">(2) ออกให้ตลอดไป </label>
        &emsp;&emsp;&emsp;&emsp;
        ' . $check2[2] . '
        <label for="vehicle1">(3) ออกให้ครั้งเดียว </label>
        &emsp;&emsp;&emsp;&emsp;
        ' . $check2[3] . '
        <label for="vehicle1">(4) อื่นๆ ' . $textOther . ' </label>
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
        <br>ลงชื่อ ' . $row["Name"] . ' ผู้จ่ายเงิน
        <br> ' . $row["Date"] . '
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
  $mpdf->WriteHTML($text);
  $mpdf->WriteHTML($text2);
}

$querySum = "SELECT * FROM cal WHERE ID_FR = '" . $id . "'";
$resultSum = $conn->query($querySum);
$rowSum = $resultSum->fetch_assoc();
$text3 = "<h3>ผลรวมรวมเงินที่จ่ายและภาษีที่หักนำส่ง : " . number_format($rowSum["sum"]) . " บาท</h3>";

$mpdf->WriteHTML($text3);
$mpdf->Output();
$conn->close();
