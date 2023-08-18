<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Loom - Admin Dashboard  </title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/components.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url();?>assets/img/favicon.ico' />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
    <?php include_once 'sidebar.php';?>
      <div class="main-content">

 <section class="section">

  <div class="section-body">
  <div class="row">
    <div class="col-md-12">
     <div class="card card-primary">
  <div class="card-body">
  <form method="post" id="myForm" action="">

                    <div class="row">
 <div class="col-md-3 form-group">
  <label class="form-label">Purchase No</label>
  <input type="number" name="Purchase_No" value="" id="no" class="form-control form-control-sm  text-capitalize" required="">
</div> 

<div class="col-md-3 form-group">
  <label class="form-label">Purchase Date</label>
  <input type="date" name="Purchase_Date" value="<?php echo date('Y-m-d'); ?>" id="Date" class="form-control form-control-sm" required="">
</div>

<div class="col-md-3 form-group">
  <label class="form-label">Supplier</label>
  <select name="Supplier" id="Supplier" class="form-control form-control-sm text-capitalize" required>
    <option value="">Select Supplier</option>
    <?php
    foreach($suppilers as $suppiler)
    {
    ?>
    <option value="<?php echo $suppiler->id;?>"><?php echo $suppiler->Supplier_Name;?></option>
    <?php
    }
    ?>
  </select>
</div>

<div class="col-md-3 form-group">
  <label class="form-label">Supplier Address</label>
  <input type="text" name="Address" value="" id="Address" class="form-control form-control-sm" readonly>
</div>
<div class="col-md-3 form-group">
  <label class="form-label">Supplier Mobile No</label>
  <input type="text" name="Mobile_no" value="" id="Mobile_no" class="form-control form-control-sm" readonly>
</div>

<div class="col-md-3 form-group">
  <label class="form-label"> GST</label>
  <input type="text" name="GST_No" value="" id="GST_No" class="form-control form-control-sm" readonly>
</div>
<div class="col-md-3 form-group">
  <label class="form-label">State</label>
  <input type="text" name="State" value="" id="State" class="form-control form-control-sm" readonly>
</div>
 </div>
 </form>         
 <form  id="product-form" action="" onsubmit="return false;">
  <div class="row my-3">
<div class="col-md-12 form-group mb-1">
<h6>Add Purchase Item</h6><hr style="border: 1px dashed #ccc;margin: 0px;">
</div>

                       <div class="col-md-3 form-group">
                       <label>Product Name</label>
                       <select name="Product-name" id="Product-name" class="form-control form-control-sm ">
                       <option value="">Select  Product</option>
                       <?php
                       foreach($spares as $spare){
                        ?>
                        <option value="<?php echo $spare->id;?>"><?php echo $spare->product_name;?></option>
                        <?php } ?>
                       </select>
                      </div>

                      <div class="col-md-3 form-group">
                       <label>HSN No</label>
                      <input type="text" name="hsn" id="hsn"  class="form-control form-control-sm" readonly>
                      </div>
                    
                      <div class="col-md-3 form-group">
                       <label>Quantity</label>
                      <input type="text" name="quantity" id="quantity"  class="form-control form-control-sm numberk" required />
                      </div>

                      <div class="col-md-3 form-group">
                      <label>Rate</label>
                      <input type="text" name="rate" id="rate"  class="form-control form-control-sm numberk" maxlength="4" required />
                      </div>

                      <div class="col-md-3 form-group">
                      <label>Amount</label>
                      <input type="text" name="amount" id="amount" class="form-control form-control-sm numberk" maxlength="4" readonly>
                      </div>

                      <div class="col-md-3 form-group">
                      <label>Tax</label>
                      <input type="text" name="tax" id="tax" class="form-control form-control-sm" maxlength="4" readonly>
                      </div>

                      <div class="col-md-3 mt-4 form-group">
                      <button type="submit" name="add" id="add" class="btn btn-primary">Add</button>
                      </div>


</div>
 </form>

