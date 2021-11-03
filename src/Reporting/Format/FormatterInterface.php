<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

interface FormatterInterface {
    public function format(Report $report): string;
    public function deserialize(string $str): Report;
}