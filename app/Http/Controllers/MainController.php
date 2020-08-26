<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    function registro(Request $request)
    {


        //calculo el inicioç
        //$inicio=$request->input('fecha')." ".$request->input('hora').":00";
        // sumo una hora para el evnto
        $timestamp = strtotime($request->input('hora')) + 60 * 60;
        $fin = date('H:i', $timestamp);
        $final = $request->input('fecha') . " " . $fin . ":00";


        // Si esa hora de ese guia esta cubierta lanza error
        $count1 = Event::   where('id_guia', '=', $request->input('nombreguia'))
            ->where('start', '=', $request->input('hora'))
            ->where('end', '=', $final)
            ->count();


        // Si se repite el codigo lanza error
        $count2 = Event::   where('codigoPS', '=', $request->input('usuario'))
            ->count();


        // si ya eexiste no se graba
        if (($count1 == 1)||($count2==1)) {
            //return Redirect::back()->with('message');
          //  return view('index');
            return view('index', ['rep'=>false]);
        }

        if (($count1 == 1)&&($count2==1)) {
           // return Redirect::back()->with('message');
            //return view('index');
            return view('index', ['rep'=>false]);
        }

        // comprobacion de vacios
         if($request->input('nombre')==" "){
             return view('index', ['rep'=>false]);
         }
        if($request->input('usuario')==" "){
            return view('index', ['rep'=>false]);
        }

        if($request->input('hora')==" "){
            return view('index', ['rep'=>false]);
        }
        if($request->input('nombreguia')==" "){
            return view('index', ['rep'=>false]);
        }

        if($final==" "){
            return view('index', ['rep'=>false]);
        }




        $event = new Event;
        $event->nombre = $request->input('nombre');
        $event->codigoPS=$request->input('usuario');
        $event->start = $request->input('hora');
        $event->end = $final;
        $event->id_guia = $request->input('nombreguia');
        $event->save();
        //return view('index');
        return view('index', ['rep'=>true,'diaHora'=>$request->input('hora')]);
    }


    public function horasLibres(Request $request)
    {
        $guia = $request->input('guia');
        $fecha = $request->input('fecha');

        // si falta la fecha indicar
        if ($fecha == NULL) {
            return response()->json(array('msg' => "Falta fecha"), 200);
        }
        //buscar en bbdd
        /*$array=  Event::select('start')
            ->where('id_guia','=',$guia)
            ->get();*/

        // mañana begin 11 a 14
        $maniana = array('11:00:00', '12:00:00', '13:00:00', '14:00:00');
        // tarde begin 16 a 19
        $tarde = array('16:00:00', '17:00:00', '18:00:00', '19:00:00');
        $libres = "";

        // aqui comprobamos con la db que horas de esas estan pilladas
//////////////////////////////////////////
//GUIA1 Jose Manuel  /////////////////////
//////////////////////////////////////////
        //DIAS MAÑANA
        // 22,23,28,30
        //DIAS DE TARDE
        //0

// si he seleccionado el dia 22
        if ($fecha == "2020-07-22" && $guia == "guia1") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia1')
                    ->where('start', '=', '2020-07-22 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-22 " . $m . "'>" . $m . "</option >";
                }
            }
        }

        // si he seleccionado el dia 23
        if ($fecha == "2020-07-23" && $guia == "guia1") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia1')
                    ->where('start', '=', '2020-07-23 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-23 " . $m . "'>" . $m . "</option >";
                }
            }
        }

        // si he seleccionado el dia 28
        if ($fecha == "2020-07-28" && $guia == "guia1") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia1')
                    ->where('start', '=', '2020-07-28 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-28 " . $m . "'>" . $m . "</option >";
                }
            }
        }

        // si he seleccionado el dia 30
        if ($fecha == "2020-07-30" && $guia == "guia1") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia1')
                    ->where('start', '=', '2020-07-30 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-30 " . $m . "'>" . $m . "</option >";
                }
            }
        }


