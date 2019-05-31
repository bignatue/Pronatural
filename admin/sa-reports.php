<?php 
  include'include/header.php';
  include'include/headermenu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php include'include/sa-sidemenu.php'; ?>
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
            <h3>Reports</h3>
            <div class="btn-group mb-md-0">1 Week - 3/9/2018 to 7/9/2018</div>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">   
                <input type="" class="form-control form-control-sm mr-2" placeholder="Search name...">             
                <select class="form-control form-control-sm"> 
                  <option value="0">View by rank</option>
                  <option value="1">1st</option>
                  <option value="2">2nd</option>
                  <option value="3">3rd</option>
                  <option value="4">4rth</option>
                  <option value="5">5th</option>
                </select>
              </div>
              <button class="btn btn-sm btn-outline-secondary mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Select Date
              </button>
              <div class="dropdown-menu rounded-0" aria-labelledby="dLabel">
                <div class="row px-2">
                  <div class="col-6">
                    <label>From:</label>
                    <input type="date" class="form-control form-control-sm" name="">
                  </div>
                  <div class="col-6">
                    <label>To:</label>
                    <input type="date" class="form-control form-control-sm" name="">
                  </div>
                  <div class="col-12 mt-2 text-right">
                    <button class="btn btn-sm btn-primary">OK</button>
                  </div>
                </div>
              </div>
              <button class="btn btn-sm btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                Export
              </button>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th>ID No.</th>
                  <th>Full Name</th>  
                  <th>Rank</th>
                  <th>Product Name</th>
                  <th>Qty</th>
                  <th>Amout</th>
                  <th>Total Amount</th>
                  <th>Rebate</th> 
                  <th>Remarks</th> 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12345</td>
                  <td>Magno Bruzon R</td>
                  <td>1st Level</td>
                  <td>Coffee</td>
                  <td>3</td>
                  <td>148</td>
                  <td>444</td>
                  <td>31.08</td> 
                  <td rowspan="3">Claimed</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Relaxant oil</td>
                  <td>1</td>
                  <td>120</td>
                  <td>120</td>
                  <td>8.4</td>  
                </tr>
                <tr>
                  <th colspan="4">Total</th>
                  <th>4</th>
                  <th>268</th>
                  <th>564</th>
                  <th>39.48</th> 
                </tr>
              </tbody>
            </table>

              <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th>ID No.</th>
                  <th>Full Name</th>  
                  <th>Rank</th>
                  <th>Product Name</th>
                  <th>Qty</th>
                  <th>Amout</th>
                  <th>Total Amount</th>
                  <th>Rebate</th> 
                  <th>Remarks</th> 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12345</td>
                  <td>Maria Makiling L</td>
                  <td>1st Level</td>
                  <td>Coffee</td>
                  <td>3</td>
                  <td>148</td>
                  <td>444</td>
                  <td>31.08</td>
                  <td rowspan="3">Claimed</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Relaxant oil</td>
                  <td>1</td>
                  <td>120</td>
                  <td>120</td>
                  <td>8.4</td>  
                </tr>
                <tr>
                  <th colspan="4">Total</th>
                  <th>4</th>
                  <th>268</th>
                  <th>564</th>
                  <th>39.48</th> 
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

<?php 
  include'include/footer.php';
?>