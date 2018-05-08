<?php

namespace app\components;

class Myhelper 
{

public static function allElements()
{
     // проверяю если нет какого элемента для добавления в сборку(пользователя) возвращаю false
     if (!isset($_SESSION['assembly']['Corpus']) || !isset($_SESSION['assembly']['Processor'])  || !isset($_SESSION['assembly']['Ram'])  || !isset($_SESSION['assembly']['Harddisk'])  || !isset($_SESSION['assembly']['Soundcard'])   || !isset($_SESSION['assembly']['Videocard'])  || !isset($_SESSION['assembly']['Networkcard'])  || !isset($_SESSION['assembly']['Driver'])  || !isset($_SESSION['assembly']['Coolingsystem'])  || !isset($_SESSION['assembly']['Powersupply']) )
    {
        return false;
    } else return true;
}
}

?>