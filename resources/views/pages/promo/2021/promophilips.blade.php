@extends('layouts.app')
@section('content')
@section('title','PromoTR - Philips 2021')
@section('title_header','Monitoring Promo Philips 2021')

<!-- Import Excel -->
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action="  " enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
        </div>
        <div class="modal-body">

          {{ csrf_field() }}

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
                {{-- <th>
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                  </div>
                </th> --}}
                <th>Nama Customer</th>
                <th>Teritori</th>
                <th>Nama Promo</th>
                <th>Periode</th>
                <th>Nama Sales</th>
                <th>Nilai Benefit</th>
                <th>Nilai Realisasi</th>
                <th>Sisa Benefit</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              <?php 
                function rupiah($angka)
                {
                  $format_rupiah = "Rp " . number_format($angka,2,',','.');
                  return $format_rupiah;
                }
              ?>
              @foreach ($philipsPromo as $promo)
              <tr>
                <td> {{$promo->cust_name}} </td>
                <td> {{$promo->cust_site}} </td>
                <td> {{$promo->promo_name}} </td>
                <td> {{$promo->promo_period}} </td>
                <td> {{$promo->sales_name}} </td>
                <td> {{ rupiah($promo->nilai_benefit)}} </td>
                <td> {{ rupiah($promo->nilai_realisasi)}} </td>
                <td> {{rupiah($promo->nilai_benefit - $promo->nilai_realisasi)}} </td>

                @if ($promo->nilai_benefit - $promo->nilai_realisasi > 0)
                <td>Belum Selesai</td>
                @else
                <td>Selesai</td>
                @endif
                
                <td><a href="#" class="btn btn-primary">Update</a></td>
              </tr>
              @endforeach
            </table>
            {{ $philipsPromo->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
