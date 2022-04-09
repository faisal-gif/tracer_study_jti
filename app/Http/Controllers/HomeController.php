<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\biodata;
use App\kabarJurusan;
use App\pertanyaan;
use App\jawaban;
use Illuminate\Support\Facades\DB;
use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\FormBuilderTrait;

class HomeController extends Controller
{
    use FormBuilderTrait;
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
        $kabar= kabarJurusan::orderBy('id', 'DESC')->take(3)->get();
        return view('welcome',['kabar'=>$kabar]);
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

public function formPertanyaan()
    {
        return view('formPertanyaan');
    }
  
    public function pertanyaan(FormBuilder $formBuilder)
    {
        $coba=pertanyaan::all()->toArray();
        $sbmt=[
            $submit=
            ['name' => 'submit',
            'type' => 'submit',
            
        ],         
        ];
        $ad=array_merge($coba,$sbmt);
        $form = $formBuilder->createByArray($ad,[ 
        'method' => 'POST',
        'url' => '/jawaban']);

        return view('hasilForm', compact('form'));
    }

    public function prosesBuat(Request $request)
    {
        
        $add=new pertanyaan();
        $nama= str_replace(' ', '', $request->input('nama'));
        $add->name = $nama;
        $add->type = $request->input('type');
        $add->label = $request->input('nama');
        $add->type = $request->input('type');
        if ($request->input('type') == "choice") {
            $object;
        $request->validate([
            'isi.*' => 'required',
            
        ]);

        foreach ($request->isi as $key => $value) {
            
            $object[$value]=$value;
           

        }
            $add->choices = (object) $object;
            $add->choice_options = [
                'wrapper' => ['class' => 'choice-wrapper'],
                'label_attr' => ['class' => 'label-class'],
            ];
            $add->expanded = true;
            $add->save();
        }

        $add->save();
        
        

        return redirect('/formPertanyaan');;
      
    }
    public function prosesIsi(Request $request,FormBuilder $formBuilder)
    {
        $coba=pertanyaan::all()->toArray();
        $form = $formBuilder->createByArray($coba);
        $add=new jawaban([
            'jawaban' => $form->getFieldValues()
            
        ]);
        $add->save();

        return redirect('/pertanyaan');
      
    }
}


