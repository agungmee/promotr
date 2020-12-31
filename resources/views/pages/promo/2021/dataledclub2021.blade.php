@extends('layouts.app')
@section('content')
@section('title','PromoTR - Data LEDClub 2021')
@section('title_header','Data LEDClub 2021')

<!-- Upload Data -->
<div class="modal fade" id="uploadData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action=" {{route('philips2021upload')}} " enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Data LEDClub</h5>
        </div>
        <div class="modal-body">

          {{ csrf_field() }}

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

{{-- Modal Edit Validasi --}}

<div class="modal fade" id="editDataValidasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    @foreach ($dataledclub2021 as $data)
    <form method="post" action=" dataledclub2021/validasi/{{$data->id}} " enctype="multipart/form-data">
      @endforeach
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Validasi LEDClub</h5>
        </div>
        <div class="modal-body">

          {{ csrf_field() }}

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
            <form action=" {{route('dataledclub2021-search')}} " method="GET" role="search">
              {{ csrf_field() }}
              <div class="input-group">
                <input type="search" class="form-control" name="search" placeholder="Search" id="search">
                <div class="input-group-btn">
                  <button class="btn btn-primary"><i class="fas fa-search"></i></button><a href=" {{route('dataledclub2021')}} " button class="btn btn-success"><i class="fas fa-sync"></i></a>
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

            @foreach ($dataledclub2021 as $led2021)
              <tr>
                <td> {{$led2021->cust_name}} </td>
                <td> {{$led2021->cust_site}} </td>
                <td> {{$led2021->promo_periode}} </td>
                <td>  </td>
                <td> {{$led2021->promo_paket}} </td>
                <td> {{$led2021->p_led}} </td>
                <td> {{$led2021->t_led}} </td>
                <td> {{$led2021->p_dwlight}} </td>     
                <td> {{$led2021->t_dwlight}} </td>             
                <td> {{$led2021->p_wifi}} </td>
                <td> {{$led2021->t_wifi}} </td>
                <p class="imgList" style="max-width: 1000px;">
                @if ( Str::length($led2021->image1) > 0)
                <td><a href=" {{ url('/promo/dataledclub2021/'.$led2021->image1) }} " data-fancybox="images"> <img width="100px" src=" {{ url('/promo/dataledclub2021/'.$led2021->image1) }} " alt=""></a></td>
                @else
                <td> No Image </td>
                @endif 
                @if ( Str::length($led2021->image2) > 0)
                <td><a href=" {{ url('/promo/dataledclub2021/'.$led2021->image2) }} " data-fancybox="images"> <img width="100px" src=" {{ url('/promo/dataledclub2021/'.$led2021->image2) }} " alt=""></a></td>
                @else
                <td> No Image </td>
                @endif 
                @if ( Str::length($led2021->image3) > 0)
                <td><a href=" {{ url('/promo/dataledclub2021/'.$led2021->image3) }} " data-fancybox="images"> <img width="100px" src=" {{ url('/promo/dataledclub2021/'.$led2021->image3) }} " alt=""></a></td>
                @else
                <td> No Image </td>
                @endif
                @if ( Str::length($led2021->image4) > 0)
                <td><a href=" {{ url('/promo/dataledclub2021/'.$led2021->image4) }} " data-fancybox="images"> <img width="100px" src=" {{ url('/promo/dataledclub2021/'.$led2021->image4) }} " alt=""></a></td>
                @else
                <td> No Image </td>
                @endif 
                @if ( Str::length($led2021->image5) > 0)
                <td><a href=" {{ url('/promo/dataledclub2021/'.$led2021->image5) }} " data-fancybox="images"> <img width="100px" src=" {{ url('/promo/dataledclub2021/'.$led2021->image5) }} " alt=""></a></td>
                @else
                <td> No Image </td>
                @endif 
                @if ( Str::length($led2021->image6) > 0)
                <td><a href=" {{ url('/promo/dataledclub2021/'.$led2021->image6) }} " data-fancybox="images"> <img width="100px" src=" {{ url('/promo/dataledclub2021/'.$led2021->image6) }} " alt=""></a></td>
                @else
                <td> No Image </td>
                @endif 
                </p>
                <td>{{ rupiah($led2021->nilai_benefit)}}</td>
                <td class=""> <a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#editDataValidasi"></i></a>  {{ $led2021->validation }} </td>
                <td>
                <div class="input-group-btn">
                  <a href="#"><i class="fas fa-edit"></i></a> | <a href=" dataledclub2021/delete/{{$led2021->id}}" onclick="return confirm('Yakin Mau Hapus?');"><i class="fas fa-trash" style="color: red;"></i></a>
                </div>
                </td>
              </tr>
              @endforeach
            </table>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

{{-- <script type="text/javascript">
$(document).ready(function(){
  $(".zoom").fancybox({
    'overlayShow'   : false,
    'transitionIn'  : 'elastic',
    'transitionOut' : 'elastic'
  });
}); 
</script> --}}

@endsection


