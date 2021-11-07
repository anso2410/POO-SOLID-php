<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

interface DeserializerInterface
{
    public function deserialize(string $str): Report;
}