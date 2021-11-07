<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

class HtmlSpecialFormatter extends HtmlFormatter
 {
    public function format(Report $report) : string
    {
        $html = parent::format($report);

        return '
            <div style="font-weight: bold">
              '.   $html .'
            </div>
        
        ';
    }
}