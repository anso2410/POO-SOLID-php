<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

class JsonFormatter implements FormatterInterface

{
    public function format(Report $report) : string
    {
        return json_encode($report->getContents());
    }

    public function deserialize(string $str): Report
    {
        // dans str :  {"title":"Mon titre", "date":"2021-01-01", "data": [5,6]}
        $contents = json_decode($str);

        return new Report($contents['date'], $contents['title'], $contents['data']);
    }
}