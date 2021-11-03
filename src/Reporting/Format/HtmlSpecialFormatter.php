<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

class HtmlSpecialFormatter extends HtmlFormatter {
    public function formatToHtml(Report $report)
    {
        $html = parent::formatToHtml($report);

        return '
            <div style="font-weight: bold">
              '.   $html .'
            </div>
        
        ';
    }
}