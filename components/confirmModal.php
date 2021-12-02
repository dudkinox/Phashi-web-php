<?php
require('http/db.php');
$queryTotalAlert = "SELECT * FROM cal WHERE ID_FR = '" . $IDCARD . "'";
$resultTotalAlert = $conn->query($queryTotalAlert);
$TotalAlert = 0;
if ($resultTotalAlert->num_rows > 0) {
    $rowTotalAlert = $resultTotalAlert->fetch_assoc();
    $TotalAlert = $rowTotalAlert["sum"];
}
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">ภาษีคืนฉันซิ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div style="text-align:center" class="modal-body">
                ภาษีคืนฉันซิ <?php echo number_format($TotalAlert); ?> บาท
            </div>
            <div class="modal-footer">
                <button type="button" onclick="clearInput('<?php echo $IDCARD; ?>')" class="btn btn-primary" data-bs-dismiss="modal">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>