<?php 
  include'include/header.php';
  include'include/headermenu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php include'include/sa-sidemenu.php'; ?>
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mb-5"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom mb-2">
            <h4>BRANCH</h4>
          </div> 		
			 
			 
			<div class="row">
				
				<div class="col-md-6">
					<h5>Create branch account</h5>	
					<div class="form-row mb-2"> 
					    <label>Enter branch name <span class="text-danger">*</span></label>
					    <input type="text" class="form-control form-control-sm mb-2" placeholder="Manila" required>
					    <label>Address <span class="text-danger">*</span></label>
					    <textarea rows="2" class="form-control form-control-sm mb-2" placeholder="Manila Philippines"></textarea>

					    <label>Username <span class="text-danger">*</span></label>
					    <input type="text" class="form-control form-control-sm mb-2" placeholder="Username" required>
					    <label>Password <span class="text-danger">*</span></label>
					    <input type="password" class="form-control form-control-sm mb-2" placeholder="*******" required>
					</div>
					<div class="form-row mb-2 justify-content-end"> 
				      	<button type="button" class="btn btn-sm btn-success pull-right">Submit</button>
					</div>
				</div>
				<div class="col-md-6">	
					<h5>Branch list</h5>
					<label for="validationTooltip02">Note: <span class="text-danger">*</span> No edit in branch name you can delete the and add the right name.</label>
					<table class="table table-sm">
						<thead>
							<thead>
								<tr>
									<th>Code</th>
									<th>Branch</th>
									<th>Address</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
						</thead>

						<tbody>
							<tr>
								<td>002</td>
								<td>Cagayan</td>
								<td>Cagayan Philippines</td>
								<td class="text-right">
									<a href=""><i class="fas fa-edit text-success mr-2"></i></a> 
				                    <a href=""><i class="fas fa-trash-alt text-danger"></i></a>
				                </td>
							</tr>
							<tr>
								<td>004</td>
								<td>Manila</td>
								<td>Manila Philippines</td>
								<td class="text-right">
									<a href=""><i class="fas fa-edit text-success mr-2"></i></a> 
				                    <a href=""><i class="fas fa-trash-alt text-danger"></i></a>
				                </td>
							</tr>
							<tr>
								<td>001</td>
								<td>Osamiz</td>
								<td>Osamiz Philippines</td>
								<td class="text-right">
									<a href=""><i class="fas fa-edit text-success mr-2"></i></a> 
				                    <a href=""><i class="fas fa-trash-alt text-danger"></i></a>
				                </td>
							</tr>
							<tr>
								<td>003</td>
								<td>Surigao</td>
								<td>Surigao Philippines</td>
								<td class="text-right">
									<a href=""><i class="fas fa-edit text-success mr-2"></i></a> 
				                    <a href=""><i class="fas fa-trash-alt text-danger"></i></a>
				                </td>
							</tr>
						</tbody>
					</table> 
				</div>	
					
			</div>

        </main>
      </div>
    </div>

<?php 
  include'include/footer.php';
?>