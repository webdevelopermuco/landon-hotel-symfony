<?php


namespace App\Service;


class DateCalculator
{

    public function yearsdiff($year){
        $curYear = date('Y');
        $diff = $curYear - $year;
        return $diff;
    }

}