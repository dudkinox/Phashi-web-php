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
  <form>
    <div class=" row py-3 justify-content-between">
      <div class="col-md-2">
        <label class=""></label>
      </div>
      <div class="col-md-8 text-center">
        <label class="h5 ">หนังสือรองรับการหักภาษี ณ ที่จ่าย</label>
      </div>
      <div class="col-md-2">
        <input class="form-control" placeholder="เล่มที่" required>
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
        <input class="form-control" placeholder="เลขที่" required>
      </div>
    </div>
  </form>

  <div class="container justify-content-between border border-dark rounded-3 py-3">
    <form>
      <div class=" row">
        <div class="col-md-5">
          <label class="">ผู้มีหน้าที่หักภาษี ณ ที่จ่าย : -</label>
        </div>
        <div class="col-md-3">
          <label class="col-form-label">เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*</label>
        </div>
        <div class="col-md-4">
          <input class="form-control" type="text" tabindex="1" placeholder="x-xxxxx-xxxxx-xx-x" name="reg_id_card" id="username" value="" class="inputbox autowidth" onkeyup="autoTab(this)" minlength="13" maxlength="20" />
        </div>
      </div>
      <div class="row pt-3">
        <div class="col-md-6 ">
          <label class="form-label">ชื่อ</label>
          <input class="form-control" placeholder="(ให้ระบุว่าเป็น บุคคล นิติบุคคล บริษัท สมาคม หรือคณะบุคคล)" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">เลขประจำตัวผู้เสียภาษีอากร</label>
          <input class="form-control">
        </div>
      </div>
      <div class="mb-3 row pt-3">
        <label for="inputPassword" class="col-md-1 col-form-label">ที่อยู่</label>
        <div class="col-md-11">
          <input class="form-control" placeholder="(ให้ระบุชื่ออาคาร/หมู่บ้าน ห้องเลขที่ชั้นที่ เลขที่ ตรอก/ซอย หมู่ที่ถนน ตำบล/แขวง อำเภอ/เขต จังหวัด)" required>
        </div>
      </div>
    </form>
  </div>
  <div class="container border border-dark rounded-3 py-3">
    <form>
      <div class=" row">
        <div class="col-md-5">
          <label class="">ผู้มีหน้าที่หักภาษี ณ ที่จ่าย : -</label>
        </div>
        <div class="col-md-3">
          <label class="col-form-label " value="">เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*</label>
        </div>
        <div class="col-md-4">
          <input class="form-control" type="text" tabindex="1" placeholder="x-xxxxx-xxxxx-xx-x" name="reg_id_card" id="username" value="" onkeyup="autoTab(this)" minlength="13" maxlength="20" />
        </div>
      </div>
      <div class="row pt-3">
        <div class="col-md-6 ">
          <label class="form-label">ชื่อ</label>
          <input class="form-control" placeholder="(ให้ระบุว่าเป็น บุคคล นิติบุคคล บริษัท สมาคม หรือคณะบุคคล)" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">เลขประจำตัวผู้เสียภาษีอากร</label>
          <input class="form-control">
        </div>
      </div>
      <div class="row pt-3">
        <label for="inputPassword" class="col-md-1 col-form-label">ที่อยู่</label>
        <div class="col-md-11">
          <input class="form-control" placeholder="(ให้ระบุชื่ออาคาร/หมู่บ้าน ห้องเลขที่ชั้นที่ เลขที่ ตรอก/ซอย หมู่ที่ถนน ตำบล/แขวง อำเภอ/เขต จังหวัด)" required>
        </div>
      </div>
      <div class="row pt-3">
        <label for="inputPassword" class="col-md-1 col-form-label">ลำดับที่อยู่</label>
        <div class="col-md-2">
          <input class="form-control">
        </div>
        <label for="inputPassword" class="col-md-1 col-form-label">ในแบบ</label>
        <div class="col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
              (1) ภ.ง.ด.1ก
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
              (2) ภ.ง.ด.1ก พิเศษ
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
              (3) ภ.ง.ด.2
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
              (4) ภ.ง.ด.3
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <label for="inputPassword" class="col-md-12 col-form-label text-center">(ให้สามารถอ้างอิงหรือสอบยันกันได้ระหว่างลำดับที่ตาม หนังสือรับรองฯ กับแบบยื่นรายการภาษีหักที่จ่าย)</label>
        </div>
        <div class="col-md-2">
          <div class="form-check ">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
              (5) ภ.ง.ด.2ก
            </label>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
              (6) ภ.ง.ด.3ก
            </label>
          </div>
        </div>
        <div class="col-md-2 ">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
              (7) ภ.ง.ด.53
            </label>
          </div>
        </div>
      </div>
    </form>
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
    <form>
      <div class="row ">
        <div class="col-md-4 ">
          <label class="form-label">เงินที่จ่ายเข้า กบข./กสข./กองทุนสงเคราะห์ครูโรงเรียนเอกชน</label>
          <input class="form-control" placeholder="........................บาท" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">กองทุนประกันสังคม</label>
          <input class="form-control" placeholder="........................บาท" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">กองทุนสำรองเลี้ยงชีพ</label>
          <input class="form-control" placeholder="........................บาท" required>
        </div>
      </div>
    </form>
  </div>

  <div class="container border border-dark rounded-3 py-3">
    <form>
      <div class="row ">
        <label class="col-md-1 pt-2">ผู้จ่ายเงิน</label>
        <div class="col-md-2 pt-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
              (1) หัก ณ ที่จ่าย
            </label>
          </div>
        </div>
        <div class="col-md-2 pt-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
              (2) ออกให้ตลอดไป
            </label>
          </div>
        </div>
        <div class="col-md-2 pt-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
              (3) ออกให้ครั้งเดียว
            </label>
          </div>
        </div>
        <label class="col-md-1 col-form-label">(4) อื่นๆ</label>
        <div class="col-md-4">
          <input class="form-control  " placeholder="(ระบุ)">
        </div>
      </div>
    </form>
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
          <div class="col-md-7  ">
            <input class="form-control" placeholder="ผู้จ่ายเงิน...." required>
          </div>
        </div>
        <div class="row pt-3 container justify-content-center">
          <div class="col-md-3">
            <select class="form-select form-select-md " aria-label=".form-select-lg example">
              <option selected>วัน</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-3">
            <select class="form-select form-select-md " aria-label=".form-select-lg example">
              <option selected>เดือน</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-3">
            <select class="form-select form-select-md " aria-label=".form-select-lg example">
              <option selected>ปี</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <div class="row">
          <p class=" col-12 text-center">(วัน/เดือน/ปี ที่ออกหนังสือรับรองฯ)</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container ">
    <div class="row">
      <div class="col-md-12 border border-dark rounded-5 py-3  ">
        <div class=" d-grid gap-2   d-md-flex justify-content-md-end">
          <button class="btn btn-primary" type="button">ยืนยัน</button>
        </div>
      </div>
    </div>
  </div>
</div>