<?php
namespace App\Reporting;

class StringReport extends Report {
    public function getStringContents()
    {

        return"title:$this->title;date:$this->date;data:" . implode(",", $this->data);
    }
}

