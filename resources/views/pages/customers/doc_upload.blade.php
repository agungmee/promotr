@extends('layouts.app')
@section('content')
@section('title','PromoTR - Upload Customer Document')
@section('title_header','Upload Customers Document')

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

<!-- Upload Image -->
<div class="modal fade" id="uploadImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action="{{route('doc-upload')}}" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Image</h5>
        </div>
        <div class="modal-body">
          {{ csrf_field() }}

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
                {{-- <th>
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                  </div>
                </th> --}}
                <th>Code</th>
                <th>Customer Name</th>
                <th>Doc Type</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
              @foreach ($data as $d)
              <tr>
                {{-- <td class="p-0 text-center">
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                  </div>
                </td> --}}
                <td> {{$d->cust_code}} </td>
                <td> {{$d->cust_name}} </td>
                <td> {{$d->doc_type}} </td>
                <td><img width="100px" src=" {{ url('/imagedoc/'.$d->image) }} " alt="">  </td>
                <td><a href="doc-customer/delete/{{$d->upload_id}}" class="btn btn-danger">Delete</a></td>
              </tr>
              @endforeach
            </table>
            {{ $data->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
