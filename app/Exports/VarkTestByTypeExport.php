<?php

namespace App\Exports;

use App\Models\VarkTest\VarkTest;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class VarkTestByTypeExport implements
    WithHeadings,
    FromQuery,
    ShouldAutoSize,
    WithMapping,
    WithEvents,
    WithCustomStartCell
{
   
    use Exportable;

    protected $data;
    protected $posicionI = 1;
    protected $posicionJ = 1;

    protected $varkType;

    function __construct($varkType)
    {
        $this->varkType = $varkType;
    }
    public function query()
    {
        $data = VarkTest::query()->with('user')->where('varkTypeObtained', $this->varkType);
        return $data;
    }

    public function map($data): array
    {
        return [
            $data->user->name,
            $data->email,
            $data->visualPunctuation,
            $data->auralPunctuation,
            $data->readPunctuation,
            $data->kinestheticPunctuation,
            $data->varkTypeObtained
        ];
    }
    public function headings(): array
    {
        return [
            [
                'name',
                'email',
                'visualPunctuation',
                'auralPunctuation',
                'readPunctuation',
                'kinestheticPunctuation',
                'varkTypeObtained'
            ],
        ];
    }


    public function startCell(): string
    {
        return 'A1';
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1' . ':' . "G1")->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => 'FFFFFF']
                    ],
                    'alignment' => [
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                    'borders' => [
                        'outline' => [
                            'borderStyle' =>  \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '00000000']
                        ]
                    ],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
                        'rotation' => 90,
                        'startColor' => [
                            'argb' => '3F65E0',
                        ],
                        'endColor' => [
                            'argb' => '3F65E0',
                        ],
                    ],
                ]);

                $this->data = $this->query();
                // dd($this->data);
                foreach ($this->data->get() as $data) {
                    // print_r($data);
                    $this->posicionI +=  1;
                    $this->posicionJ += 1;

                    $event->sheet->getStyle('A' . $this->posicionI . ':' . 'G' . $this->posicionJ)->applyFromArray([
                        'font' => [
                            'bold' => false,
                            'color' => ['rgb' => '000000']
                        ],
                        'alignment' => [
                            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        ],
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' =>  \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                'color' => [
                                    'argb' => '00000000'
                                ]
                            ]
                        ],
                    ]);
                }
            }
        ];
    }
}
