<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kelolaPenilaian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KelolaPenilaianController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = kelolaPenilaian::where('kategori', 'like', '%' . $request->fiter_keywords . '%')
                ->where('jenis', 'like', '%' . $request->fiter_keywords2 . '%')
                ->get();
            return view('page.admin.kelolaPenilaian.list', compact('collection'));
        }
        return view('page.admin.kelolaPenilaian.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.admin.kelolaPenilaian.input', ['kelolaPenilaian' => new KelolaPenilaian]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori' => 'required',
            'jenis' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            } else if ($errors->has('kategori')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kategori'),
                ]);
            } else if ($errors->has('jenis')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jenis'),
                ]);
            }
        }
        $kelolapenilaian = new kelolaPenilaian;
        $kelolapenilaian->nama = $request->nama;
        $kelolapenilaian->kategori = $request->kategori;
        $kelolapenilaian->jenis = $request->jenis;
        $kelolapenilaian->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Berhasil menambahkan penilaian!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::where('role', '!=', 2)->get();
        $item = User::find($id);
        return view('page.admin.kelolaPenilaian.show', ['item' => $item, 'users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelolapenilaian = kelolaPenilaian::find($id);
        return view('page.admin.kelolaPenilaian.input', ['kelolaPenilaian' => $kelolapenilaian]);
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
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori' => 'required',
            'jenis' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            } else if ($errors->has('kategori')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kategori'),
                ]);
            } else if ($errors->has('jenis')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jenis'),
                ]);
            }
        }
        $kelolapenilaian = kelolaPenilaian::find($id);
        $kelolapenilaian->nama = $request->nama;
        $kelolapenilaian->kategori = $request->kategori;
        $kelolapenilaian->jenis = $request->jenis;
        $kelolapenilaian->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Berhasil perbaharui penilaian!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelolapenilaian = kelolaPenilaian::find($id);
        $kelolapenilaian->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Berhasil !',
        ]);
    }
}
