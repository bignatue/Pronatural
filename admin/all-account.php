<?php 
  include'include/header.php';
  include'include/headermenu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php include'include/admin-sidemenu.php'; ?>
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
            <h3>All Account</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">   
                <input type="" class="form-control form-control-sm mr-2" placeholder="Search name...">             
                <select class="form-control form-control-sm mr-2"> 
                  <option value="0">View by rank</option>
                  <option value="1">1st</option>
                  <option value="2">2nd</option>
                  <option value="3">3rd</option>
                  <option value="4">4rth</option>
                  <option value="5">5th</option>
                </select>          
                <select class="form-control form-control-sm"> 
                  <option value="0">View by status</option>
                  <option value="1">Active</option>
                  <option value="2">Pending</option>
                </select>
              </div>
              <button class="btn btn-sm btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                Export
              </button>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>Contact Number</th>
                  <th>Address</th> 
                  <th>Branch</th>
                  <th>Status</th>
                  <th class="text-center">View</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12345</td> 
                  <td>Brian Bantigue L.</td>
                  <td>0927 507 5391</td>
                  <td>123 Stree, Brngy. Masayahin, Umiindak City</td>
                  <td>Manila</td>
                  <td>
                    <div class="dropdown" style="position: absolute;">
                      <a class="btn btn-link btn-sm dropdown-toggle p-0" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Active
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <a class="btn btn-link dropdown-item">Approved</a>
                        <a class="btn btn-link dropdown-item">Pending</a>
                      </div>
                    </div>
                  </td>
                  <td class="text-center"><a href="account-details.php"> <i class="fas fa-eye text-success"></i></a></td>
                </tr>
                <tr>
                  <td>12345</td> 
                  <td>Brian Bantigue L.</td>
                  <td>0927 507 5391</td>
                  <td>123 Stree, Brngy. Masayahin, Umiindak City</td>
                  <td>Manila</td>
                  <td>
                    <div class="dropdown" style="position: absolute;">
                      <a class="btn btn-link btn-sm dropdown-toggle p-0 text-danger" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pending
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <a class="btn btn-link dropdown-item"><small>Approved</small></a>
                        <a class="btn btn-link dropdown-item"><small>Pending</small></a>
                      </div>
                    </div>
                  </td>
                  <td class="text-center"><a> <i class="fas fa-eye text-muted"></i></a></td>
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