//////////////////////////////////////////
//GUIA2 Ignacio //////////////////////////
//////////////////////////////////////////
        //DIAS MAÑANA
        // 21,24,27,31

        // si he seleccionado el dia 21
        if ($fecha == "2020-07-21" && $guia == "guia2") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia2')
                    ->where('start', '=', '2020-07-21 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-21 " . $m . "'>" . $m . "</option >";
                }
            }
        }
        // si he seleccionado el dia 24
        if ($fecha == "2020-07-24" && $guia == "guia2") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia2')
                    ->where('start', '=', '2020-07-24 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-24 " . $m . "'>" . $m . "</option >";
                }
            }
        }

        // si he seleccionado el dia 27
        if ($fecha == "2020-07-27" && $guia == "guia2") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia2')
                    ->where('start', '=', '2020-07-27 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-27 " . $m . "'>" . $m . "</option >";
                }
            }
        }

        // si he seleccionado el dia 31
        if ($fecha == "2020-07-31" && $guia == "guia2") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia2')
                    ->where('start', '=', '2020-07-31 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-31 " . $m . "'>" . $m . "</option >";
                }
            }
        }


        //DIAS DE TARDE
        //20,22,28,29

        // si he seleccionado el dia 20
        if ($fecha == "2020-07-20" && $guia == "guia2") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia2')
                    ->where('start', '=', '2020-07-20 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-20 " . $t . "'>" . $t . "</option >";
                }
            }
        }


        // si he seleccionado el dia 22
        if ($fecha == "2020-07-22" && $guia == "guia2") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia2')
                    ->where('start', '=', '2020-07-22 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-22 " . $t . "'>" . $t . "</option >";
                }
            }
        }

        // si he seleccionado el dia 28


        if ($fecha == "2020-07-28" && $guia == "guia2") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia2')
                    ->where('start', '=', '2020-07-28 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-28 " . $t . "'>" . $t . "</option >";
                }
            }
        }


        // si he seleccionado el dia 29

        if ($fecha == "2020-07-29" && $guia == "guia2") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia2')
                    ->where('start', '=', '2020-07-29 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-29 " . $t . "'>" . $t . "</option >";
                }
            }
        }


////////////////////////////////////////
//GUIA3 Roberto ////////////////////////
////////////////////////////////////////
        //DIAS MAÑANA
        // 20
        // si he seleccionado el dia 20
        if ($fecha == "2020-07-20" && $guia == "guia3") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia3')
                    ->where('start', '=', '2020-07-20 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-20 " . $m . "'>" . $m . "</option >";
                }
            }
        }


        //DIAS TARDE
        // 21,23,27,30

        // si he seleccionado el dia 21
        if ($fecha == "2020-07-21" && $guia == "guia3") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia3')
                    ->where('start', '=', '2020-07-21 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-21 " . $t . "'>" . $t . "</option >";
                }
            }
        }


        // si he seleccionado el dia 23
        if ($fecha == "2020-07-23" && $guia == "guia3") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia3')
                    ->where('start', '=', '2020-07-23 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-23' " . $t . "'>" . $t . "</option >";
                }
            }
        }


        // si he seleccionado el dia 27
        if ($fecha == "2020-07-27" && $guia == "guia3") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia3')
                    ->where('start', '=', '2020-07-27 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-27 " . $t . "'>" . $t . "</option >";
                }
            }
        }
        // si he seleccionado el dia 30
        if ($fecha == "2020-07-30" && $guia == "guia3") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia3')
                    ->where('start', '=', '2020-07-30 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-30 " . $t . "'>" . $t . "</option >";
                }
            }
        }


////////////////////////////////////////
//GUIA3 Angela  ////////////////////////
////////////////////////////////////////
        //DIAS MAÑANA
        // 20
        // si he seleccionado el dia 20
        if ($fecha == "2020-07-20" && $guia == "guia4") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia4')
                    ->where('start', '=', '2020-07-20 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-20 " . $m . "'>" . $m . "</option >";
                }
            }
        }


////////////////////////////////////////
//GUIA5 Eduardo ////////////////////////
////////////////////////////////////////
        //DIAS MAÑANA
        // 24,31

        // si he seleccionado el dia 24
        if ($fecha == "2020-07-24" && $guia == "guia5") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia5')
                    ->where('start', '=', '2020-07-24 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-24 " . $m . "'>" . $m . "</option >";
                }
            }
        }

        // si he seleccionado el dia 31
        if ($fecha == "2020-07-31" && $guia == "guia5") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia5')
                    ->where('start', '=', '2020-07-31 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-31 " . $m . "'>" . $m . "</option >";
                }
            }
        }


        //DIAS TARDE
        // 1

        // si he seleccionado el dia 1
        if ($fecha == "2020-08-01" && $guia == "guia5") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia5')
                    ->where('start', '=', '2020-08-01 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-08-01 " . $t . "'>" . $t . "</option >";
                }
            }
        }


////////////////////////////////////////
//GUIA6 Emilio ////////////////////////
////////////////////////////////////////
        //DIAS MAÑANA
        // 26,2
        // si he seleccionado el dia 26
        if ($fecha == "2020-07-26" && $guia == "guia6") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia5')
                    ->where('start', '=', '2020-07-26 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-26 " . $m . "'>" . $m . "</option >";
                }
            }
        }


        // si he seleccionado el dia 2
        if ($fecha == "2020-08-02" && $guia == "guia6") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia6')
                    ->where('start', '=', '2020-08-02 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-08-02 " . $m . "'>" . $m . "</option >";
                }
            }
        }

        //DIAS TARDE
        // 31


        // si he seleccionado el dia 31
        if ($fecha == "2020-07-31" && $guia == "guia6") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia6')
                    ->where('start', '=', '2020-07-31 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-31 " . $t . "'>" . $t . "</option >";
                }
            }
        }


