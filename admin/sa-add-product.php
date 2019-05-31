<?php 
  include'include/header.php';
  include'include/headermenu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php include'include/sa-sidemenu.php'; ?>
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mb-5"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom mb-2">
            <h3>Add Product</h3>
          </div>
 		
			 
			<div class="row justify-content-between mb-3">
				<div class="col-md-4">
					<h5>Add Product</h5>
				</div>
				<div class="col-md-4 text-right">
					<a class="btn btn-success btn-sm" href="product.php" role="button">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
					View all product</a>
				</div>
			</div>
			<div class="form-row">
			    <div class="col-md-2">
			      <label for="validationTooltip02">P. Code <span class="text-danger">*</span></label>
			      <input type="text" class="form-control form-control-sm" placeholder="12345" required>
				    <p class="text-danger mb-0 display-none">Field required!</p>
			    </div>
				<div class="col-md-8">
			        <label for="validationTooltip02">Description <span class="text-danger">*</span></label>
			      	<input type="text" class="form-control form-control-sm" placeholder="Coffee" required>
				    <p class="text-danger mb-0 display-none">Field required!</p>
			    </div>
				<div class="col-md-2">
			      <label for="validationTooltip02">Value <span class="text-danger">*</span></label>
			      <input type="text" class="form-control form-control-sm" placeholder="144" required>
				    <p class="text-danger mb-0 display-none">Field required!</p>
			    </div>
			</div>  
			<div class="form-row">
				<p class="text-primary mt-2">+ add more product</p>
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