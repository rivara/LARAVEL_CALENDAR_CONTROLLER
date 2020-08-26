@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Calendario</h1>
@stop

@section('content')


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/mainTime.js') }}"></script>
    <form  action="{{ route('csvGenerator') }}" >
        <div class="row">
            <div class="col-10"></div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">csv Entero</button>
            </div>
        </div>
    </form>
    <br>

    <form  action="{{ route('horarioGuia') }}" >
    <div class="row guiaS">
        <div class="col-3"></div>
        <div class="col-3">
            <h4>Seleccione el guia</h4>
        </div>
        <div class="col-4">
            <select class="form-control" name="guiaID">
                @isset($id_guia)
                    <?php
                        if ($id_guia =="guia1"){
                            $id_guia_nombre="José-Manuel";
                        }
                        if ($id_guia =="guia2"){
                            $id_guia_nombre="Ignacio";
                        }
                        if ($id_guia =="guia3"){
                            $id_guia_nombre="Roberto";
                        }
                        if ($id_guia =="guia4"){
                            $id_guia_nombre="Angela";
                        }
                        if ($id_guia =="guia5"){
                            $id_guia_nombre="Eduardo";
                        }
                        if ($id_guia =="guia6"){
                            $id_guia_nombre="Emilio";
                        }
                        if ($id_guia =="guia7"){
                            $id_guia_nombre="Ricardo";
                        }
                        if ($id_guia =="guia8"){
                            $id_guia_nombre="Asier";
                        }
                    ?>
                    <option value={{$id_guia}}>{{$id_guia_nombre}}</option>
                @endisset
                <option value="guia1">José-Manuel</option>
                <option value="guia2">Ignacio</option>
                <option value="guia3">Roberto</option>
                <option value="guia4">Angela</option>
                <option value="guia5">Eduardo</option>
                <option value="guia6">Emilio</option>
                <option value="guia7">Ricardo</option>
                <option value="guia7">Asier</option>
            </select>
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-primary">ok</button>
        </div>
      </div>
    </form>
    <br>

    <div class="row">
        <div class="col-12">
            {!! $calendar->calendar() !!}
            {!! $calendar->script() !!}
        </div>
    </div>




@stop

@section('css')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

@stop

@section('js')


 @stop
