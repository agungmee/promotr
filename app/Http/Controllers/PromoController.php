<?php

namespace App\Http\Controllers;

use App\Imports\PhilipsPromoImport;
use App\DataPhilips;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;

class PromoController extends Controller
{
    public function promoPhilipsIndex()
    {   
        $philipsPromo = DataPhilips::paginate(10);
        return view('pages.promo.2021.promophilips',compact('philipsPromo'));
    }

    public function philipsUpload(Request $request)
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
        $file->move('promo/dataphilips',$nama_file);

        // import data
        Excel::import(new PhilipsPromoImport, public_path('/promo/dataphilips/'.$nama_file));

        // notifikasi dengan session
        Session::flash('sukses','Data Promo Philips Berhasil Di Import!');
        
        // diarahkan kembali ke halaman sebelumnya
        return redirect()->back();
        
    }
    
    public function dataPromoPhilipsIndex()
    {   
        $dataPromoPhilips = DataPhilips::paginate(5);
        return view('pages.promo.2021.datapromophilips',compact('dataPromoPhilips'));
    }

    public function dataPromoPhilipsUpload(Request $request)
    {   
        //validate
        $this->validate($request, [
            'customer_name' => 'required',
            'periode' => 'required',
            'paket' => 'required',
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
        if ($request->hasFile('file1')) {$img1_name = "image_".$img1->getClientOriginalName();} else {$img1_name = "";}
        if ($request->hasFile('file2')) {$img2_name = time()."_". $img2->getClientOriginalName();} else {$img2_name = "";} 
        if ($request->hasFile('file3')) {$img3_name = time()."_". $img3->getClientOriginalName();} else {$img3_name = "";}
        if ($request->hasFile('file4')) {$img4_name = time()."_". $img4->getClientOriginalName();} else {$img4_name = "";}
        if ($request->hasFile('file5')) {$img5_name = time()."_". $img5->getClientOriginalName();} else {$img5_name = "";}
        if ($request->hasFile('file6')) {$img6_name = time()."_". $img6->getClientOriginalName();} else {$img6_name = "";}

        //move to image folder
        if ($request->hasFile('file1')) { $img1->move('promo/datapromophilips',$img1_name); }
        if ($request->hasFile('file2')) { $img2->move('promo/datapromophilips',$img2_name); }
        if ($request->hasFile('file3')) { $img3->move('promo/datapromophilips',$img3_name); }
        if ($request->hasFile('file4')) { $img4->move('promo/datapromophilips',$img4_name); }
        if ($request->hasFile('file5')) { $img5->move('promo/datapromophilips',$img5_name); }
        if ($request->hasFile('file6')) { $img6->move('promo/datapromophilips',$img6_name); }
        
        //left to get code
        $cust_code = substr(($request->customer_name),0,5);
        
        if ($request->led_p > 0) {$led_p = $request->led_p;} else {$led_p = "-";}
        if ($request->led_t > 0) {$led_t = $request->led_t;} else {$led_t = "-";}
        if ($request->dl_p > 0) {$dl_p = $request->dl_p;} else {$dl_p = "-";}
        if ($request->dl_t > 0) {$dl_t = $request->dl_t;} else {$dl_t = "-";}
        if ($request->wifi_p > 0) {$wifi_p = $request->wifi_p;} else {$wifi_p = "-";}
        if ($request->wifi_t > 0) {$wifi_t = $request->wifi_t;} else {$wifi_t = "-";}

        //store data
        DataPhilips::create([
        'cust_site' => $request->customer_site,
        'cust_code' => $cust_code,
        'cust_name' => $request->customer_name,
        'promo_name' => 'LEDClub 2021',
        'promo_periode' => $request->periode,
        'promo_paket' => $request->paket,
        'p_led' => $led_p,
        't_led' => $led_t,
        'p_dwlight' => $dl_p,
        't_dwlight' => $dl_t,
        'p_wifi' => $wifi_p,
        't_wifi' => $wifi_t,
        'image1' => $img1_name,
        'image2' => $img2_name,
        'image3' => $img3_name,
        'image4' => $img4_name,
        'image5' => $img5_name,
        'image6' => $img6_name,
        'nilai_benefit' => $request->benefit,
        'last_updated_by' => 'Someone',
        ]);

        return redirect()->back(); 
    }

    public function validasi(Request $request, $id)
    {
        $validasi = DataPhilips::find($id);
        $validasi->validation = $request->validasi;
        $validasi->save();

        return redirect()->back(); 
    }

    public function destroy($id)
    {   
        $gambar = DataPhilips::findorfail($id);

        $file1 = public_path('/promo/dataledclub2021/').$gambar->image1;
        $file2 = public_path('/promo/dataledclub2021/').$gambar->image2;
        $file3 = public_path('/promo/dataledclub2021/').$gambar->image3;
        $file4 = public_path('/promo/dataledclub2021/').$gambar->image4;
        $file5 = public_path('/promo/dataledclub2021/').$gambar->image5;
        $file6 = public_path('/promo/dataledclub2021/').$gambar->image6;

        if (file_exists($file1) || file_exists($file2) || file_exists($file3)|| file_exists($file4)|| file_exists($file5)|| file_exists($file6)) {
            @unlink($file1);
            @unlink($file2);
            @unlink($file3);
            @unlink($file4);
            @unlink($file5);
            @unlink($file6);
        }

        $gambar->delete();

        return redirect()->back();

    }

    public function search(Request $request)
    {
        $search = $request->search;

        $dataPromoPhilips = DB::table('data_ledclub2021')
        ->where('cust_name','like',"%".$search."%")
        ->paginate(5);

        return view('pages.promo.2021.dataphilips',compact('dataPromoPhilips'));
    }

}
