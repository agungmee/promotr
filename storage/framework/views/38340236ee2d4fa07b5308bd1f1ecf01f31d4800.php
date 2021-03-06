<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','PromoTR - Philips 2021'); ?>
<?php $__env->startSection('title_header','Monitoring Promo Philips 2021'); ?>

<!-- Upload Data -->
<div class="modal fade" id="uploadData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action=" <?php echo e(url('philips/promo/upload')); ?> " enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Data LEDClub</h5>
        </div>
        <div class="modal-body">

          <?php echo e(csrf_field()); ?>


          <div class="form-group">
            <label>Customer Territory</label>
            <select name="customer_site" class="form-control select2">
              <option value="Jakarta1">Jakarta1</option>
              <option value="Jakarta2">Jakarta2</option>
              <option value="Jakarta3">Jakarta3</option>
              <option value="Jakarta4">Jakarta4</option>
              <option value="Jakarta5">Jakarta5</option>
              <option value="Tangerang">Tangerang</option>
            </select>
          </div>

          <div class="form-group">
            <label>Nama Customer</label>
            <select name="customer_name" class="form-control select2">
              <option>03806A_PIONEER ELECTRIC, KENARI</option>
              <option>Customer B</option>
              <option>Customer C</option>
            </select>
          </div>
          

          <div class="form-group">
            <label>Periode</label>
            <select name="periode" class="form-control select2">
              <option value="Januari">Januari</option>
              <option value="Februari">Februari</option>
              <option value="Maret">Maret</option>
              <option value="April">April</option>
              <option value="Mei">Mei</option>
              <option value="Juni">Juni</option>
              <option value="Juli">Juli</option>
              <option value="Agustus">Agustus</option>
              <option value="September">September</option>
              <option value="Oktober">Oktober</option>
              <option value="November">November</option>
              <option value="Desember">Desember</option>
            </select>
          </div>

          <div class="form-group">
            <label>Paket</label>
            <select name="paket" class="form-control select2">
              <option value="Paket A">Paket A</option>
              <option value="Paket B">Paket B</option>
              <option value="Paket C">Paket C</option>
              <option value="Paket D">Paket D</option>
              <option value="Paket E">Paket E</option>
            </select>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="">LED (p)</label>
              <input name="led_p" type="number" class="form-control" id="">
            </div>
            <div class="form-group col-md-2">
              <label for="">LED (t)</label>
              <input name="led_t" type="number" class="form-control" id="">
            </div>
            <div class="form-group col-md-2">
              <label for="">DL (p)</label>
              <input name="dl_p" type="number" class="form-control" id="">
            </div>
            <div class="form-group col-md-2">
              <label for="">DL (t)</label>
              <input name="dl_t" type="number" class="form-control" id="">
            </div>
            <div class="form-group col-md-2">
              <label for="">WIFI (p)</label>
              <input name="wifi_p" type="number" class="form-control" id="">
            </div>
            <div class="form-group col-md-2">
              <label for="">WIFI (t)</label>
              <input name="wifi_t" type="number" class="form-control" id="">
            </div>
          </div>

          <label>Image1</label>
          <div class="form-group">
            <input name="file1" type="file" name="file">
          </div>
          <label>Image2</label>
          <div class="form-group">
            <input name="file2" type="file" name="file">
          </div>
          <label>Image3</label>
          <div class="form-group">
            <input name="file3" type="file" name="file">
          </div>
          <label>Image4</label>
          <div class="form-group">
            <input name="file4" type="file" name="file">
          </div>
          <label>Image5</label>
          <div class="form-group">
            <input name="file5" type="file" name="file">
          </div>
          <label>Image6</label>
          <div class="form-group">
            <input name="file6" type="file" name="file">
          </div>

          <div class="form-group">
            <label>Nilai Benefit</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  Rp.
                </div>
              </div>
              <input name="benefit" type="text" class="form-control currency">
            </div>
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



