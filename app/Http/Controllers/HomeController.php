<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\biodata;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function proAlumni(Request $request)
{
  
  
  $add=new biodata([
      'nim' =>$request->input('nim'),
      'nama' => $request->input('nama'),
      'noHp' => $request->input('noHp'),
      'kotaLahir' => $request->input('kotaLahir'),
      'jk' => $request->input('jk'),
      'tanggalLahir' => $request->input('tanggalLahir'),
      'prodi' => $request->input('prodi'),
      'tahunLulus' => $request->input('tahunLulus'),
      'alamat' => $request->input('alamat'),
      'kodePos' => $request->input('kodePos'),
      'provinsi' => $request->input('provinsi'),
      'kota' => $request->input('kota')
      

  ]);
  $add->save();
  
  return redirect('/formBiodata');
 
  
}
}


