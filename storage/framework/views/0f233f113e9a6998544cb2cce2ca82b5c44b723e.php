<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','PromoTR - List Customers'); ?>
<?php $__env->startSection('title_header','List Customers'); ?>



<div class="container">
<?php if($errors->has('file')): ?>
<span class="invalid-feedback" role="alert">
  <strong><?php echo e($errors->first('file')); ?></strong>
</span>
<?php endif; ?>


<?php if($sukses = Session::get('sukses')): ?>
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
  <strong><?php echo e($sukses); ?></strong>
</div>
<?php endif; ?>

<button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#importExcel"><i class="fas fa-file-import"></i> Import </button>
<a href=" <?php echo e(route('customer-export')); ?> "><button type="button" class="btn btn-primary mr-1"><i class="fas fa-file-export"></i> Export </button></a>

<!-- Import Excel -->
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action=" <?php echo e(route('customer-import')); ?> " enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
        </div>
        <div class="modal-body">

          <?php echo e(csrf_field()); ?>


          <label>Pilih file excel</label>
          <div class="form-group">
            <input type="file" name="file" required="required">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Import</button>
        </div>
      </div>
    </form>
  </div>
</div>


<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="container-fluid card-header">
            <div class="container-fluid card-header-action">
            </div>
          <div class="card-header-form">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                
                <th>Nama Customer</th>
                <th>Site</th>
                <th>Address</th>
                <th>Salesrep</th>
                <th>Doc Status</th>
                <th>Action</th>
              </tr>
              <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cust): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                
                <td> <?php echo e($cust->cust_name); ?> </td>
                <td> <?php echo e($cust->cust_site); ?> </td>
                <td> <?php echo e($cust->cust_address); ?> </td>
                <td> <?php echo e($cust->sales_name); ?> </td>
                <td><div class="badge badge-success">Completed</div></td>
                <td><a href="#" class="btn btn-primary">Edit</a></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <?php echo e($customer->links()); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/promotr2/resources/views/pages/customers/list_customer.blade.php ENDPATH**/ ?>