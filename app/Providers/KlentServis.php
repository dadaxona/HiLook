<?php

namespace App\Providers;

use App\Models\Adress;
use App\Models\Arxiv;
use App\Models\Dori;
use App\Models\Drektor;
use App\Models\Ichkitavar;
use App\Models\Tavar;
use App\Models\Umumiy;
use App\Models\User;
use App\Models\Itogo;
use App\Models\Karzina;
use App\Models\Karzina2;
use Illuminate\Support\Facades\Session;
class KlentServis
{
    public function storeadmin($request)
    {
        if($request->id){
            return $this->updateadmin($request);
        }else{
            $data = Drektor::create([
                'login'=>$request->login,
                'password'=>$request->password,
            ]);
            if($data){
                return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $request], 200);
            }
        }
    }

    public function updateadmin($request)
    {
        Drektor::find($request->id)->update($request->all());
        $data = Drektor::find($request->id);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }
    
    public function store($request)
    {
        $javob = $request->son * $request->dona;
        User::find($request->id)->update([
            'name'=>$request->name,
            'son'=>$request->son,
            'dona'=>$request->dona,
            'summa'=>$request->summa, 
            'summa2'=>$request->summa2, 
            'kod'=>$request->kod,
            'jami'=>$javob,
        ]);
        $data = User::find($request->id);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }

    public function delete($id)
    {
        User::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }

    public function store2($request)
    {
        foreach ($request->addmore as $value) {
            $data = Tavar::create($value);
        }
        if($data){
            return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data], 200);
        }
    }

    public function update2($request)
    {
        Tavar::find($request->id)->update($request->all());
        $data = Tavar::find($request->id);
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 200);
    }

    public function edit3()
    {
        $umumiy = Umumiy::find(1);
        if(Session::has('IDIE')){
          $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
          return view('tavar2',[
              'brends'=>$brends,
              'umumiy'=>$umumiy??[]
          ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function store3($request)
    {
        foreach ($request->addmore as $value) {
            $data = User::where('name', $value["name"])->where('kod', $value["kod"])->first();
            if ($data) {
                $son = $data->son + $value["son"];
                $dona = $data->dona + $value["dona"];
                $aaa = $data->jami + $value["son"] * $value["dona"];
                User::where('name', $value["name"])->where('kod', $value["kod"])->update([
                    'son'=>$son,
                    'dona'=>$dona,
                    'summa'=>$value["summa"], 
                    'summa2'=>$value["summa2"],
                    'jami'=>$aaa,
                ]);
                Dori::create(['name'=>$value["name"]]);
                $data2 = User::where('name', $value["name"])->where('kod', $value["kod"])->first();
            }else{
                $aaa1 = $value["son"] * $value["dona"];
                $data2 = User::create([
                    'name'=>$value["name"],
                    'son'=>$value["son"],
                    'dona'=>$value["dona"],
                    'summa'=>$value["summa"], 
                    'summa2'=>$value["summa2"],
                    'kod'=>$value["kod"],
                    'jami'=>$aaa1,
                ]);
                Dori::create(['name'=>$value["name"]]);
            }
        }
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data2], 200);
    }

    
    public function astore3($request)
    {
            $data = User::where('name', $request["name"])->where('kod', $request["kod"])->first();
            if ($data) {
                $son = $data->son + $request["son"];
                $dona = $data->dona + $request["dona"];
                $aaa = $data->jami + $request["son"] * $request["dona"];
                User::where('name', $request["name"])->where('kod', $request["kod"])->update([
                    'son'=>$son,
                    'dona'=>$dona,
                    'summa'=>$request["summa"], 
                    'summa2'=>$request["summa2"],
                    'jami'=>$aaa,
                ]);
                Dori::create(['name'=>$request["name"]]);
                $data2 = User::where('name', $request["name"])->where('kod', $request["kod"])->first();
            }else{
                $aaa1 = $request["son"] * $request["dona"];
                $data2 = User::create([
                    'name'=>$request["name"],
                    'son'=>$request["son"],
                    'dona'=>$request["dona"],
                    'summa'=>$request["summa"], 
                    'summa2'=>$request["summa2"],
                    'kod'=>$request["kod"],
                    'jami'=>$aaa1,
                ]);
                Dori::create(['name'=>$request["name"]]);
            }     
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data2], 200);
    }
    
    public function updates($request)
    {
        $data = Ichkitavar::find($request->id)->update($request->all());
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }


    public function delete3($id)
    {
        Ichkitavar::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }

    public function store4($request)
    {
        $foo = Ichkitavar::find($request->id);
        $h1 = $foo->hajm + $request->hajm;
        $sum1 = $foo->summa + $request->summa;
        $sum2 = $foo->summa2 + $request->summa2;       
        Ichkitavar::find($request->id)->update([
            'raqam'=>$request->raqam,
            'hajm'=>$h1,
            'summa'=>$sum1,
            'summa2'=>$sum2
        ]);
        $data = Ichkitavar::find($request->id);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }


    public function pastavka($request)
    {
        foreach ($request->addmore as $value) {
            $data = Adress::create($value);
        }
        if($data){
            return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data], 200);
        }
    }

    public function pastavkaupdate($request)
    {
        Adress::find($request->id)->update($request->all());
        $data = Adress::find($request->id);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }

    public function deletew4($id)
    {
        Adress::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }

    public function clents()
    {
        $user = User::paginate(10);
        $tavar = Tavar::all();
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('clent',[
                'brends'=>$brends,
                'collection'=>$user,
                'tavar'=>$tavar
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function sazdat($request)
    {
        $foo = User::find($request->id);
        if($foo->son < $request->sonkal){
            return response()->json(['msg'=>'Хажим устуни белгиланган кийматдан коп', 'code'=>0]);
        }elseif ($foo->dona < $request->donakal) {
            return response()->json(['msg'=>'Сон устуни белгиланган кийматдан коп', 'code'=>0]);        
        }else{
            $dat = Karzina::create([
                'user_id' => $foo->id,
                'name' => $foo->name,
                'raqam'=>$foo->kod,
                'soni' => $request->sonkal,
                'dona' => $request->donakal,
                'summa2' => $foo->summa2,
                'itog'=>$request->sot
            ]);
            $ito = Itogo::find(1);
            if($ito){
                $j = $ito->itogo + $request->sot;
                Itogo::find(1)->update([
                    'itogo'=>$j,
                ]);
                $ito2 = Itogo::find(1);
                return response()->json(['msg'=>'Кошилди', 'data'=>$dat, 'data2'=>$ito2]);
    
            }else{
                Itogo::create([
                    'itogo'=>$request->sot
                ]);
                $ito3 = Itogo::find(1);
                return response()->json(['msg'=>'Кошилди', 'data'=>$dat, 'data2'=>$ito3]);
            }
        }
    }

    public function usdkurd2($request)
    {
        
    }

    public function plus($request)
    {
        $foo1 = Karzina::find($request->id);
        $row = User::find($foo1->user_id);
        $a = $foo1->soni + 1;
        if($a > $row->son){
            return response()->json(['msg'=>'Тавар етарли емас', 'error'=>400]);
        }else{
            $itog = $foo1->itog + $row->summa2;
            Karzina::find($request->id)->update([
                'soni'=>$a,
                'itog'=>$itog,
            ]);
            $foo3 = Karzina::find($request->id);
            $b = Itogo::find(1);
            $j = $b->itogo + $row->summa2;
            Itogo::find(1)->update([
                'itogo'=>$j,
            ]);
            $b2 = Itogo::find(1);
            return response()->json(['data'=>$foo3, 'data2'=>$b2]);
        }
    }

    public function minus($request)
    {
        $foo1 = Karzina::find($request->id);
        $row = User::find($foo1->user_id);
        $a = $foo1->soni - 1;
        if($a < 1){
            return $this->delminus($request, $row);
        }else{
            $itog = $foo1->itog - $row->summa2;
            Karzina::find($request->id)->update([
                'soni'=>$a,
                'itog'=>$itog,
            ]);
            $foo3 = Karzina::find($request->id);
            $b = Itogo::find(1);
            $j = $b->itogo - $row->summa2;
            Itogo::find(1)->update([
                'itogo'=>$j,
            ]);
            $b2 = Itogo::find(1);
            return response()->json(['data'=>$foo3, 'data2'=>$b2]);
        }
    }

    public function delminus($request, $row)
    {
        $b = Itogo::find(1);
        $j = $b->itogo - $row->summa2;
        Itogo::find(1)->update([
            'itogo'=>$j
        ]);
        $b2 = Itogo::find(1);
        $foo3 = Karzina::find($request->id);
        Karzina::find($request->id)->delete($request->id);
        $iff = Karzina::count();
        if ($iff == 0) {
            Itogo::find(1)->update([
                'itogo'=>0,
            ]);
            $b3 = Itogo::find(1);
            return response()->json(['msg'=>'Тавар олиб ташланди', 'data'=>$foo3, 'data2'=>$b3, 'error'=>400]);
        }else{
            return response()->json(['msg'=>'Тавар олиб ташланди', 'data'=>$foo3, 'data2'=>$b2, 'error'=>400]);
        }
    }

    public function udalit($request)
    {
        $foo1 = Karzina::find($request->id);
        $b = Itogo::find(1);
        $j = $b->itogo - $foo1->itog;
        Itogo::find(1)->update([
            'itogo'=>$j,
        ]);
        $b2 = Itogo::find(1);
        Karzina::find($request->id)->delete($request->id);
        $iff = Karzina::count();
        if ($iff == 0) {
            Itogo::find(1)->update([
                'itogo'=>0,
            ]);
            $b3 = Itogo::find(1);
            return response()->json(['msg'=>'Очирилди', 'data'=>$foo1, 'data2'=>$b3]);
        }else{
            return response()->json(['msg'=>'Очирилди', 'data'=>$foo1, 'data2'=>$b2]);
        }
    }

    public function yangilash($request)
    {
        $foo1 = Karzina::find($request->id);
        $row = User::find($foo1->user_id);
        if($request->sonkal > $row->son){
            return response()->json(['msg'=>'Хажим устуни белгиланган кийматдан коп', 'code'=>0]);
        }elseif ($request->donakal > $row->dona) {
            return response()->json(['msg'=>'Сон устуни белгиланган кийматдан коп', 'code'=>0]);
        }else{
            $b = Itogo::find(1);
            $pool = $b->itogo - $foo1->itog;
            $poo2 = $pool + $request->sot;
            Itogo::find(1)->update([
                'itogo'=>$poo2
            ]);
            Karzina::find($request->id)->update([
                'soni'=>$request->sonkal,
                'dona'=>$request->donakal,
                'summa2'=>$request->summo,
                'itog'=>$request->sot,
            ]);
            $foo3 = Karzina::find($request->id);
            $b2 = Itogo::find(1);
            return response()->json(['msg'=>'Янгиланди', 'data'=>$foo3, 'data2'=>$b2]);
        }
    }

    public function oplata($request)
    {
        $variable = Karzina::all();
        $arxiv = Arxiv::create([
            'name'=>$request->name,
            'itogs'=>$request->itogs,
            'naqt'=>$request->naqt,
            'plastik'=>$request->plastik,
            'bank'=>$request->bank,
        ]);
        foreach ($variable as $value) {
            Karzina2::create([
                'arxiv_name'=>$arxiv->name,
                'name'=> $value->name,
                'raqam'=>$value->raqam,
                'soni'=> $value->soni,
                'summa2'=> $value->summa2, 
                'dona'=> $value->dona, 
                'itog'=> $value->itog,
            ]);
            $foo = User::find($value->user_id);
            $son = $foo->son - $value->soni;
            $son2 = $foo->dona * $value->soni;
            $jami = $foo->jami - $value->dona - $son2;
            $sotjami = $foo->sotjami + $value->dona;
            if($foo->dona <= $sotjami){
                $roo = $sotjami - $foo->dona;
                if($foo->dona == $value->dona){
                    $son4 = $son - 1;
                    User::find($value->user_id)->update([
                        'son'=>$son4,
                        'jami'=>$jami,
                        'sotjami'=>$roo,
                    ]);
                }else{
                    $soner = $son - 1;
                    User::find($value->user_id)->update([
                        'son'=>$soner,
                        'jami'=>$jami,
                        'sotjami'=>$roo,
                    ]);
                }
            }else{
                if($foo->dona == $value->dona){
                    $son4 = $son - 1;
                    User::find($value->user_id)->update([
                        'son'=>$son4,
                        'jami'=>$jami,
                        'sotjami'=>$sotjami,
                    ]);
                }else{
                    User::find($value->user_id)->update([
                        'son'=>$son,
                        'jami'=>$jami,
                        'sotjami'=>$sotjami,
                    ]);
                }
            }
        }
        Itogo::find(1)->update([
            'itogo'=>0,
        ]);
        $b2 = Itogo::find(1);
        Karzina::where('id',">",0)->delete();
        return response()->json(['data'=>$b2]);
    }

}