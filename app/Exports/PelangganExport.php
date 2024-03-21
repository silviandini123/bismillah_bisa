<?php

namespace App\Exports;

use App\Models\Pelanggan;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
use \Maatwebsite\Excel\Sheet;
use App\Exports\PaketExport;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class PelangganExport implements FromCollection, withHeadings, withEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pelanggan::get();
    }

    public function exportData() {
        $date = date('Y-m-d');
        return Excel::download(new PelangganExport, $date.'_pelanggan.xlsx');
    }
    public function headings(): array
    {
        return[
            // 'No.',
            'ID Pelanggan',
            'Nama',
            'Email',
            'No Telp',
            'Alamat',
        ];
    }

    // public function registerEvents(): array
    // {
    //     return[
    //         AfterSheet::class  => function(AfterSheet $event) {
    //             $event->sheet->grtColumnDimension('A')->setAutoSize(true);
    //             $event->sheet->grtColumnDimension('B')->setAutoSize(true);
    //             $event->sheet->grtColumnDimension('C')->setAutoSize(true);

    //             $event->sheet->insertNewRoeBefore(1, 2);
    //             $event->sheet->mergeCells('A1, G1');
    //             $event->sheet->setCellValue('A1','Jenis');
    //             $event->sheet->getStyle('A1')->getFont()->setBold(true);
    //             $event->sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

    //             $event->sheet->getStyle('A3:G' .$event->sheet->getHighestRow())->applyFromArray([
    //                 'borders' => [
    //                     'allBorders' => [
    //                         'borderStyle' => \phpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
    //                         'color' => ['argb' => '000000']
    //                     ]
    //                 ]
    //             ]);
    //         }
    //     ];
    // }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getColumnDimension('A')->setAutoSize(true);
                $event->sheet->getColumnDimension('B')->setAutoSize(true);
                $event->sheet->getColumnDimension('C')->setAutoSize(true);
                $event->sheet->getColumnDimension('D')->setAutoSize(true);
                $event->sheet->getColumnDimension('E')->setAutoSize(true);

                $event->sheet->insertNewRowBefore(1, 2);
                $event->sheet->mergeCells('A1:E1');
                $event->sheet->setCellValue('A1', 'Data Pelanggan');
                $event->sheet->getStyle('A1')->getFont()->setBold(true);
                $event->sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

                $highestRow = $event->sheet->getHighestRow();
                $event->sheet->getStyle('A3:E' . $highestRow)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'bordersStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['agrb' => '000000']
                        ]
                    ]
                ]);
            }
        ];
    }
}
