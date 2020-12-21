<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','PromoTR - Data LEDClub 2021'); ?>
<?php $__env->startSection('title_header','Data LEDClub 2021'); ?>

<!-- Import Excel -->
<div class="modal fade" id="uploadData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action=" <?php echo e(route('philips2021upload')); ?> " enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Data LEDClub</h5>
        </div>
        <div class="modal-body">

          <?php echo e(csrf_field()); ?>


          <div class="form-group">
            <label>Customer Territory</label>
            <select name="customer_site" class="form-control select2">
              <option value="jakarta1">Jakarta1</option>
              <option value="jakarta2">Jakarta2</option>
              <option value="jakarta3">Jakarta3</option>
              <option value="jakarta4">Jakarta4</option>
              <option value="jakarta5">Jakarta5</option>
              <option value="tangerang">Tangerang</option>
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
              <option value="januari">Januari</option>
              <option value="februari">Februari</option>
              <option value="maret">Maret</option>
              <option value="april">April</option>
              <option value="mei">Mei</option>
              <option value="juni">Juni</option>
              <option value="juli">Juli</option>
              <option value="agustus">Agustus</option>
              <option value="september">September</option>
              <option value="oktober">Oktober</option>
              <option value="november">November</option>
              <option value="desember">Desember</option>
            </select>
          </div>

          <div class="form-group">
            <label>Paket</label>
            <select name="paket" class="form-control select2">
              <option value="paket a">Paket A</option>
              <option value="paket b">Paket B</option>
              <option value="paket c">Paket C</option>
              <option value="paket d">Paket D</option>
              <option value="paket e"s>Paket E</option>
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
            <input name="file1" type="file" name="file" required="required">
          </div>
          <label>Image2</label>
          <div class="form-group">
            <input name="file2" type="file" name="file" required="required">
          </div>
          <label>Image3</label>
          <div class="form-group">
            <input name="file3" type="file" name="file" required="required">
          </div>
          <label>Image4</label>
          <div class="form-group">
            <input name="file4" type="file" name="file" required="required">
          </div>
          <label>Image5</label>
          <div class="form-group">
            <input name="file5" type="file" name="file" required="required">
          </div>
          <label>Image6</label>
          <div class="form-group">
            <input name="file6" type="file" name="file" required="required">
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
                <th>Teritori</th>
                <th>Periode</th>
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
              
              <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>     
                <td>  </td>             
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>     
                <td>  </td>             
                <td>  </td>
                <td><a href="#" class="btn btn-primary">Update</a></td>
              </tr>
              
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/promotr2/resources/views/pages/promo/2021/dataledclub2021.blade.php ENDPATH**/ ?>