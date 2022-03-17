<div class="modal" tabindex="-1" id="md_account_settings">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
                <span class="ms-5 h5 fw-bold"> My Account </span>
                <i class="fa-solid fa-circle-xmark icon_btn pe-3 fa-xl" style="float:right; padding-top:12px;" data-bs-dismiss="modal"></i>
            </div>

            <div class="p-3 md_form">
                <h6 class="fw-bold text-muted mb-3">Account Settings</h6>

                <label>Username</label>
                <input type="text" id="txt_username" class="form-control form-control-sm">

                <label class="mt-2">Email</label>
                <input type="text" id="txt_email" class="form-control form-control-sm">

                <label class="mt-2">Password</label>
                <input type="text" id="txt_password" class="form-control form-control-sm">

                <label class="mt-2">Access</label>
                <select class="form-select form-select-sm" name="" id="sel_access_level">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>

                <div class="mt-2">
                    <a id="btn_delete_account" class="icon_btn">Delete account</a>
                </div>


                <div class="text-center mt-3">
                    <button class="shadow" id="btn_update_account">Update</button>

                </div>



            </div>





        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="md_view_order">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
                <span class="ms-5 h5 fw-bold"> Order Details </span>
                <i class="fa-solid fa-circle-xmark icon_btn pe-3 fa-xl" style="float:right; padding-top:12px;" data-bs-dismiss="modal"></i>
            </div>


            <div class="p-3" id="div_order_details">
                <table class="table_style_1" id="tbl_view_order">
                    <thead>
                        <th class="text-center">Name</th>
                        <th class="text-center" width="10%">Qty</th>
                        <th class="text-center" width="15%">Price</th>
                    </thead>
                    <tbody></tbody>
                </table>
                <div class="border pe-3" style="float:right">
                    <span class="fw-bold">Total :</span><span class="fw-bold" id="txt_total"> &#8369;900</span>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn border" data-bs-target="#md_update_order" data-bs-toggle="modal" style="font-size:10pt;" id="btn_update_order"><i class="fa-solid fa-receipt  text-primary pe-1"></i> Update</button>
                <button class="btn border" onClick="print_order()" style="font-size:10pt;"><i class="fa-solid fa-print icon_btn text-primary pe-1"></i>Print</button>
            </div>
        </div>

    </div>
</div>

<div class="modal" tabindex="-1" id="md_update_order">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
                <span class="ms-5 h5 fw-bold"> Update Order </span>
                <i class="fa-solid fa-circle-xmark icon_btn pe-3 fa-xl" style="float:right; padding-top:12px;" data-bs-dismiss="modal"></i>
            </div>

            <div class="p-3">

                <label>Set Status</label>
                <select name="" id="sel_update_order_status" class="form-select">
                    <option value="Completed">Complete</option>
                    <option value="Cancelled">Cancel</option>
                </select>


            </div>

            <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
                <span class="h5 fw-bold"> Payment Details </span>
            </div>


            <div class="p-3">

                <label>Payment Method</label>
                <input class="form-control" readonly type="text" id="txt_payment_method">

                <label class="mt-2">Payment Amount</label>
                <input class="form-control" readonly type="text" id="txt_payment_amount">

                <label class="mt-2">Number</label>
                <input class="form-control" readonly type="text" id="txt_payment_number">


            </div>


            <div class="modal-footer">
                <button class="btn border" data-bs-target="#md_view_order" data-bs-toggle="modal" style="font-size:10pt;">Cancel</button>
                <button class="btn border btn-primary" id="btn_save_update_order" style="font-size:10pt;" data-bs-dismiss="modal">Save</button>
            </div>
        </div>

    </div>
</div>

<div class="modal" tabindex="-1" id="md_add_item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
                <span class="ms-5 h5 fw-bold"> Add Product </span>
                <i class="fa-solid fa-circle-xmark icon_btn pe-3 fa-xl" style="float:right; padding-top:12px;" data-bs-dismiss="modal"></i>
            </div>

            <form action="src/database/burger_shop/func/admin/add_product.php" method="post" enctype="multipart/form-data">
                <div class="p-3">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" name="name" id="txt_product_name">

                    <label class="mt-2">Price</label>
                    <input type="text" class="form-control" name="price" id="txt_price">

                    <label class="mt-2">Category</label>
                    <select id="txt_category" name="category" class="form-select">
                        <option value="burger">Burger</option>
                        <option value="drink">Drink</option>
                        <option value="sides">Sides</option>
                    </select>

                    <label class="mt-2">Picture</label>
                    <input type="file" class="form-control" name="picture" id="txt_picture">
                </div>




                <div class="modal-footer">
                    <button class="btn border" type="submit" style="font-size:10pt;">Save</button>
                </div>
            </form>
        </div>

    </div>
</div>

<div class="modal" tabindex="-1" id="md_msg_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
                <span class="ms-5 h5 fw-bold" id="msg_title"> Update Order </span>
                <i class="fa-solid fa-circle-xmark icon_btn pe-3 fa-xl" style="float:right; padding-top:12px;" data-bs-dismiss="modal"></i>
            </div>

            <div class="p-5 mx-auto">
                <span class="" id="msg_body"> Update Order </span>
            </div>


        </div>

    </div>
</div>

<div class="modal" tabindex="-1" id="md_view_item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
                <span class="ms-5 h5 fw-bold"> View Product </span>
                <i class="fa-solid fa-circle-xmark icon_btn pe-3 fa-xl" style="float:right; padding-top:12px;" data-bs-dismiss="modal"></i>
            </div>

            <div class="p-3">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="name" id="txt_view_product_name">

                <label class="mt-2">Price</label>
                <input type="text" class="form-control" name="price" id="txt_view_price">

                <label class="mt-2">Category</label>
                <select id="txt_view_category" name="category" class="form-select">
                    <option value="burger">Burger</option>
                    <option value="drink">Drink</option>
                    <option value="sides">Sides</option>
                </select>
                <label class="mt-2">Picture</label>
                <input type="file" class="form-control" name="picture" id="txt_view_picture">
            </div>


        </div>

    </div>
</div>