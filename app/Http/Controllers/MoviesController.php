<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MoviesController extends Controller
{
    public function index()
    {
        $post = DB::table('movies')->get();
        return response()->json($post)->setStatusCode(200);
    }


    public function detail($id)
    {
        $data = DB::table('movies')->find($id);

        if($data){
            return response()->json($data)->setStatusCode(200);
        }
        return response()->json(['messages' => 'data not found'])->setStatusCode(404);
    }

    public function store(Request $request)
    {
        $validator  = Validator::make($request->all(),
        [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'rating' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->messages())->setStatusCode(422);
        }

        $validated = $validator->validate();

        DB::table('movies')->insert([
            'judul' => $validated['judul'],
            'deskripsi' => $validated['deskripsi'],
            'gambar' => $validated['gambar'],
            'rating' => $validated['rating'],
        ]);
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'rating' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->messages())->setStatusCode(422);
        }


        $validated = $validator->validate();

        $check = DB::table('movies')->find($id);

        if($check){
            DB::table('movies')->where('id', $id)->update([
            'judul' => $validated['judul'],
            'deskripsi' => $validated['deskripsi'],
            'gambar' => $validated['gambar'],
            'rating' => $validated['rating'],
            ]);
        }

        return response()->json(['messages' => 'Data Berhasil Dirubah'])->setStatusCode(200);
    }

    public function delete($id)
    {
        $data = DB::table('movies')->find($id);

        if($data){
            DB::table('movies')->delete($id);

            return response()->json(['messages' => 'Data is deleted '])->setStatusCode(200);
        }

        return response()->json(['messages'=>'Data not found!'])->setStatusCode(404);
    }
}
