<?php

namespace frontend\helpers;

class DateHelper
{

    public $month;

    public function __construct(){
        $this->setMonth();
    }

    public function setMonth(){
        $this->month = [
            'январь',
            'февраль',
            'март',
            'апрель',
            'май',
            'июнь',
            'июль',
            'август',
            'сентябрь',
            'октябрь',
            'ноябрь',
            'декабрь'
        ];
    }

    public function getMonth(){
        return $this->month;
    }

    public function getDateWithMonthName($date){
        $date = new \DateTime($date);
        return $this->month[$date->format('n')-1].' '.$date->format('d,Y');
    }

}