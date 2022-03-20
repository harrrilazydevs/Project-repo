<div class="d-none page" id="page_myPurchase">
    <div style="margin-top: 4%;">
        <table class="table table-borderless mt-5" style="height: 30rem;">
            <thead class="text-white text-center d-flex-inline" style="background-color: #4F0A0A;">
                <tr>
                    <th class="col">Food</th>
                    <th class="col-4">Quantity</th>
                    <th class="col-4">Subtotal</th>
                </tr>
            </thead>
            <tbody class="text-white text-center" id="tbl_cart_orders"></tbody>
        </table>

        <div class="container box_menu">
            <hr style="border: 2px solid black; border-radius: 5px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt">
                        <h6 style="letter-spacing: 2px;">Subtotal : <span class="fw-bold" id="txt_subtotal"></span></h6>
                        <!-- <h6 style="letter-spacing: 2px;" id="txt_subtotal">Delivery Fee: <span class="fw-bold" id="txt_delivery_fee"></span></h6> -->
                        <!-- <h6 style="letter-spacing: 2px;">TOTAL : <span class="fw-bold" id="txt_total"></span></h6> -->


                        <div class="d-flex justify-content-center mb-3">
                            <button id="btn_proceed_checkout" style="font-weight:bold; background:#FFD600; border-radius:20px; width:200px; margin: 6px; border: none;" data-bs-toggle="modal" data-bs-target="#cartModal">Proceed to Check-out</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>