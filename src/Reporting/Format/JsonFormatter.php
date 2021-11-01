<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

class JsonFormatter {
    public function formatToJson(Report $report) {
        return json_encode($report->getContents());
    }
}