<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\UploadDoc;

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
        ->paginate();

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

    public function docIndex()
    {
        $data = UploadDoc::paginate(5);
        return view('pages.customers.doc_upload',compact('data'));
    }

    public function docUpload(Request $request)
    {   
        $docType = $request->doctype;

        $this->validate($request, [
            'image' => 'required|file|image|mimes:jpeg,jpg,png,svg|max:2048',
            'doctype' => 'required'
        ]);

        $image = $request->file('image');

        $nama_file = $image->getClientOriginalName();

        $folder_upload = 'imagedoc';
        
        $image->move($folder_upload,$nama_file);

        $cust_code = substr($nama_file,0,5);

        $mimeType = $image->getMimeType();

        $cust_name = preg_replace($mimeType,'.',substr($nama_file,0,100));


        UploadDoc::create([
            'cust_code' => $cust_code,
            'cust_name' => $cust_name,
            'image' => $nama_file,
            'doc_type' => $request->doctype,
        ]);

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
