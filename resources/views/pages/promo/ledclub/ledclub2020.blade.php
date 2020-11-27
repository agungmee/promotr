@extends('layouts.app')
@section('content')
@section('title','PromoTR - Doc Customers')
@section('title_header','Doc Customers')

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
                {{-- <th>
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                  </div>
                </th> --}}
                <th></th>
                <th>Nama Customer</th>
                <th>Site</th>
                <th>KTP</th>
                <th>NPWP</th>
                <th>SPPKP</th>
                <th>Foto Toko</th>
                <th>Action</th>
              </tr>
              {{-- @foreach ($customer as $cust) --}}
              <tr class="collapsed" data-toggle="collapse" data-target=".parent1Content">
                {{-- <td class="p-0 text-center">
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                  </div>
                </td> --}}
                <td class="icon-class"></td>
                <td>Pioneer</td>
                <td>Satu</td>
                <td>Dua</td>
                <td>Tiga</td>
                <td>Empat</td>
                <td>Lima</td>
                {{-- <td><a href="#" class="btn btn-primary">Edit</a></td> --}}

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

              {{-- @endforeach --}}
            </table>
            {{-- {{ $customer->links() }} --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('after-script')
$('[data-toggle="collapse"]').on('click', function() {
  $(this).toggleClass('collapsed');
});
@endpush
