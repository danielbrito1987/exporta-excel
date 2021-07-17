<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Contracts\View\View;
use App\Models\Mapa;

class UsersExport implements ShouldAutoSize, FromView
{
    public function view(): View
    {
        $export1 = new Mapa('SALA 1-A', 'MANHÃ', 'MONIQUE', 'PSICOM', '7:30', null, true);
        $export2 = new Mapa('SALA 1-A', 'MANHÃ', 'MONIQUE', 'PSICOM', '8:00', null, true);
        $export3 = new Mapa('SALA 1-A', 'MANHÃ', 'MONIQUE', 'PSICOM', '8:30', null, true);
        $export4 = new Mapa('SALA 1-A', 'MANHÃ', 'MONIQUE', 'PSICOM', '9:00', 'JOÃO MARCELO NEGROMONTE', true);
        $export5 = new Mapa('SALA 1-A', 'MANHÃ', 'MONIQUE', 'PSICOM', '9:30', null, true);
        $export6 = new Mapa('SALA 1-A', 'MANHÃ', 'MONIQUE', 'PSICOM', '10:00', null, true);
        $export7 = new Mapa('SALA 1-A', 'MANHÃ', 'MONIQUE', 'PSICOM', '10:30', null, true);
        $export8 = new Mapa('SALA 1-A', 'MANHÃ', 'MONIQUE', 'PSICOM', '11:00', null, true);
        $export9 = new Mapa('SALA 1-A', 'MANHÃ', 'MONIQUE', 'PSICOM', '11:30', 'NAIA EMANUELA', true);
        $export10 = new Mapa('SALA 1-A', 'MANHÃ', 'MONIQUE', 'PSICOM', '12:00', 'NAIA EMANUELA', true);
        $export11 = new Mapa('SALA 1-A', 'MANHÃ', 'MONIQUE', 'PSICOM', '12:30', null, false);

        $data = [
            $export1,
            $export2,
            $export3,
            $export4,
            $export5,
            $export6,
            $export7,
            $export8,
            $export9,
            $export10,
            $export11
        ];

        return view('mapa', [
            'exports' => $data
        ]);
    }
}