////////////////////////////////////////
//GUIA7 Ricardo ////////////////////////
////////////////////////////////////////
        //DIAS MAÑANA
        // 25,26,1,2
        // si he seleccionado el dia 25
        if ($fecha == "2020-07-25" && $guia == "guia7") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia7')
                    ->where('start', '=', '2020-07-25 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-25 " . $m . "'>" . $m . "</option >";
                }
            }
        }
        // si he seleccionado el dia 26
        if ($fecha == "2020-07-26" && $guia == "guia7") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia7')
                    ->where('start', '=', '2020-07-26 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-26 " . $m . "'>" . $m . "</option >";
                }
            }
        }
        // si he seleccionado el dia 1
        if ($fecha == "2020-08-01" && $guia == "guia7") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia7')
                    ->where('start', '=', '2020-08-01 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-08-01 " . $m . "'>" . $m . "</option >";
                }
            }
        }
        // si he seleccionado el dia 2
        if ($fecha == "2020-08-02" && $guia == "guia7") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia7')
                    ->where('start', '=', '2020-08-02 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-08-02 " . $m . "'>" . $m . "</option >";
                }
            }
        }


        //DIAS TARDE
        // 24,25,26,31,1,2

        // si he seleccionado el dia 24
        if ($fecha == "2020-07-24" && $guia == "guia7") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia7')
                    ->where('start', '=', '2020-07-24 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-24 " . $t . "'>" . $t . "</option >";
                }
            }
        }

        // si he seleccionado el dia 25
        if ($fecha == "2020-07-25" && $guia == "guia7") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia7')
                    ->where('start', '=', '2020-07-25 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-25 " . $t . "'>" . $t . "</option >";
                }
            }
        }

        // si he seleccionado el dia 26
        if ($fecha == "2020-07-26" && $guia == "guia7") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia7')
                    ->where('start', '=', '2020-07-26 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-26 " . $t . "'>" . $t . "</option >";
                }
            }
        }
        // si he seleccionado el dia 31
        if ($fecha == "2020-07-31" && $guia == "guia7") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia7')
                    ->where('start', '=', '2020-07-31 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-31 " . $t . "'>" . $t . "</option >";
                }
            }
        }

        // si he seleccionado el dia 1
        if ($fecha == "2020-08-01" && $guia == "guia7") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia7')
                    ->where('start', '=', '2020-08-01 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-08-01 " . $t . "'>" . $t . "</option >";
                }
            }
        }

        // si he seleccionado el dia 2
        if ($fecha == "2020-08-02" && $guia == "guia7") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia7')
                    ->where('start', '=', '2020-08-02 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-08-02 " . $t . "'>" . $t . "</option >";
                }
            }
        }







////////////////////////////////////////
//GUIA8 Asier ////////////////////////
////////////////////////////////////////
        //DIAS MAÑANA
        // 1

        // si he seleccionado el dia 1
        if ($fecha == "2020-08-01" && $guia == "guia8") {
            foreach ($maniana as $m) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia8')
                    ->where('start', '=', '2020-08-01 ' . $m)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-08-01 " . $m . "'>" . $m . "</option >";
                }
            }
        }


        //DIAS TARDE
        // 24,25,26,2

        // si he seleccionado el dia 24
        if ($fecha == "2020-07-24" && $guia == "guia8") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia8')
                    ->where('start', '=', '2020-07-24 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-24 " . $t . "'>" . $t . "</option >";
                }
            }
        }


        // si he seleccionado el dia 25
        if ($fecha == "2020-07-25" && $guia == "guia8") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia8')
                    ->where('start', '=', '2020-07-25 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-25 " . $t . "'>" . $t . "</option >";
                }
            }
        }

        // si he seleccionado el dia 26
        if ($fecha == "2020-07-26" && $guia == "guia8") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia8')
                    ->where('start', '=', '2020-07-26 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-07-26 " . $t . "'>" . $t . "</option >";
                }
            }
        }
        // si he seleccionado el dia 2
        if ($fecha == "2020-08-82" && $guia == "guia8") {
            foreach ($tarde as $t) {
                // comprobar
                $exist = Event::where('id_guia', '=', 'guia8')
                    ->where('start', '=', '2020-08-82 ' . $t)
                    ->count();
                // si no existe esta libre se pinta
                if ($exist == 0) {
                    $libres = $libres . "<option  value='2020-08-82 " . $t . "'>" . $t . "</option >";
                }
            }
        }


















        return response()->json(array('msg' => $libres), 200);
    }


    public function vacios(Request $request)
    {
        $uauario = $request->input('usuario');
        $fecha = $request->input('fecha');
        $hora = $request->input('hora');
        $nombre = $request->input('nombre');

        // si falta un campo indicar
        if (($fecha == NULL) || ($uauario == NULL) || ($hora == NULL) || ($nombre == NULL)) {
            return response()->json(array('msg' => "Rellene todos los campos"), 200);
        }

    }


}
