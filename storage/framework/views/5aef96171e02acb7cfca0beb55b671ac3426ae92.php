<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','PromoTR - Upload Customer Document'); ?>
<?php $__env->startSection('title_header','Upload Customers Document'); ?>



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

<!-- Upload Image -->
<div class="modal fade" id="uploadImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action="<?php echo e(route('doc-upload')); ?>" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Image</h5>
        </div>
        <div class="modal-body">
          <?php echo e(csrf_field()); ?>


          <label>Pilih Gambar</label>
          <div class="form-group">
            <input type="file" name="image" required="required">
          </div>

          <label>Doc Type</label>
            <div class="form-group">
                <select class="form-control" id="pilihJurusan" name="doctype">
                <option>Pilih Doc Type</option>
                    <option value="KTP">KTP</option>
                    <option value="NPWP">NPWP</option>
                    <option value="SPPKP">SPPKP</option>
                    <option value="Foto Toko">Foto Toko</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Upload</button>
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
            <button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#uploadImage"><i class="fas fa-file-import"></i> Upload </button>
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
                
                <th>Code</th>
                <th>Customer Name</th>
                <th>Doc Type</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                
                <td> <?php echo e($d->cust_code); ?> </td>
                <td> <?php echo e($d->cust_name); ?> </td>
                <td> <?php echo e($d->doc_type); ?> </td>
                <td><img width="100px" src=" <?php echo e(url('/imagedoc/'.$d->image)); ?> " alt="">  </td>
                <td><a href="doc-customer/delete/<?php echo e($d->upload_id); ?>" class="btn btn-danger">Delete</a></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <?php echo e($data->links()); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/promotr2/resources/views/pages/customers/doc_upload.blade.php ENDPATH**/ ?>