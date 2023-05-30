<?php

namespace App\Exports;

use App\Models\PersonalityTest\PersonalityTest;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class AllPersonalityTestExport implements
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

    public function query()
    {
        $data = PersonalityTest::query()->with('user');
        return $data;
    }

    public function map($data): array
    {
        return [
            $data->user->name,
            $data->email,
            $data->extrovertScore,
            $data->introvertScore,
            $data->sensoryScore,
            $data->intuitiveScore,
            $data->rationalScore,
            $data->emotionalScore,
            $data->qualifierScore,
            $data->perceptualScore,
            $data->personalityTypeObtained
        ];
    }
    public function headings(): array
    {
        return [
            [
                'name',
                'email',
                'extrovertScore',
                'introvertScore',
                'sensoryScore',
                'intuitiveScore',
                'rationalScore',
                'emotionalScore',
                'qualifierScore',
                'perceptualScore',
                'personalityTypeObtained'
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
                $event->sheet->getStyle('A1' . ':' . "K1")->applyFromArray([
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

                    $event->sheet->getStyle('A' . $this->posicionI . ':' . 'K' . $this->posicionJ)->applyFromArray([
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
