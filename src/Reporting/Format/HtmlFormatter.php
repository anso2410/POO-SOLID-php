<?php

namespace App\Reporting\Format;

use App\Reporting\Report;
use Exception;

class HtmlFormatter implements FormatterInterface
 {
    public function format(Report $report) : string
     {

        $contents = $report->getContents();
        $data = "";

        foreach ($contents['data'] as $value) {
            $data .= "<li>$value</li>";
        }

        return "
            <h2>{$contents['title']}</h2>
            <em>Date :{$contents['date']}</em>
            <h4>Données : </h4>
            <ul>
                $data
            </ul>
        ";
    }

}

/**
 * interface CoffeeMaker {
 *  public function makeCoffee();
 *  public function makeCappuccino();
 *  public function makeTea();
 * }
 * 
 * class MachineACaffe implements CoffeMaker {
 *  public function makeCoffe() {
 *      // 30lignes de code
 *  }
 *  public function makeCappucino() {
*       // 30lignes de code
*   }
 *  public function make Tea() {
 *        // 20lignes de code
 *  }
 * }
 * 
 * bonne méthode
 * 
 * interface TeaMaker {
 *  public function makeTea() {
 *      20 lignes de code
 *  }
 * interface CoffeMaker {
 *  public function makeCofee() {
 *      30lignes de code
 *  }
 *  interface CappucinoMaker {
 *  public function makeCappucino() {
 *      //30 lignes de code
 * }
 * }
 * }
 * }
 */