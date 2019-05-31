<?php 
  include'include/header.php';
  include'include/headermenu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php include'include/sa-sidemenu.php'; ?>
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mb-5"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom mb-2">
            <h3>Register Account</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <p><pan class="text-danger">Note:</pan> <i>before adding new account make sure to have your upline id number.</i></p>
            </div>
          </div>
 		
			
		  <h5>Upline Details</h5>
		  <div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">Upline ID Number <span class="text-danger">*</span></label>
		      <input type="text" class="form-control form-control-sm" id="validationTooltip02" placeholder="123456789" required>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">Branch <span class="text-danger">*</span></label>
		      	<select class="form-control form-control-sm"> 
				  <option value="2">Cagayan</option>
				  <option value="1">Manila</option>
				  <option value="2">Osamiz</option>
				  <option value="2">Surigao</option>
				</select>
		      	<p class="text-danger display-none">Field required!</p>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">Status <span class="text-danger">*</span></label>
		      	<select class="form-control form-control-sm">
				  <option value="0">Select...</option>
				  <option value="1">Activate</option>
				  <option value="2">Pending</option>
				</select>
		      	<p class="text-danger display-none">Field required!</p>
		    </div>
		  </div>

		  <h5>Personal Details</h5>
		  <div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip01">First name <span class="text-danger">*</span></label>
		      <input type="text" class="form-control form-control-sm" id="validationTooltip01" placeholder="First name"  required>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">Middle name</label>
		      <input type="text" class="form-control form-control-sm" id="validationTooltip02" placeholder="Last name" required>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">Last name <span class="text-danger">*</span></label>
		      <input type="text" class="form-control form-control-sm" id="validationTooltip02" placeholder="Last name" required>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
		  </div>

		  <div class="form-row">
		    <div class="col-md-4 mb-3">
		      	<label for="validationTooltip01">Gender <span class="text-danger">*</span></label>
		      	<select class="form-control form-control-sm"> 
				  <option value="1">Male</option>
				  <option value="2">Female</option>
				</select>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">Civil Status <span class="text-danger">*</span></label>
		      	<select class="form-control form-control-sm"> 
				  <option value="1">Single</option>
				  <option value="2">Married</option>
				  <option value="2">Divorced</option>
				</select>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">Name of spouse if married</label>
		      <input type="text" class="form-control form-control-sm" id="validationTooltip02" placeholder="Spouse full name" required>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
		  </div>

		  <div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip01">Birthdate</label>
		      <input type="text" class="form-control form-control-sm" id="validationTooltip01" placeholder="Jan 10 1982"  required>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">Place of birth <span class="text-danger">*</span></label>
		      <input type="text" class="form-control form-control-sm" id="validationTooltip02" placeholder="Manila" required>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">Citizenzhip</label>
		      <input type="text" class="form-control form-control-sm" id="validationTooltip02" placeholder="Filipino" required>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col-md-12 mb-3">
		      <label for="validationTooltip02">Present Address</label>
		      <textarea rows="2" class="form-control form-control-sm" id="validationTooltip02" placeholder="123 Stree, Brngy. Masayahin, Umiindak City" required></textarea>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
		</div>
			  
  		<h5>Contact Details</h5>
  		<div class="form-row">
		    <div class="col-md-4">
		      <label for="validationTooltip02">Contact Number <span class="text-danger">*</span></label>
		      <input type="text" class="form-control form-control-sm" id="validationTooltip02" placeholder="0927 507 5391" required>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
	    	<div class="col-md-4">
		      <label for="validationTooltip02">Landline Number</label>
		      <input type="text" class="form-control form-control-sm" id="validationTooltip02" placeholder="02 502 5598" required>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
	    	<div class="col-md-4">
		      <label for="validationTooltip02">Email Address</label>
		      <input type="email" class="form-control form-control-sm" id="validationTooltip02" placeholder="account@domain.com" required>
		      <p class="text-danger display-none">Field required!</p>
		    </div>
		</div>  

		  <hr>
		  <div class="form-row justify-content-end">
		    <div class="col-md-4 mb-3">
		      <button type="button" class="btn btn-sm btn-success btn-block">Submit</button>
		    </div>
		  </div>

        </main>
      </div>
    </div>

<?php 
  include'include/footer.php';
?>