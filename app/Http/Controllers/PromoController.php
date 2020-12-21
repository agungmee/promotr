<?php

namespace App\Http\Controllers;

use App\Imports\Philips2021Import;
use App\DataPhilips2021;
use Session;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

class PromoController extends Controller
{
    public function philips2021Index()
    {   
        $promo2021 = DataPhilips2021::paginate(10);
        return view('pages.promo.2021.philips2021',compact('promo2021'));
    }

    public function philips2021Upload(Request $request)
    {
        // validate
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();

        // upload ke folder listcustomer dalam folder public/promo
        $file->move('promo/philips2021',$nama_file);

        // import data
        Excel::import(new Philips2021Import, public_path('/promo/philips2021/'.$nama_file));

        // notifikasi dengan session
        Session::flash('sukses','Data Promo Philips 2021 Berhasil Di Import!');
        
        // diarahkan kembali ke halaman utama
        return redirect('/philips2021');
        
    }
    
    public function dataLedclubIndex()
    {   
        $dataledclub2021 = DataPhilips2021::paginate(5);
        return view('pages.promo.2021.dataledclub2021',compact('dataledclub2021'));
    }

    public function dataLedclubUpload(Request $request)
    {   
        //validate
        $this->validate($request, [
            'customer_name' => 'required',
            'periode' => 'required',
            'paket' => 'required',
            'file1' => 'required',
            'file2' => 'required',
            'file3' => 'required',
            'file4' => 'required',
            'file5' => 'required',
            'file6' => 'required',
            'benefit' => 'required',
        ]);
        
        //get data file
        $img1 = $request->file('file1');
        $img2 = $request->file('file2');
        $img3 = $request->file('file3');
        $img4 = $request->file('file4');
        $img5 = $request->file('file5');
        $img6 = $request->file('file6');

        //get file name
        $img1_name = time()."_". $img1->getClientOriginalName();
        $img2_name = time()."_". $img2->getClientOriginalName();
        $img3_name = time()."_". $img3->getClientOriginalName();
        $img4_name = time()."_". $img4->getClientOriginalName();
        $img5_name = time()."_". $img5->getClientOriginalName();
        $img6_name = time()."_". $img6->getClientOriginalName();

        //move to image folder
        $img1->move('promo/dataledclub2021',$img1_name);
        $img2->move('promo/dataledclub2021',$img2_name);
        $img3->move('promo/dataledclub2021',$img3_name);
        $img4->move('promo/dataledclub2021',$img4_name);
        $img5->move('promo/dataledclub2021',$img5_name);
        $img6->move('promo/dataledclub2021',$img6_name);
        
        //left to get code
        $cust_code = substr(($request->customer_name),0,5);
        
        //store data
        DataPhilips2021::create([
        'cust_site' => $request->customer_site,
        'cust_code' => $cust_code,
        'cust_name' => $request->customer_name,
        'promo_name' => 'LEDClub 2021',
        'promo_periode' => $request->periode,
        'promo_paket' => $request->paket,
        'p_led' => $request->led_p,
        't_led' => $request->led_t,
        'p_dwlight' => $request->dl_p,
        't_dwlight' => $request->dl_t,
        'p_wifi' => $request->wifi_p,
        't_wifi' => $request->wifi_p,
        'image1' => $img1_name,
        'image2' => $img2_name,
        'image3' => $img3_name,
        'image4' => $img4_name,
        'image5' => $img5_name,
        'image6' => $img6_name,
        'nilai_benefit' => $request->benefit,
        ]);

        return redirect()->back();   
    }

}
