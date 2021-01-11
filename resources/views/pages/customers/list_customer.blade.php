@extends('layouts.app')
@section('content')
@section('title','PromoTR - List Customers')
@section('title_header','List Customers')

{{-- Modal Import --}}
{{-- notifikasi form validasi --}}
<div class="container">
@if ($errors->has('file'))
<span class="invalid-feedback" role="alert">
  <strong>{{ $errors->first('file') }}</strong>
</span>
@endif

{{-- notifikasi sukses --}}
@if ($sukses = Session::get('sukses'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
  <strong>{{ $sukses }}</strong>
</div>
@endif

<!-- Import Excel -->
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action=" {{route('customer-import')}} " enctype="multipart/form-data">
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

{{-- Modal Edit Data Image --}}

<div class="modal fade" id="editDataImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    @foreach ($customer as $cust)
    <form method="post" action=" doc-customer/update/{{$cust->id }} " enctype="multipart/form-data">
      @endforeach
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Dokumen Customer</h5>
        </div>
        <div class="modal-body">

          {{ csrf_field() }}

          <div class="form-group">
            <label>Foto KTP</label>
            <div class="form-group">
              <input name="ktp" type="file">
            </div>
            <label>Foto NPWP</label>
            <div class="form-group">
              <input name="npwp" type="file">
            </div>
            <label>Foto SPPKP</label>
            <div class="form-group">
              <input name="sppkp" type="file">
            </div>
            <label>Foto Toko</label>
            <div class="form-group">
              <input name="toko" type="file">
            </div>
            <label>Foto Owner Toko</label>
            <div class="form-group">
              <input name="owner" type="file">
            </div>
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
            <a href=" {{route('customer-export')}} "><button type="button" class="btn btn-primary mr-1"><i class="fas fa-file-export"></i> Export </button></a>
            </div>
          <div class="card-header-form">
              <form action=" {{ route('customer-search') }} " method="GET">
              <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search">
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
                <th>Customer Code</th>
                <th>Customer Name</th>
                <th>Site</th>
                <th>Address</th>
                <th>Salesrep</th>
                <th>KTP</th>
                <th>NPWP</th>
                <th>SPPKP</th>
                <th>Foto Toko</th>
                <th>Foto Owner</th>
                <th>Action</th>
              </tr>
              @foreach ($customer as $cust)
              <tr>
                {{-- <td class="p-0 text-center">
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                  </div>
                </td> --}}
                <td> {{$cust->cust_code}} </td>
                <td> {{$cust->cust_name}} </td>
                <td> {{$cust->cust_site}} </td>
                <td> {{$cust->cust_address}} </td>
                <td> {{$cust->sales_name}} </td>
                <p class="imgList" style="max-width: 1000px;">

                  @if ( Str::length($cust->ktp_image) > 0)
                    <td><a href=" {{ url('/cust_doc/'.$cust->ktp_image) }} " data-fancybox="images"> <img width="100px" src=" {{ url('/cust_doc/'.$cust->ktp_image) }} " alt=""></a></td>
                  @else
                    <td> No Image </td>
                  @endif 
                
                  @if ( Str::length($cust->npwp_image) > 0)
                    <td><a href=" {{ url('/cust_doc/'.$cust->npwp_image) }} " data-fancybox="images"> <img width="100px" src=" {{ url('/cust_doc/'.$cust->npwp_image) }} " alt=""></a></td>
                  @else
                    <td> No Image </td>
                  @endif 

                  @if ( Str::length($cust->sppkp_image) > 0)
                    <td><a href=" {{ url('/cust_doc/'.$cust->sppkp_image) }} " data-fancybox="images"> <img width="100px" src=" {{ url('/cust_doc/'.$cust->sppkp_image) }} " alt=""></a></td>
                  @else
                    <td> No Image </td>
                  @endif 

                  @if ( Str::length($cust->toko_image) > 0)
                    <td><a href=" {{ url('/cust_doc/'.$cust->toko_image) }} " data-fancybox="images"> <img width="100px" src=" {{ url('/cust_doc/'.$cust->toko_image) }} " alt=""></a></td>
                  @else
                    <td> No Image </td>
                  @endif 

                  @if ( Str::length($cust->owner_image) > 0)
                    <td><a href=" {{ url('/cust_doc/'.$cust->owner_image) }} " data-fancybox="images"> <img width="100px" src=" {{ url('/cust_doc/'.$cust->owner_image) }} " alt=""></a></td>
                  @else
                    <td> No Image </td>
                  @endif 

                  <td>
                    <div class="btn-group" role="group">
                      <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#editDataImage"> Edit </a>
                      <a href=" " type="button" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus?');"> Delete </i></a>
                    </div>
                  </td>
    
              </tr>
              @endforeach
            </table>
            {{ $customer->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
