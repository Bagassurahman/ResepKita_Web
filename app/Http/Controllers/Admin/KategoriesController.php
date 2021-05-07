<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyKategoriRequest;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use App\Resep;
use App\User;
use App\Kategori;
use Illuminate\Support\Str;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class KategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('kategori_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kategories = Kategori::all();

        return view('admin.kategories.index', compact('kategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('kategori_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kategories = Kategori::all();
        // $users = User::all()->pluck('name', 'id');
        // $gambar = Resep::all()->pluck('gambar', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.kategories.create', compact('kategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKategoriRequest $request)
    {
        $imgName = $request->gambar_sampul->getClientOriginalName();
        $request->gambar_sampul->move(public_path('images'), $imgName);
        $slug = Str::slug($request->nama_kategori);

        Kategori::create([
            "nama_kategori"=>$request->input("nama_kategori"),
            "gambar_sampul"=>$imgName,
            "slug"=>$slug,
            "keterangan"=>$request->input("keterangan"),
        ]);

        return redirect()->route('admin.kategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('kategori_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $kategori = Kategori::find($id);

        return view('admin.kategories.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('kategori_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kategori = Kategori::find($id);

        return view('admin.kategories.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKategoriRequest $request, Kategori $kategori, $id)
    {

        $kategori = Kategori::find($id);
        $slug = Str::slug($request->nama_kategori);
        $kategori->nama_kategori = $request->input("nama_kategori");
        $kategori->slug = $slug;
        $kategori->keterangan = $request->input("keterangan");


        if($request->file('gambar_sampul') == ""){
            $kategori->gambar_sampul = $kategori->gambar_sampul;
        }else{
            $imgName = $request->gambar_sampul->getClientOriginalName();
            $request->gambar_sampul->move(public_path('images'), $imgName);
            $kategori->gambar_sampul = $imgName;
        }

        $kategori->save();

        return redirect()->route('admin.kategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori, $id)
    {
        abort_if(Gate::denies('kategori_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kategori = Kategori::find($id);
        $kategori->delete();

        return back();
    }
    public function massDestroy(MassDestroyKategoriRequest $request)
    {
        Kategori::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
