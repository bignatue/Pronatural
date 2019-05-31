<?php 
  include'include/header.php';
?>  

    <div class="container">
      <div class="row py-4">
        <div class="col-sm-12">
          <h1 class="display-4 text-center">Account Privilege</h1>
        </div>        
      </div>
    </div>
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">ADMIN ACCESS</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-2 mb-4">
              <li>Register account</li>
              <li>View all accounts</li>
              <li>Disable/enable account</li>
              <li>Add product</li>
              <li>View/Edit/Delete product list</li>
              <li>Add stock</li>
              <li>View stock log record</li>
              <li>View inventory report</li>
              <li>Purchase product</li>
              <li>View account sales report</li>
              <li>Create branch account</li>
              <li>Edit branch account</li>
              <li>View branch list</li>
            </ul>
            <a class="btn btn-success mb-2" href="sa-all-account.php">View demo</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">BRANCH ACCESS</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-2 mb-4">
              <li>Register account</li>
              <li>View all accounts</li>
              <li>Disable/enable account</li>
              <li>View/Edit product list</li>
              <li>Add stock</li>
              <li>View stock log record</li>
              <li>View inventory report</li>
              <li>Purchase product</li>
              <li>View account sales report</li>
              <li class="text-danger"><del><em>Add product</em></del></li>
              <li class="text-danger"><del><em>Create branch account</em></del></li>
              <li class="text-danger"><del><em>Edit branch account</em></del></li>
              <li class="text-danger"><del><em>View branch list</em></del></li>
            </ul>
            <a class="btn btn-success mb-2" href="all-account.php">View demo</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">MEMBERS ACCESS</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-2 mb-4">
              <li>Register account</li>
              <li>View downline accounts</li>
              <li>Purchase product</li>
              <li>View sales report</li>
              <li class="text-danger"><del><em>Add stock</em></del></li>
              <li class="text-danger"><del><em>Add product</em></del></li>
              <li class="text-danger"><del><em>Disable/enable account</em></del></li>
              <li class="text-danger"><del><em>View/Edit product list</em></del></li>
              <li class="text-danger"><del><em>View stock log record</em></del></li>
              <li class="text-danger"><del><em>View inventory report</em></del></li>
              <li class="text-danger"><del><em>Create branch account</em></del></li>
              <li class="text-danger"><del><em>Edit branch account</em></del></li>
              <li class="text-danger"><del><em>View branch list</em></del></li>
            </ul>
            <a class="btn btn-success mb-2" href="my-downline.php">View demo</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">WAREHOUSEMAN</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-2 mb-4">
              <li>Add Stock</li>
              <li>View Inventory</li>
              <li>View stock log</li>
              <li>View branch stock</li>
              <li>View branch stock log</li>
              <li class="text-danger"><del><em>Add stock</em></del></li>
              <li class="text-danger"><del><em>Add product</em></del></li> 
              <li class="text-danger"><del><em>View/Edit product list</em></del></li>
              <li class="text-danger"><del><em>View stock log record</em></del></li>
              <li class="text-danger"><del><em>View inventory report</em></del></li>
              <li class="text-danger"><del><em>Create branch account</em></del></li>
              <li class="text-danger"><del><em>Edit branch account</em></del></li>
              <li class="text-danger"><del><em>View branch list</em></del></li>
            </ul>
            <a class="btn btn-success mb-2" href="my-downline.php">View demo</a>
          </div>
        </div>
      </div>
    </div>
  

<?php 
  include'include/footer.php';
?>