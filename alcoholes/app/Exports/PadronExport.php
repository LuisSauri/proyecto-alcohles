<?php

namespace App\Exports;

use App\Models\forms;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class PadronExport implements FromView, WithStyles
{
    public function view(): View
    {
        $padrones = forms::select('fecha_rev', 'fecha_mov','idMunicipio', 'idLocalidad','colonia',
        'calle',
        'cruzamiento',
        'clave',
        'nombreLocal',
        'idGiro',
        'nombreContribuyente',
        'rfc',
        'licencia',
        'horario',
        'fol_ant',
        'arrendamiento',
        'telefono')->get();

        return view('registros.padron_excel')->with('padrones', $padrones);
    }

    public function styles(Worksheet $sheet)
    {
        // Estilo para las celdas del encabezado
        $sheet->getStyle('A1:R1')->applyFromArray([
            'font' => [
                'bold' => true,
                'color' => ['rgb' => 'ffffff'], // Color del texto blanco
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['rgb' => '0d6efd'], // Color de fondo primario
            ],
        ]);

        // Estilo para el resto de las celdas
        $sheet->getStyle('A2:R' . ($sheet->getHighestRow()))->applyFromArray([
            'font' => [
                'name' => 'Arial', // Cambia el tipo de fuente si es necesario
                'size' => 12,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ]);

        // Alternar colores de fondo para filas
        $sheet->getStyle('A2:R' . ($sheet->getHighestRow()))->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['rgb' => 'f2f2f2'], // Color de fondo para filas pares
            ],
        ]);

        $sheet->getStyle('A2:R' . ($sheet->getHighestRow()))->getAlignment()->setWrapText(true);
    }
}


