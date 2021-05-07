<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyResepRequest;
use App\Http\Requests\StoreResepRequest;
use App\Http\Requests\UpdateResepRequest;
use App\Resep;
use App\User;
use App\Role;
use App\Kategori;
use Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ResepsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('resep_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $reseps = DB::table('resep')
        // ->leftjoin('users','resep.user_id','=','users.id')
        // ->select('users.name','resep.*')
        // ->paginate(5);
        $name = Auth::user()->name;
        $data_resep = Resep::all();
        $users = User::all()->pluck('name', 'id');

        $reseps = Resep::where('name', '=', $name)->get();

        return view('admin.reseps.index', compact('reseps', 'users', 'data_resep'));
    }

    public function create()
    {
        abort_if(Gate::denies('resep_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kategories = Kategori::all()->pluck('nama_kategori', 'id');
        $users = User::all()->pluck('name', 'id');
        // $gambar = Resep::all()->pluck('gambar', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.reseps.create', compact('kategories', 'users'));
    }

    public function store(StoreResepRequest $request)
    {
        // $gambar = Resep::create($request->all());

        // foreach ($request->input('gambar', []) as $file) {
        //     $gambar->addMedia(public_path('images' . $file))->toMediaCollection('gambar');
        // }

        $imgName = $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images'), $imgName);

        $resep = Resep::create([
            "nama_resep"=>$request->input("nama_resep"),
            "name"=>$request->input("name"),
            "description"=>$request->input("description"),
            "alat_bahan"=>$request->input("alat_bahan"),
            "step"=>$request->input("step"),
            "gambar"=>$imgName,
        ]);

        // $file = $request->file('gambar');
        // $tujuan_upload = 'images';
		// $this->move($tujuan_upload,$file->getClientOriginalName());
        // $resep = Resep::create($request->all());
        $resep->kategori()->sync($request->input('kategori', []));
        $resep->users()->sync($request->input('users', []));

        return redirect()->route('admin.reseps.index');
    }

    public function edit(Resep $resep)
    {
        abort_if(Gate::denies('resep_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kategories = Kategori::all()->pluck('nama_kategori', 'id');

        $users = User::all()->pluck('name', 'id');


        $resep->load('kategori', 'users');

        return view('admin.reseps.edit', compact('kategories', 'users', 'resep'));
    }

    public function update(UpdateResepRequest $request, Resep $resep)
    {
        // $resep->update($request->all());
        $resep->kategori()->sync($request->input('kategori', []));
        $resep->users()->sync($request->input('users', []));

        $resep->nama_resep = $request->input("nama_resep");
        $resep->name = $request->input("name");
        $resep->description = $request->input("description");
        $resep->alat_bahan = $request->input("alat_bahan");
        $resep->step = $request->input("step");


        if($request->file('gambar') == ""){
            $resep->gambar = $resep->gambar;
        }else{
            $imgName = $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images'), $imgName);
            $resep->gambar = $imgName;
        }

        $resep->save();

        return redirect()->route('admin.reseps.index');
    }

    public function show(Resep $resep)
    {
        abort_if(Gate::denies('resep_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resep->load('kategori', 'users');
        $users = User::all()->pluck('name', 'id');
        // $resep->load('users');

        return view('admin.reseps.show', compact('resep', 'users'));
    }

    public function destroy(Resep $resep)
    {
        abort_if(Gate::denies('resep_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resep->delete();

        return back();
    }

    public function massDestroy(MassDestroyResepRequest $request)
    {
        Resep::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
