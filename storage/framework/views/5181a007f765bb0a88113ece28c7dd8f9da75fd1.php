<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','PromoTR - LEDClub 2020'); ?>
<?php $__env->startSection('title_header','LEDClub 2020'); ?>


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
                
                <th></th>
                <th>Nama Customer</th>
                <th>Site</th>
                <th>KTP</th>
                <th>NPWP</th>
                <th>SPPKP</th>
                <th>Foto Toko</th>
                <th>Action</th>
              </tr>
              
              <tr class="collapsed" data-toggle="collapse" data-target=".parent1Content">
                
                <td class="icon-class"></td>
                <td>Pioneer</td>
                <td>Satu</td>
                <td>Dua</td>
                <td>Tiga</td>
                <td>Empat</td>
                <td>Lima</td>
                

              </tr>
              <tr class="collapse parent1Content">
                <td></td>
                <td>Child A</td>
                <td>04/01/2017</td>
                <td>04/05/2017</td>
                <td>Child A</td>
                <td>04/01/2017</td>
                <td>Child A</td>
              </tr>
              
              <tr class="collapse parent1Content">
                <td></td>
                <td>Child B</td>
                <td>04/03/2017</td>
                <td>04/04/2017</td>
              </tr>    

              
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-script'); ?>
$('[data-toggle="collapse"]').on('click', function() {
  $(this).toggleClass('collapsed');
});
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/promotr2/resources/views/pages/promo/ledclub/ledclub2020.blade.php ENDPATH**/ ?>