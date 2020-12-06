@extends('layouts.app')
@section('content')
@section('title','PromoTR - LEDClub 2020')
@section('title_header','LEDClub 2020')

<!-- Import Excel -->
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action="#" enctype="multipart/form-data">
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
                <th></th>
                <th>Nama Customer</th>
                <th>Site</th>
                <th>Total Benefit</th>
                <th>Total Realisasi</th>
                <th>Sisa Benefit</th>
                <th>Action</th>
              </tr>
              @foreach ($promoledclub as $ledclub)
              <tr class="collapsed" data-toggle="collapse" data-target=".parent1Content">
                {{-- <td class="p-0 text-center">
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                  </div>
                </td> --}}
                <td class="icon-class"></td>
                <td>Pioneer</td>
                <td>TR1</td>
                <td>10.000.000</td>
                <td>5.000.000</td>
                <td>5.000.000</td>
                {{-- <td><a href="#" class="btn btn-primary">Edit</a></td> --}}

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

              @endforeach
            </table>
            {{ $promoledclub->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
