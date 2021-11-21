<main id="main">
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>วิธีการใช้งาน</h3>
                        <h2>ภาษีคืนฉันซิ</h2>
                        <p>
                            ใส่รูปหนังสือรับรองการหักภาษี ณ ที่จ่าย(50 ทวิ) <br>
                            กรอกฟอร์มหนังสือรับรองการหักภาษี ณ ที่จ่าย(50 ทวิ)
                        </p>
                        <div class="text-center text-lg-start">
                            <button class="btn btn-primary col-12" onclick="uploadImage()">
                                ใส่รูป
                                <i class="bi bi-image-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img id="defaultImage" src="https://tipsmake.com/data1/thumbs/how-to-extract-img-files-in-windows-10-thumb-bzxI4IDgg.jpg" class="img-fluid" alt="default image">
                    <img id="blah" src="#" class="img-fluid" alt="preview" style="display: none;" />
                </div>
            </div>

            <?php include "views/Form.php"; ?>

        </div>
    </section>

</main>