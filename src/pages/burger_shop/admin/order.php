<div id="page_order" class="d-none page px-3 py-5">
    <h4 class="text-white">Orders</h4>

    <table class="table_style_1" id="tbl_orders">
        <thead>
            <th width="15%">Ref. No.</th>
            <th>Name</th>
            <th width="10%">Phone No</th>
            <th width="10%">Status</th>
            <th width="10%"></th>
        </thead>
        <tbody>

        </tbody>
    </table>


    <div class="mt-3 ms-3" style="display:none; width:50%;" id="div_to_print">

        <div class="text-center">
            <img src="src\resources\img\otakulogo.PNG" alt="" class="border rounded-circle">
        </div>
        <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
            <span class="h6 fw-bold"> Customer Details </span>
        </div>
        <div class="p-3 px-0 pb-0">
            <table class="table table_style_2 ">
                <tbody>
                    <tr>
                        <td width="15%" class="fw-bold  border border-dark py-0 px-2">Name</td>
                        <td class=" border-start-0 border border-dark py-0 px-2">Nonilon Jr.</td>
                    </tr>
                    <tr>
                        <td width="15%" class="fw-bold  border border-dark py-0 px-2">Phone</td>
                        <td class=" border border-dark py-0 px-2">09090909</td>
                    </tr>
                    <tr>
                        <td width="15%" class="fw-bold  border border-dark py-0 px-2">Address</td>
                        <td class=" border border-dark py-0 px-2">Cavite City</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="text-center py-3 pt-0 text-center" style="border-bottom:3px solid black;">
            <span class="h6 fw-bold"> Order Details </span>
        </div>

        <div class="p-3 px-0" id="div_order_details">
            <table class="table_style_1" id="tbl_view_order_print">
                <thead>
                    <th class="text-center">Name</th>
                    <th class="text-center" width="10%">Qty</th>
                    <th class="text-center" width="15%">Price</th>
                </thead>
                <tbody></tbody>
            </table>
            <div class=" pe-3" style="float:right">
                <span class="fw-bold">Total :</span><span class="fw-bold" id="txt_total"> &#8369;900</span>
            </div>
        </div>
    </div>
</div>