<div class="modal fade" id="editDataValidasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <?php $__currentLoopData = $dataPromoPhilips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form method="post" action=" philips/promo/validasi/<?php echo e($data->id); ?> " enctype="multipart/form-data">
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Validasi LEDClub</h5>
        </div>
        <div class="modal-body">

          <?php echo e(csrf_field()); ?>


          <div class="form-group">
            <label>Update Validasi</label>
            <select name="validasi" class="form-control select2">
              <option value="Approved">Approved</option>
              <option value="Check Data">Check Data Display</option>
              <option value="Check Data Size">Check Data Size</option>
              <option value="Not Approved">Not Approved</option>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
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
              <button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#uploadData"><i class="fas fa-file-upload"></i> Upload </button>
              <a href="#"><button type="button" class="btn btn-primary mr-1"><i class="fas fa-file-export"></i> Export </button></a>  
            </div>
          <div class="card-header-form">
            <form action="dataledpromoPhilips/search" method="GET" role="search">
              <?php echo e(csrf_field()); ?>

              <div class="input-group">
                <input type="search" class="form-control" name="search" placeholder="Search" id="search">
                <div class="input-group-btn">
                  <button class="btn btn-primary"><i class="fas fa-search"></i></button><a href=" <?php echo e(url('philips/promo')); ?> " button class="btn btn-success"><i class="fas fa-sync"></i></a>
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
                <th>Teritori</th>
                <th>Periode Tahun</th>
                <th>Periode Bulan</th>
                <th>Nama Sales</th>
                <th>Paket</th>
                <th>Size LED (p)</th>
                <th>Size LED (t)</th>
                <th>Size DL (p)</th>
                <th>Size DL (t)</th>
                <th>Size Wifi (p)</th>
                <th>Size Wifi (t)</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Image 3</th>
                <th>Image 4</th>
                <th>Image 5</th>
                <th>Image 6</th>
                <th>Nilai Benefit</th>
                <th>Validasi Agung</th>
                <th>Action</th>
              </tr>
              <?php 
                function rupiah($angka)
                {
                  $format_rupiah = "Rp " . number_format($angka,2,',','.');
                  return $format_rupiah;
                }
              ?>

            <?php $__currentLoopData = $dataPromoPhilips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $led2021): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td> <?php echo e($led2021->cust_name); ?> </td>
                <td> <?php echo e($led2021->cust_site); ?> </td>
                <td>  </td>
                <td> <?php echo e($led2021->promo_periode); ?> </td>
                <td>  </td>
                <td> <?php echo e($led2021->promo_paket); ?> </td>
                <td> <?php echo e($led2021->p_led); ?> </td>
                <td> <?php echo e($led2021->t_led); ?> </td>
                <td> <?php echo e($led2021->p_dwlight); ?> </td>     
                <td> <?php echo e($led2021->t_dwlight); ?> </td>             
                <td> <?php echo e($led2021->p_wifi); ?> </td>
                <td> <?php echo e($led2021->t_wifi); ?> </td>
                <p class="imgList" style="max-width: 1000px;">
                <?php if( Str::length($led2021->image1) > 0): ?>
                <td><a href=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image1)); ?> " data-fancybox="images"> <img width="100px" src=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image1)); ?> " alt=""></a></td>
                <?php else: ?>
                <td> No Image </td>
                <?php endif; ?> 
                <?php if( Str::length($led2021->image2) > 0): ?>
                <td><a href=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image2)); ?> " data-fancybox="images"> <img width="100px" src=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image2)); ?> " alt=""></a></td>
                <?php else: ?>
                <td> No Image </td>
                <?php endif; ?> 
                <?php if( Str::length($led2021->image3) > 0): ?>
                <td><a href=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image3)); ?> " data-fancybox="images"> <img width="100px" src=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image3)); ?> " alt=""></a></td>
                <?php else: ?>
                <td> No Image </td>
                <?php endif; ?>
                <?php if( Str::length($led2021->image4) > 0): ?>
                <td><a href=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image4)); ?> " data-fancybox="images"> <img width="100px" src=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image4)); ?> " alt=""></a></td>
                <?php else: ?>
                <td> No Image </td>
                <?php endif; ?> 
                <?php if( Str::length($led2021->image5) > 0): ?>
                <td><a href=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image5)); ?> " data-fancybox="images"> <img width="100px" src=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image5)); ?> " alt=""></a></td>
                <?php else: ?>
                <td> No Image </td>
                <?php endif; ?> 
                <?php if( Str::length($led2021->image6) > 0): ?>
                <td><a href=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image6)); ?> " data-fancybox="images"> <img width="100px" src=" <?php echo e(url('/promo/datapromophilips/'.$led2021->image6)); ?> " alt=""></a></td>
                <?php else: ?>
                <td> No Image </td>
                <?php endif; ?> 
                </p>
                <td><?php echo e(rupiah($led2021->nilai_benefit)); ?></td>
                <td class=""> <a href="#"><i class="btn btn-primary fas fa-edit" data-toggle="modal" data-target="#editDataValidasi">Pending</i></a>  <?php echo e($led2021->validation); ?> </td>
                <td>
                <div class="btn-group" role="group">
                  <a href="#" type="button" class="btn btn-primary"><i class="fas fa-edit">Edit</i></a>
                  <a href=" philips/delete/<?php echo e($led2021->id); ?>"  type="button" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus?');"><i class="fas fa-trash">Delete</i></a>
                </div>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/promotr2/resources/views/pages/promo/2021/datapromophilips.blade.php ENDPATH**/ ?>