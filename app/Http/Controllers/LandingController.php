<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Contact;
use App\Resep;
use App\Ulasan;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {

        $reseps = Resep::all();
        return view('welcome', compact('reseps'));
    }
    public function resep()
    {
        $kategori = Kategori::limit(4)->get();
        $reseps = Resep::paginate(4);
        $paginate = Paginator::useBootstrap();

        // $kategori_resep = DB::table('kategori_resep')->get();
        return view('landing.resep', compact('kategori', 'reseps', 'paginate'));
    }
    public function show(Resep $resep,Ulasan $ulasan, $id){
        $resep = Resep::find($id);


        return view('landing.resep_detail', compact('resep'));
    }
    // public function store_ulasan(Request $request){
    //     $ulasan = Ulasan::create([
    //         "nama"=>$request->input("nama"),
    //         "pesan"=>$request->input("pesan"),
    //     ]);
    //     $ulasan->resep()->sync($request->input('resep', []));
    //     return view('landing.resep_detail')->with('successMsg','Contact Form Success .');

    // }
    public function hotresep(Resep $hot){
        $hot = Resep::orderBy('created_at', 'ASC')->take(3)->get()->firstOrfail();
        return view('landing.resep_detail', compact('hot'));
    }
    public function contact(){

        $contact = Contact::all();
        return view('landing.contact', compact('contact'));
    }
    public function store(Request $request){
        Contact::create([
            "name"=>$request->input("name"),
            "email"=>$request->input("email"),
            "message"=>$request->input("message"),
        ]);
        return view('landing.contact')->with('successMsg','Contact Form Success .');

    }
}
