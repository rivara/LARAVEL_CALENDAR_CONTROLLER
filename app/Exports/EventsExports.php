<?php


namespace App\Exports;


use App\Event;
use Maatwebsite\Excel\Concerns\FromCollection;

class EventsExports implements FromCollection
{
    public function collection()
    {
        return Event::all();
    }
}
