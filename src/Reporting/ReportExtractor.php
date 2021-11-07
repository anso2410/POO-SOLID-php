<?php

namespace App\Reporting;

use App\Reporting\Format\FormatterInterface;


class ReportExtractor
{
    protected $formatters = [];

    public function addFormatter(FormatterInterface $formatter) {
        $this->formatters[] = $formatter;
    }

    
    /**
     * Doit afficher l'ensemble des formats possibles pour un rapport en se servant
     * des formatters ajoutés dans le tableau
     *
     * @param Report $report
     *
     * @return array
     */
    public function process(Report $report): array
    {
        $results = [];

        foreach($this->formatters as $formatter) {
            $results[] = $formatter->format($report);
        }
        
      

        return $results;
    }
}
