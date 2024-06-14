<?php

namespace App\Http\Controllers;

use App\LabelRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function masterdata()
    {
        $masterdata = LabelRecord::orderBy('id', 'desc')->get();
        return view("masterdata", ["key" => "masterdata", "lr" => $masterdata]);
    }

    public function addlabelrecord()
    {
        return view("formadd", ["key" => "labelrecord"]);
    }

    public function savelabelrecord(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'lableName' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'establishedYear' => 'required|integer|min:1900|max:' . date('Y'),
            'ceo' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'website' => 'required|url|max:255',
            'musicGenre' => 'required|string|max:255',
            'famousArtists' => 'required|string|max:255',
            'numberOfAlbums' => 'required|integer|min:0',
            'revenue' => 'required|numeric|min:0',
        ]);
    
        $labelRecord = LabelRecord::create([
            'lableName' => $request->lableName,
            'adress' => $request->adress,
            'city' => $request->city,
            'country' => $request->country,
            'establishedYear' => $request->establishedYear,
            'ceo' => $request->ceo,
            'contact' => $request->contact,
            'website' => $request->website,
            'musicGenre' => $request->musicGenre,
            'famousArtists' => $request->famousArtists,
            'numberOfAlbums' => $request->numberOfAlbums,
            'revenue' => $request->revenue,
        ]);
    
        return redirect("masterdata")->with('alert', 'Data Berhasil Disimpan');
    }

    public function about()
    {
        return view("about", ["key" => "about"]);
    }

    public function faq()
    {
        return view("faq", ["key" => "faq"]);
    }
    public function editlabelRecord($id){

        $labelRecord = LabelRecord::find($id);
        return view("formedit",["key"=>"masterdata","l"=> $labelRecord]);
    }
    public function updatelabelRecord($id,Request $request)
    {
        $labelRecord = LabelRecord::find($id);

        $labelRecord->lableName = $request ->lableName;
        $labelRecord->adress = $request ->adress;
        $labelRecord->city = $request ->city;
        $labelRecord->country = $request ->country;
        $labelRecord->establishedYear = $request ->establishedYear;
        $labelRecord->ceo = $request ->ceo;
        $labelRecord->contact = $request ->contact;
        $labelRecord->musicGenre = $request ->musicGenre;
        $labelRecord->famousArtists = $request ->famousArtists;
        $labelRecord->numberOfAlbums = $request ->numberOfAlbums;
        $labelRecord->revenue = $request ->revenue;
        
        $labelRecord->save();
        return redirect("/masterdata")->with('alert','Data Berhasi di Ubah');
    }
    public function deletelabelRecord($id){

        $labelRecord = LabelRecord::find($id);
        $labelRecord->delete();

        return redirect("/masterdata")->with('alert','Data Berhasi di Hapus');
    }
    public function login()
    {
        return view("login");
    }
    public function edituser()
    {
        return view('edituser',["key"=> ""] );
    }
    public function updateuser(Request $request)
    {
        if ($request ->password_baru == $request->konfirmasi_password)
        {
            $user = Auth::user();

            $user->password = bcrypt($request->password_baru) ;

            $user->save();
            return redirect("/user")->with("info","Password Berhasil Diubah");
        }
        else
        {
            return redirect("/user")->with("info","Password Gagal Diubah");
        }
    }
}
