<script>
  function autoTab(obj) {
    var pattern = new String("_-____-_____-_-__"); // กำหนดรูปแบบในนี้
    var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
    var returnText = new String("");
    var obj_l = obj.value.length;
    var obj_l2 = obj_l - 1;
    for (i = 0; i < pattern.length; i++) {
      if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
        returnText += obj.value + pattern_ex;
        obj.value = returnText;
      }
    }
    if (obj_l >= pattern.length) {
      obj.value = obj.value.substr(0, pattern.length);
    }
  }
</script>


<div class="container border border-dark rounded-3 py-3">
  <form action="service/form50.php" method="POST" enctype="multipart/form-data">
    <div class="row py-3 justify-content-between">
      <div class="col-md-2">
        <label class=""></label>
      </div>
      <div class="col-md-8 text-center">
        <label class="h5">หนังสือรองรับการหักภาษี ณ ที่จ่าย</label>
      </div>
      <div class="col-md-2">
        <input name="ID" id="ID" class="form-control" placeholder="เล่มที่">
      </div>
    </div>
    <div class=" row py-3 justify-content-between">
      <div class="col-md-2 ">
        <label class=""></label>
      </div>
      <div class="col-md-8 text-center">
        <label class="h6">มาตรา 50 ทวิ แห่งประมวลรัษฎากร</label>
      </div>
      <div class="col-md-2 col-sx-2">
        <input name="No" id="No" class="form-control" placeholder="เลขที่">
      </div>
    </div>

    <div class="container justify-content-between border border-dark rounded-3 py-3">
      <div class=" row">
        <div class="col-md-5">
          <label class="">ผู้มีหน้าที่หักภาษี ณ ที่จ่าย : -</label>
        </div>
        <div class="col-md-3">
          <label class="col-form-label">เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*</label>
        </div>
        <div class="col-md-4">
          <input name="ID_T" id="ID_T" required class="form-control" type="text" tabindex="1" placeholder="x-xxxxx-xxxxx-xx-x" name="reg_id_card" id="username" value="" class="inputbox autowidth" onkeyup="autoTab(this)" minlength="13" maxlength="20" />
        </div>
      </div>
      <div class="row pt-3">
        <div class="col-md-6 ">
          <label class="form-label">ชื่อ</label>
          <input name="Name_T" id="Name_T" class="form-control" placeholder="(ให้ระบุว่าเป็น บุคคล นิติบุคคล บริษัท สมาคม หรือคณะบุคคล)" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">เลขประจำตัวผู้เสียภาษีอากร</label>
          <input class="form-control">
        </div>
      </div>
      <div class="mb-3 row pt-3">
        <label for="inputPassword" class="col-md-1 col-form-label">ที่อยู่</label>
        <div class="col-md-11">
          <input name="Address_T" id="Address_T" class="form-control" placeholder="(ให้ระบุชื่ออาคาร/หมู่บ้าน ห้องเลขที่ชั้นที่ เลขที่ ตรอก/ซอย หมู่ที่ถนน ตำบล/แขวง อำเภอ/เขต จังหวัด)" required>
        </div>
      </div>
    </div>
    <div class="container border border-dark rounded-3 py-3">
      <div class=" row">
        <div class="col-md-5">
          <label class="">ผู้ถูกหักภาษี ณ ที่จ่าย : -</label>
        </div>
        <div class="col-md-3">
          <label class="col-form-label " value="">เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*</label>
        </div>
        <div class="col-md-4">
          <input name="ID_G" id="ID_G" required class="form-control" type="text" tabindex="1" placeholder="x-xxxxx-xxxxx-xx-x" name="reg_id_card" id="username" value="" onkeyup="autoTab(this)" minlength="13" maxlength="20" />
        </div>
      </div>
      <div class="row pt-3">
        <div class="col-md-6 ">
          <label class="form-label">ชื่อ</label>
          <input name="Name_G" id="Name_G" required class="form-control" placeholder="(ให้ระบุว่าเป็น บุคคล นิติบุคคล บริษัท สมาคม หรือคณะบุคคล)" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">เลขประจำตัวผู้เสียภาษีอากร</label>
          <input class="form-control">
        </div>
      </div>
      <div class="row pt-3">
        <label for="inputPassword" class="col-md-1 col-form-label">ที่อยู่</label>
        <div class="col-md-11">
          <input name="Address_G" id="Address_G" required class="form-control" placeholder="(ให้ระบุชื่ออาคาร/หมู่บ้าน ห้องเลขที่ชั้นที่ เลขที่ ตรอก/ซอย หมู่ที่ถนน ตำบล/แขวง อำเภอ/เขต จังหวัด)" required>
        </div>
      </div>
      <div class="row pt-3">
        <label for="inputPassword" class="col-md-1 col-form-label">ลำดับที่อยู่</label>
        <div class="col-md-2">
          <input name="No_G" id="No_G" class="form-control">
        </div>
        <label for="inputPassword" class="col-md-1 col-form-label">ในแบบ</label>
        <div class="col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type_G" id="1" value="ภ.ง.ด.1ก">
            <label class="form-check-label" for="1">
              (1) ภ.ง.ด.1ก
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type_G" id="2" value="ภ.ง.ด.1ก พิเศษ">
            <label class="form-check-label" for="2">
              (2) ภ.ง.ด.1ก พิเศษ
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type_G" id="3" value="ภ.ง.ด.2">
            <label class="form-check-label" for="3">
              (3) ภ.ง.ด.2
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type_G" id="4" value="ภ.ง.ด.3">
            <label class="form-check-label" for="4">
              (4) ภ.ง.ด.3
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <label for="inputPassword" class="col-md-12 col-form-label text-center">(ให้สามารถอ้างอิงหรือสอบยันกันได้ระหว่างลำดับที่ตาม หนังสือรับรองฯ กับแบบยื่นรายการภาษีหักที่จ่าย)</label>
        </div>
        <div class="col-md-2">
          <div class="form-check ">
            <input class="form-check-input" type="radio" name="type_G" id="5" value="ภ.ง.ด.2ก">
            <label class="form-check-label" for="5">
              (5) ภ.ง.ด.2ก
            </label>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type_G" id="6" value="ภ.ง.ด.3ก">
            <label class="form-check-label" for="6">
              (6) ภ.ง.ด.3ก
            </label>
          </div>
        </div>
        <div class="col-md-2 ">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type_G" id="7" value="ภ.ง.ด.53">
            <label class="form-check-label" for="7">
              (7) ภ.ง.ด.53
            </label>
          </div>
        </div>
      </div>
    </div>

    <table class="table table-bordered border-back">
      <thead>
        <tr>
          <div class="row">
            <th class="text-center col-md-6">
              ประเภทเงินได้พึงประเมินที่จ่าย
            </th>
            <th class="text-center col-md-2">
              วัน/เดือน หรือปีภาษี ที่จ่าย
            </th>
            <th class="text-center col-md-2">
              จำนวนเงินที่จ่าย
            </th>
            <th class="text-center col-md-2">
              ภาษีที่หักและนำส่งไว้
            </th>
          </div>
        </tr>
      </thead>
      <?php include 'views/Formtabel.php'; ?>
    </table>

    <div class="container justify-content-between border border-dark rounded-3 py-3">
      <div class="row ">
        <div class="col-md-4 ">
          <label class="form-label">เงินที่จ่ายเข้า กบข./กสข./กองทุนสงเคราะห์ครูโรงเรียนเอกชน</label>
          <input name="School" id="School" class="form-control" placeholder="........................บาท">
        </div>
        <div class="col-md-4">
          <label class="form-label">กองทุนประกันสังคม</label>
          <input name="Social" id="Social" class="form-control" placeholder="........................บาท">
        </div>
        <div class="col-md-4">
          <label class="form-label">กองทุนสำรองเลี้ยงชีพ</label>
          <input name="Life" id="Life" class="form-control" placeholder="........................บาท">
        </div>
      </div>
    </div>

    <div class="container border border-dark rounded-3 py-3">
      <div class="row ">
        <label class="col-md-1 pt-2">ผู้จ่ายเงิน</label>
        <div class="col-md-2 pt-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="Pay" id="footer1" value="หัก ณ ที่จ่าย">
            <label class="form-check-label" for="footer1">
              (1) หัก ณ ที่จ่าย
            </label>
          </div>
        </div>
        <div class="col-md-2 pt-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="Pay" id="footer2" value="ออกให้ตลอดไป">
            <label class="form-check-label" for="footer2">
              (2) ออกให้ตลอดไป
            </label>
          </div>
        </div>
        <div class="col-md-2 pt-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="Pay" id="footer3" value="ออกให้ครั้งเดียว">
            <label class="form-check-label" for="footer3">
              (3) ออกให้ครั้งเดียว
            </label>
          </div>
        </div>
        <div class="col-md-2 pt-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="Pay" id="footer4" value="อื่นๆ">
            <label class="form-check-label" for="footer4">
              (4) อื่นๆ
            </label>
          </div>
        </div>
        <div class="col-3">
          <div class="form-check">
            <label class="form-check-label" onclick="Other()">
              <input class="form-control" name="Pay_other" id="Pay_other" placeholder="(ระบุ)">
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-5 border border-dark rounded-3 py-5 ps-4">
          <div class="row">
            <h5 class="col-md-3 pt-3 ">คำเตือน</h5>
            <p class="col-md-9">ผู้มีหน้าที่ออกหนังสือรับรองการหักภาษี ณ ที่จ่าย
              <br>ฝ่าฝืนไม่ปฏิบัติตามมาตรา 50 ทวิ แห่งประมวล
              <br>รัษฎากร ต้องรับโทษทางอาญาตามมาตรา 35
              <br>แห่งประมวลรัษฎากร
            </p>
          </div>
        </div>
        <div class="col-md-7 border border-dark rounded-3">
          <div class="row">
            <p class="h5 col-12 text-center">ขอรับรองว่าข้อความและตัวเลขดังกล่าวข้างต้นถูกต้องตรงกับความจริงทุกประการ</p>
            <label class="col-md-3 col-form-label text-end">ลงชื่อ</label>
            <div class="col-md-7">
              <input name="Name" id="Name" class="form-control" placeholder="ผู้จ่ายเงิน...." required>
            </div>
          </div>
          <div class="row pt-3 container justify-content-center">
            <div class="col-md-12">
              <input name="Date" id="Date" type="date" class="form-control" placeholder="กรอกวันที่">
            </div>
          </div>
          <div class="row">
            <p class=" col-12 text-center">(วัน/เดือน/ปี ที่ออกหนังสือรับรองฯ)</p>
          </div>
        </div>
      </div>
    </div>
    <input accept="image/*" type='file' id="imgInp" name="file" style="display: none;" />
    <div class="container">
      <div class="row">
        <div class="col-md-12 border border-dark rounded-5 py-3  ">
          <div class=" d-grid gap-2   d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary" onclick="clears()">เคลียผลการคำนวณ</button>
            <button type="button" onclick="calculate()" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              แสดงผล PDF
            </button>
            <button class="btn btn-primary" onclick="calculate()" type="submit">ยืนยัน</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<script>
  function calculate() {
    var Sum_sent = Number(document.getElementById("Sum_sent").value) + 0;
    document.getElementById("calculate").innerHTML =
      "ภาษีคืนฉันซิ " + Sum_sent.toLocaleString() + " บาท";
  }
</script>