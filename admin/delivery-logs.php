<?php 
  session_start();
  $myusername = $_SESSION['username'];
  $accountstatus_parent = $_SESSION['accountstatus'];
  $user_parent_id = $_SESSION['user_id'];
  $type_user = $_SESSION['accountpriv'];

  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }else{
    include 'include/config.php';   
  }

  include'include/function.php';
  include'include/header.php';
  include'include/headermenu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php include check_menu($type_user); ?>
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
            <h3>Delivery Logs</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <input type="text" name="" class="form-control form-control-sm" placeholder="Searh product...">
              </div>
                <?php if($type_user == 1 || $type_user == 2){ ?>
                <a target="_blank" href="generate-stock.php" class="btn btn-sm btn-outline-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Export
                </a>
                <?php } ?>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm" id="datatable">
              <thead>
                <tr>
                  <th>Date Delivered</th>
                  <th>Branch</th>
                  <th>Pro Mangosteen Moringa</th>
                  <th>Pro Moringa Stevia</th>
                  <th>Red Fruit 500ml</th>
                  <th>Relaxant Oil 60ml</th> 
                  <th>Value</th> 
                </tr>
              </thead>
              <tbody>
                 <tr>
                  <td>Dec 02 2018</td>
                   <td>Manila</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100,000.00</td>
                 </tr>
                 <tr>
                  <td>Dec 02 2018</td>
                   <td>Cagayan</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100,000.00</td>
                 </tr>
                 <tr>
                  <td>Dec 02 2018</td>
                   <td>Surigao</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100,000.00</td>
                 </tr>
                 <tr>
                  <td>Dec 02 2018</td>
                   <td>Osamiz</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100</td>
                   <td>100,000.00</td>
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
<!-- Custom Script -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable').dataTable( {
        "order": [[ 0, 'desc' ]]
    });
  });
</script>   
