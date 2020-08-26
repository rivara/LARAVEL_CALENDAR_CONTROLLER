<?php

namespace App\Http\Controllers;

use Acaronlex\LaravelCalendar\Calendar;
use App\Event;
use App\Exports\EventsExports;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;





class BackofficeController extends Controller
{
    function login(Request $request){

        // si es el que esta en la bbdd accede al backofice
        $user = User::
             where('email', '=', $request->input('email'))
            ->where('password', '=', $request->input('password'))
            ->count();

        if($user==1){
         // existe
            $events = [];
            $calendar = new Calendar();
            $calendar->addEvents($events)
                ->setOptions([
                    'locale' => 'es',
                    'firstDay' => 0,
                    'displayEventTime' => true,
                    'selectable' => true,
                    'initialView' => 'dayGridMonth',
                    'headerToolbar' => [
                        'end' => 'prev,next dayGridMonth'
                    ]

                ]);
            return view('backoffice', compact('calendar'));
        }else{
            return Redirect::back()->withErrors(['error']);
        }
    }



    public function horarioGuia(Request $request)
    {

        $events = [];
        $data = Event::where('id_guia',$request->input('guiaID') )->get();

        foreach ($data as $dat)
        {
            // echo $dat["id"];

            $events[] = Calendar::event(
                $dat["nombre"], //event title
                false, //false
                $dat["start"], //start time (you can also use Carbon instead of DateTime)
                $dat["end"] //end time (you can also use Carbon instead of DateTime)
            );
        }

        $calendar = new Calendar();
        $calendar->addEvents($events)
            ->setOptions([
                'locale' => 'es',
                'firstDay' => 0,
                'displayEventTime' => true,
                'selectable' => true,
                'initialView' => 'dayGridMonth',
                'month'=>    'mes',
                'headerToolbar' => [
                    'end' => 'prev,next dayGridMonth'
                ]

            ]);


      return view('backoffice', ['calendar'=>$calendar,'id_guia'=>$request->input('guiaID')]);
    }




    public function csvGenerator(Request $request)
    {
        return Excel::download(new EventsExports, 'listaEntera.csv');
    }


}
