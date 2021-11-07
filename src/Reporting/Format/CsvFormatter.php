<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

class CsvFormatter implements FormatterInterface, DeserializerInterface
{

    public function format(Report $report) : string
    {

        $contents = $report->getContents();

        $data = implode(";", $contents['data']);

        unset($contents['data']);

        return implode(",", $contents) . ";" . $data;
    }

    public function deserialize(string $str): Report
    {
        //"titre;date;5;6"
        $contents = explode(";", $str);
        // ["titre", "date", 5, 6]
        $data = [
            $contents[2],
            $contents[3]
        ];

        return new Report($contents[1], $contents[0], $data);
    }
}