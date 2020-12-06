<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','PromoTR - LEDClub 2020'); ?>
<?php $__env->startSection('title_header','LEDClub 2020'); ?>

<!-- Import Excel -->
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action="#" enctype="multipart/form-data">
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
              <button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#importExcel"><i class="fas fa-file-import"></i> Import </button>
              <a href="#"><button type="button" class="btn btn-primary mr-1"><i class="fas fa-file-export"></i> Export </button></a>  
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
                
                <th></th>
                <th>Nama Customer</th>
                <th>Site</th>
                <th>Total Benefit</th>
                <th>Total Realisasi</th>
                <th>Sisa Benefit</th>
                <th>Action</th>
              </tr>
              
              <tr class="collapsed" data-toggle="collapse" data-target=".parent1Content">
                
                <td class="icon-class"></td>
                <td>Pioneer</td>
                <td>TR1</td>
                <td>10.000.000</td>
                <td>5.000.000</td>
                <td>5.000.000</td>
                

              </tr>
              <tr class="collapse parent1Content">
                <td></td>
                <td>Januari</td>
                <td></td>
                <td>1.000.000</td>
                <td>300.000</td>
                <td>700.000</td>
                <td><a href="#" class="btn btn-primary">Edit</a></td>
              </tr>
              
              <tr class="collapse parent1Content">
                <td></td>
                <td>Maret</td>
                <td></td>
                <td>5.000.000</td>
                <td>2.000.000</td>
                <td>3.000.000</td>
                <td><a href="#" class="btn btn-primary">Edit</a></td>
              </tr>

              
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/promotr2/resources/views/pages/promo/ledclub/ledclub2020.blade.php ENDPATH**/ ?>