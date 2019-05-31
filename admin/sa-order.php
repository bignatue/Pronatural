<?php 
  include'include/header.php';
  include'include/headermenu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php include'include/sa-sidemenu.php'; ?>
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mb-5"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom mb-2">
            <h3>Purchase Product</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <p><pan class="text-danger">Note:</pan> <i>to purchase a pruduct make sure to have a buyer id number.</i></p>
            </div>
          </div> 		
			<h5 class="my-2">Buyer Details</h5>
			<div class="form-row">
				<div class="col-md-2 mb-3">
					<input type="text" name="" class="form-control form-control-sm" placeholder="Searh id or name...">
				</div>
				<div class="col-md-2 mb-3">
					<input type="text" name="" class="form-control form-control-sm" placeholder="Enter product code...">
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip02">Upline ID Number <span class="text-danger">*</span></label>
				  <input type="text" class="form-control form-control-sm" id="validationTooltip02" placeholder="123456789" value="12345" required>
				  <p class="text-danger display-none">Invalid id number!</p>
				</div>
				<div class="col-md-10 mb-3">
				  <label for="validationTooltip02">Buyer's name</label>
				  <input type="text" readonly class="form-control-plaintext form-control-sm border-bottom" placeholder="Geneva Cruz">
				</div>
			</div>  
			<h5>Product Details</h5>
			<div class="form-row">
			    <div class="col-md-2">
			      <label for="validationTooltip02">P. Code <span class="text-danger">*</span></label>
			      <input type="text" class="form-control form-control-sm" id="validationTooltip02" placeholder="12345" required>
				  <p class="text-danger display-none">Select product!</p>
			    </div>
				<div class="col-md-6">
			        <label for="validationTooltip02">Description</label>
				  	<input type="text" readonly class="form-control-plaintext form-control-sm border-bottom" placeholder="Coffee">
			    </div>
				<div class="col-md-2">
			      <label for="validationTooltip02">Quantity <span class="text-danger">*</span></label>
			      <input type="text" class="form-control form-control-sm" id="validationTooltip02" placeholder="1" required>
				  <p class="text-danger display-none">Field required!</p>
			    </div>
				<div class="col-md-2">
			      <label for="validationTooltip02">Amount</label>
			      <input type="text" class="form-control-plaintext form-control-sm border-bottom" id="validationTooltip02" placeholder="144" required>
			    </div>
			</div>  
			<div class="form-row">
				<p class="text-primary mt-2">+ add more product</p>
			</div>
			<div class="form-row justify-content-end">
				<div class="col-md-2">
					<b>TOTAL:</b> 144
				</div>
			</div>

		  <hr>
		  <div class="form-row justify-content-end">
		    <div class="col-md-2 mb-3">
		      <button type="button" class="btn btn-sm btn-success btn-block">Submit</button>
		    </div>
		  </div>
 
			

        </main>
      </div>
    </div>

<?php 
  include'include/footer.php';
?>