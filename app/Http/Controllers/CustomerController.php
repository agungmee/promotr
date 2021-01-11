<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

use Session;

use Illuminate\Support\Facades\DB;

use App\Exports\ListCustomerExport;
use App\Imports\ListCustomerImport;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $customer = Customer::paginate(10);
        return view('pages.customers.list_customer',compact('customer'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $customer = DB::table('customers')
        ->where('cust_name','like',"%".$search."%")
        ->paginate(5);

        return view('pages.customers.list_customer',compact('customer'));
    }

    public function export()
    {
        return Excel::download(new ListCustomerExport, 'listcustomer.xlsx');
    }

    public function import(Request $request)
    {
        // validate
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();

        // upload ke folder listcustomer dalam folder public 
        $file->move('listcustomer',$nama_file);

        // import data
        Excel::import(new ListCustomerImport, public_path('/listcustomer/'.$nama_file));

        // notifikasi dengan session
        Session::flash('sukses','Data Customer Berhasil Di Import!');
        
        // diarahkan kembali ke halaman utama
        return redirect('/list-customers');
    }

    public function docUpload(Request $request, $id)
    {   
        if ($files = $request->file('ktp')) {
            $destinationPath = 'cust_doc/';
            $imageDisplay = date('YmdHis') . "_" . $request->file('ktp')->getClientOriginalName();
            $files->move($destinationPath, $imageDisplay);
            $update['ktp_image'] = "$imageDisplay";
            Customer::where('id',$id)->update($update);
        }

        if ($files = $request->file('npwp')) {
            $destinationPath = 'cust_doc/';
            $imageDisplay = date('YmdHis') . "_" . $request->file('npwp')->getClientOriginalName();
            $files->move($destinationPath, $imageDisplay);
            $update['npwp_image'] = "$imageDisplay";
            Customer::where('id',$id)->update($update);
        }

        if ($files = $request->file('sppkp')) {
            $destinationPath = 'cust_doc/';
            $imageDisplay = date('YmdHis') . "_" . $request->file('sppkp')->getClientOriginalName();
            $files->move($destinationPath, $imageDisplay);
            $update['sppkp_image'] = "$imageDisplay";
            Customer::where('id',$id)->update($update);
        }

        if ($files = $request->file('toko')) {
            $destinationPath = 'cust_doc/';
            $imageDisplay = date('YmdHis') . "_" . $request->file('toko')->getClientOriginalName();
            $files->move($destinationPath, $imageDisplay);
            $update['toko_image'] = "$imageDisplay";
            Customer::where('id',$id)->update($update);
        }

        if ($files = $request->file('owner')) {
            $destinationPath = 'cust_doc/';
            $imageDisplay = date('YmdHis') . "_" . $request->file('owner')->getClientOriginalName();
            $files->move($destinationPath, $imageDisplay);
            $update['owner_image'] = "$imageDisplay";
            Customer::where('id',$id)->update($update);
        }
        return redirect()->back();
    
    }

    public function destroy($id)
    {   
        //
    }

}
