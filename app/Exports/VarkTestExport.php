<?php

namespace App\Exports;

use App\Models\VarkTest\VarkTest;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class VarkTestExport implements
    // FromCollection,
    WithHeadings,
    FromQuery,
    ShouldAutoSize,
    WithMapping,
    WithEvents,
    WithCustomStartCell
{


    use Exportable;

    protected $data;
    protected $posicionI = 5;
    protected $posicionJ = 5;

    protected $email;

    function __construct($email)
    {
        $this->email = $email;
        // dd($email);
    }

    public function query()
    {
        // $data = VarkTest::query()->with('user')->where('email', $this->email)->get();
        $data = VarkTest::query()->with('user')->where('email', $this->email);
        // dd($data);
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
        return 'C5';
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('C5' . ':' . "I5")->applyFromArray([
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

                    $event->sheet->getStyle('C' . $this->posicionI . ':' . 'I' . $this->posicionJ)->applyFromArray([
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
