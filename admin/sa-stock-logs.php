<?php 
  include'include/header.php';
  include'include/headermenu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php include'include/sa-sidemenu.php'; ?>
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
            <h3>Stock logs</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <input type="text" name="" class="form-control form-control-sm" placeholder="Searh product...">
              </div>
              <button class="btn btn-sm btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Export
              </button>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>P. Code</th>
                  <th>Product Name</th>
                  <th>Value</th>
                  <th>Qty</th>
                  <th>Total</th>
                  <th>Transaction Type</th>
                  <th>Transaction #</th>
                  <th>Date In/Out</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12345</td> 
                  <td>Coffee</td>
                  <td>144</td> 
                  <td>3</td> 
                  <td>444</td> 
                  <td>Purchase</td>
                  <td>54321</td>
                  <td>May 2 2018</td>
                </tr>
                <tr>
                  <td>12346</td> 
                  <td>Relaxant oil</td>
                  <td>120</td> 
                  <td>1</td> 
                  <td>120</td> 
                  <td>Purchase</td>
                  <td>54321</td>
                  <td>May 2 2018</td>
                </tr>
                <tr>
                  <td>12347</td> 
                  <td>Red fruit juice</td>
                  <td>150</td> 
                  <td>1</td> 
                  <td>150</td> 
                  <td>New stock</td>
                  <td>54321</td>
                  <td>May 2 2018</td>
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