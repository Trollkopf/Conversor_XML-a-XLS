<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class XmlToXlsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function convert(Request $request)
    {
        $xmlUrl = $request->input('xml_url');
        $selectedFields = $request->input('fields');

        // Mapa de campos a títulos
        $fieldTitles = [
            'id' => 'ID',
            'date' => 'Fecha',
            'ref' => 'REF',
            'price' => 'Tarifa',
            'new_build' => 'Nueva vivienda',
            'type' => 'Tipo',
            'town' => 'Ciudad',
            'province' => 'Provincia',
            'country' => 'País',
            'location_detail' => 'Localización',
            'beds' => 'Habitaciones',
            'baths' => 'Aseos',
            'pool' => 'Piscina',
            'surface_area.built' => 'Superficie construida',
            'surface_area.plot' => 'Parcela',
            'energy_rating.consumption' => 'Consumo',
            'energy_rating.emissions' => 'Emisiones'
        ];

        $booleanFields = ['new_build', 'pool'];

        $xmlContent = file_get_contents($xmlUrl);
        $xml = simplexml_load_string($xmlContent);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header
        $col = 'A';
        foreach ($selectedFields as $field) {
            $title = isset($fieldTitles[$field]) ? $fieldTitles[$field] : $field;
            $sheet->setCellValue($col . '1', $title);
            $sheet->getStyle($col . '1')->getFont()->setBold(true);
            $col++;
        }

        // Set data
        $row = 2;
        foreach ($xml->property as $property) {
            $col = 'A';
            foreach ($selectedFields as $field) {
                // Check for nested fields
                if (strpos($field, '.') !== false) {
                    $parts = explode('.', $field);
                    $value = $property;
                    foreach ($parts as $part) {
                        $value = $value->{$part};
                    }
                } else {
                    $value = $property->{$field};
                }

                // Convert boolean fields
                if (in_array($field, $booleanFields)) {
                    $value = ((string) $value === '1') ? 'Sí' : 'No';
                }

                // Format price fields
                if ($field === 'price') {
                    $value = number_format((float) $value, 0, '', '.').' €';
                }

                $sheet->setCellValue($col . $row, (string) $value);
                $col++;
            }
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'properties.xlsx';
        $writer->save($fileName);

        return response()->download($fileName)->deleteFileAfterSend(true);
    }
}
