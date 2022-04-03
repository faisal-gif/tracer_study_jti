<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\biodata;
use App\kabarJurusan;
use App\testimoni;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome','showKabar');
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
    public function welcome()
    {
        $testimonis = testimoni::select('*')->get();
        $kabar= kabarJurusan::orderBy('id', 'DESC')->take(3)->get();
        return view('welcome', compact('kabar', 'testimonis'));
    }
    public function showAlumni()
    {
        $alum= biodata::all();
        return view('showAlum',['alum'=>$alum]);
    }
    public function editAlumni()
    {
        $alum= biodata::all();
        return view('showAlum',['alum'=>$alum]);
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
      'kota' => $request->input('kota'),
      'email' => $request->input('email'),
      'pekerjaan' => $request->input('pekerjaan'),
      'jp' => $request->input('jp'),
      'namaPerusahaan' => $request->input('namaPerusahaan'),
      'alamatPerusahaan' => $request->input('alamatPerusahaan')
      
            
      
      

  ]);
  $add->save();
  
  return redirect('/formBiodata');
}
public function delAl($nim)
{
    $bio= DB::table('biodatas')->where('nim', $nim)->delete();
     return redirect('/showBiodata');
}
public function editAl($nim)
{
    $bio= DB::table('biodatas')->where('nim', $nim)->get();
    return view('editAlumni',['bio'=>$bio]);
}
public function updateAl(Request $request)
    {
        $nim= $request->input('nim');
        $bio= biodata::where('nim', $nim)->first();

        $bio->nama = $request->input('nama');
        $bio->noHp = $request->input('noHp');
        $bio->kotaLahir = $request->input('kotaLahir');
        $bio->jk = $request->input('jk');
        $bio->tanggalLahir = $request->input('tanggalLahir');
        $bio->prodi = $request->input('prodi');
        $bio->tahunLulus = $request->input('tahunLulus');
        $bio->alamat = $request->input('alamat');
        $bio->kodePos = $request->input('kodePos');
        $bio->provinsi = $request->input('provinsi');
        $bio->kota = $request->input('kota');

        $bio->save();
        
        return redirect('/showBiodata');
    }
    public function inpKabar(Request $request)
{
  
  
  $add=new kabarJurusan([
      'idUser' =>$request->input('idUser'),
      'judul' => $request->input('judul'),
      'tag' => $request->input('tag'),
      'kabar' => $request->input('isi')
      

  ]);
  $add->save();
  
  return redirect('/formKabar');
}
public function showKabar($id)
{
    $kabar= kabarJurusan::where('id', $id)->get();
     return view('showKabar',['kabar'=>$kabar]);
}
public function filterKab()
{
    $kabar= kabarJurusan::all();
     return view('showKab',['kabar'=>$kabar]);
}
}


