<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kabarJurusan;
use App\biodata;
use App\testimoni;
use App\kirimForm;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware(function($request, $next){
            if(Gate::allows('admin')||Gate::allows('alumni')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        })->except('welcome','showProfile');
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
        $kabar= kabarJurusan::where('status','setuju')->orderBy('id', 'DESC')->take(3)->get();
        $testimonis = testimoni::with('biodata')->get();
       
        return view('welcome',compact('kabar','testimonis'));
    }
    public function showProfile($nim)
    {
        $bio=  biodata::where('nim', $nim)->get();
        return view('showProfile', ['bio'=>$bio]);
    }
    public function email(){
        $bio=  biodata::all();
        $link=kirimForm::all()->first();
        foreach ($bio as $b ) {
            $details = [
                'title' => 'Kepada Yth. Alumni JTI Polinema',
                'body' => '
                Mengingatkan untuk mengisi kuisioner tracer study pada tautan dibawah sistem.
                Partisipasi anda akan sangat berharga bagi berkembangnya JTI Polinema.
                Terima Kasih, Admin.',
                'link' => $link->link,
                'nama' => $b->nama
            ];
           
            Mail::to($b->email)->send(new MyMail($details));
        }
        
       
        dd("Email is Sent.");
        }
        public function whatsappNotification()
        {
            $sid    = "AC6f5a79e42795a97142536a0f1b3cfb0c";
            $token  = "da1838ede939916a245d810ab276dc23";
            $wa_from= "+14155238886";
            $twilio = new Client($sid, $token);
            
            $body = "Hello, welcome to codelapan.com.";
    
            return $twilio->messages->create("whatsapp:+62895389118844",["from" => "whatsapp:$wa_from", "body" => $body]);
        }

}


