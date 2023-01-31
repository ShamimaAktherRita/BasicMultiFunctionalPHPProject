<?php

require_once './vendor/autoload.php';

use app\classes\Calculator;
use app\classes\Series;
use app\classes\WordCount;
use app\classes\AlphabetCount;


if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }elseif ($_GET['page'] == 'calculator')
    {
        include "pages/calculator.php";
    }elseif ($_GET['page'] == 'series')
    {
        include "pages/series.php";
    }elseif($_GET['page'] == 'alphabetcount')
    {
        include "pages/alphabetcount.php";
    }elseif($_GET['page'] == 'wordcount')
    {
        include "pages/wordcount.php";
    }
}elseif (isset($_POST['calculator_btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->getResult();
    include "pages/calculator.php";
}elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $result = $series->getSeries();
    include "pages/series.php";
}elseif (isset($_POST['alphabetcount_btn']))
{
    $alphabetcount = new AlphabetCount($_POST);
    $result = $alphabetcount->getAlphabetCount();
    include "pages/alphabetcount.php";
}elseif (isset($_POST['wordcount_btn']))
{
    $wordcount = new WordCount($_POST);
    $result = $wordcount->getWordCount();
    include "pages/wordcount.php";
}


