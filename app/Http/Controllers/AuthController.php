<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\Admin;
use App\Models\Dori;
use App\Models\Drektor;
use App\Models\Ichkitavar;
use App\Models\Itogo;
use App\Models\Karzina;
use App\Models\Tavar;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class AuthController extends Controller
{
    public function login()
    {
      return view("auth.login");
    }
  
    public function loginuser(Request $request)
    {
            $request->validate([
                'login' => 'required',
                'password' => 'required',
                'ok' => 'required',
            ]);
            if($request->login == "Admin"){
                $user = Drektor::where('login','=',$request['login'])->first();
                if($user){ 
                    if($request->password == $user->password){            
                        $request->session()->put('IDIE',$user->id);
                       return redirect('/glavninachal');
                    }else{
                        return back()->with('danger', 'Parol xato');
                    }
            
                }else{
                    $request->validate([
                    'login'=>'required',
                    'password'=>'required',
                    ]);  
                    Drektor::create($request->all());   
                    $user = Drektor::where('login','=',$request['login'])->first();
                    if ($user) {         
                        $request->session()->put('IDIE',$user->id);
                       return redirect('/glavninachal');
                    }
                }
            
                }elseif($request->login == "Bugalter"){
                $user = Drektor::where('login','=',$request['login'])->first();
                if($user){
                if($request->password == $user->password){        
                        $request->session()->put('IDIE',$user->id);
                        return redirect('/glavninachal');
                    }else{
                        return back()->with('danger', 'Parol xato');
                }
                }else{
                $request->validate([
                    'login'=>'required',
                    'password'=>'required',
                ]);  
                Drektor::create($request->all());
                $user = Drektor::where('login','=',$request['login'])->first();
                if ($user) {         
                    $request->session()->put('IDIE',$user->id);
                    return redirect('/glavninachal');
                }
                }
            }else{
                return back()->with('danger', 'Tizimga ruxsat berilganlar kirishi mumkin');
            }
      
    }
     
    public function dashbord()
    {
        $foo = Itogo::find(1);
        $clents = User::all();
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('sotuv',[
                'brends'=>$brends,
                'itogs'=>$foo,
                'clents'=>$clents
            ]);
        }else{
            return redirect('/logaut');
        }
    }
    public function logaut()
    {
        if(Session::has('IDIE')){
            Session::pull('IDIE');
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
    
    public function profil()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('auth.password',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }   
    }

    public function imports(Request $request)
    {
        Excel::import(new UsersImport, $request->file('import'));
        return back();
    }

    function searchcountry(Request $request)
    {
     
        if($request->ajax()) {
          
            $data = Dori::where('name', 'LIKE', $request->country.'%')->get();           
            $output = '';           
            if (count($data)>0) {              
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';              
                foreach ($data as $row){                   
                    $output .= '<li class="list-group-item">'.$row->name.'</li>';
                }              
                $output .= '</ul>';
            }        
            return response()->json($output);
        }
    }
}