</div>
</div>


                <div class="card card-primary">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12 mb-3">
    
       
      </div>
    </div>
    <table id="myTable" class="table table-striped table-sm" style="width:100%;overflow-x:auto;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">HSN No</th>
      <th scope="col">Quantity</th>
      <th scope="col">Rate</th>
      <th scope="col">Amount</th>
      <th scope="col">Tax</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th colspan="2">SGST:</th>
      <th colspan="2"><input type="text" name="sgst" id="sgst" class="form-control form-control-sm" readonly></th>
      <th colspan="2">Total Amount:</th>
      <th colspan="2"><input type="text" name="total_amt" id="total_amt" class="form-control form-control-sm" readonly></th>
    </tr>

    <tr>
      <th colspan="2">CGST:</th>
      <th colspan="2"><input type="text" name="cgst" id="cgst" class="form-control form-control-sm" readonly></th>
      <th colspan="2">Total Tax Amount:</th>
      <th colspan="2"><input type="text" name="total_taxamt" id="total_tax_amt" class="form-control form-control-sm" readonly></th>
    </tr>


    <tr>
      <th colspan="2">IGST:</th>
      <th colspan="2"><input type="text" name="igst" id="cgst" class="form-control form-control-sm" readonly></th>
      <th colspan="2">Final Total:</th>
      <th colspan="2"><input type="text" name="final_total" id="final_total" class="form-control form-control-sm" readonly></th>
    </tr>
      
  </tfoot>
</table>

    <div class="col-sm-12 text-center mt-4">
            <button type="button" class="btn btn-primary me-sm-3 me-1" id="save">Submit</button>




</section>
</div></div></div>

 
          </form>
        </div>
      </div>
    </div>
  </div>

    </div>
    </div>


   <!-- build:js <?php echo base_url();?>assets/vendor/js/core.js -->
<script src="<?php echo base_url();?>assets/js/app.min.js"></script>
<script src="<?php echo base_url();?>assets/js/page/index.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/bundles/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/datatables.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script>

const mytable = $('#myTable').DataTable({

});
const supplier = $('#Supplier');
const address = $('#Address');
const mobileNo = $('#Mobile_no');
const gstNo = $('#GST_No');
const state = $('#State');

const productform = $('#product-form');
const productname = $('#Product-name');
const quantity = $('#quantity');
const rate = $('#rate');
const amount = $('#amount');
const tax = $('#tax');

quantity.keyup(CalAmount);
rate.keyup(CalAmount);

productname.change(function(){  
});

function CalAmount(){
  let val = quantity.val() * rate.val();
  val = val.toFixed(2);
  amount.val(val); 
}


productform.submit(function(e){
  e.preventDefault();
  const fromdata = new FormData(this);
  fromdata.append('Product', $("#Product-name option:selected").text());
  const data = {};
  fromdata.forEach((value, key) => {
    data[key] = value;
  })
  
  mytable.row.add([
    mytable.rows().count()+1,
    mytable.rows().count(),
    mytable.rows().count(),
    mytable.rows().count(),
    mytable.rows().count(),
    mytable.rows().count(),
    mytable.rows().count(),
    mytable.rows().count(),
  ]).draw();
  console.log(mytable.column(0).sum());
})

supplier.change((e) => {
  const id = supplier.val();
  if (id) {
    $.ajax({
      url: `<?php echo base_url();?>PurchaseSpareController/GetSupplier/${id}`,
      method: 'GET',
      dataType: 'json',
      success: (data) => {
        address.val(data.Address);
        mobileNo.val(data.Mobile_no);
        gstNo.val(data.GST_No);
        state.val(data.State);
      },
      error: () => {
        alert('Something went wrong.');
      },
    });
  } else {
    address.val('');
    mobileNo.val('');
    gstNo.val('');
    state.val('');
  }
});


  $('#Product-name').change(function(){
    var id = $(this).val();
    if(id != ''){
    $.ajax({
        url: '<?php echo base_url();?>PurchaseSpareController/GetProduct/'+id,
        method: 'GET',
        dataType: 'json',
        success: (data) => {
          $('input[name="hsn"]').val(data.hsn);
          $('input[name="tax"]').val(data.Tax);
      },
        error: (error) => {
          alert('something went wrong');
      }
    
    });
  }
  else{
    $('input[name="hsn"]').val('');
    $('input[name="tax"]').val('');
  }
  });


</script>





</body>
</html>
