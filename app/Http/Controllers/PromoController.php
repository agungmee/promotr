<?php

namespace App\Http\Controllers;

use App\Imports\LedclubImport;
use Session;

use App\PromoLedclub;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

class PromoController extends Controller
{
    public function ledclubIndex()
    {   
        $promoledclub = PromoLedclub::paginate(10);
        return view('pages.promo.ledclub.ledclub2020',compact('promoledclub'));
    }

    public function uploadLedclub(Request $request)
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
        $file->move('promoledclub',$nama_file);

        // import data
        Excel::import(new LedclubImport, public_path('/promoledclub/'.$nama_file));

        // notifikasi dengan session
        Session::flash('sukses','Data Promo LEDClub Berhasil Di Import!');
        
        // diarahkan kembali ke halaman utama
        return redirect('/ledclub2020');
        
    }
    

    
}
