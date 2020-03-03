<form name="purchase-form" id="purchase-form" method="POST">
    <div class="row">
        <div class="col-md-12 form-group g-mb-20">
            <label class="g-color-gray-dark-v2 ">สินค้า:</label>
            <select name="product" id="product" class="form-control g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15">
                <option value="Che POSE 1 กระปุก 890฿">Che POSE 1 กระปุก 890฿</option>
                <option value="Che POSE 2 กระปุก 1750฿">Che POSE 2 กระปุก 1750฿</option>
            </select>
        </div>
        <div class="col-md-6 form-group g-mb-20">
            <label class="g-color-gray-dark-v2 ">ชื่อ-นามสกุล:</label>
            <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" name="fullname" id="fullname">
        </div>

        <div class="col-md-6 form-group g-mb-20">
            <label class="g-color-gray-dark-v2">โทร:</label>
            <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="tel" name="mobile" id="mobile">
        </div>

        <div class="col-md-12 form-group g-mb-20">
            <label class="g-color-gray-dark-v2">ที่อยู่:</label>
            <textarea class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="5" name="address" id="address"></textarea>
        </div>
        <div class="col-md-12 form-group g-mb-40">
            <label class="g-color-gray-dark-v2">หมายเหตุ:</label>
            <textarea class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="5" name="description" id="description"></textarea>
        </div>
    </div>
    <input type="hidden" name="redirect" id="redirect" value="https://chepose.wesales.online/thankyou.php"/>
    <input type="hidden" name="lineid" id="lineid" value="3Lu2JWz2vrA8VcT5RcDWKhGOCHK38FAv8Jooc6SvPAf"/>
    <input type="hidden" name="sms" id="sms" value="1"/>

    <button class="btn u-btn-primary btn-lg rounded-3 g-py-12 g-px-20" type="submit" role="button" disabled="" id="bt-purchase-form-submit">ส่งข้อมูลการสั่งซื้อ</button>
</form>