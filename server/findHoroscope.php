function findHoroscope($month, $day)
<?php

{
    if ($month == 3 && $day >= 21 || $month == 4 && $day <= 19) 
    {
        return "väduren";
    } 
    else if ($month == 4 && $day >= 20 || $month == 5 && $day <= 20) 
    {
        return "oxen";
    } 
    else if ($month == 5 && $day >= 21 || $month == 6 && $day <= 21) 
    {
        return "tvillingarna";
    } 
    else if ($month == 6 && $day >= 22 || $month == 7 && $day <= 22) 
    {
        return "kräftan";
    } 
    else if ($month == 7 && $day >= 23 || $month == 8 && $day <= 22) 
    {
        return "lejonet";
    } 
    else if ($month == 7 && $day >= 23 || $month == 8 && $day <= 22) 
    {
        return "lejonet";
    } 
    else if ($month == 8 && $day >= 23 || $month == 9 && $day <= 22) 
    {
        return "jungfrun";
    } 
    else if ($month == 9 && $day >= 23 || $month == 10 && $day <= 22) 
    {
        return "vågen";
    } 
    else if ($month == 10 && $day >= 23 || $month == 11 && $day <= 21) 
    {
        return "skorpionen";
    } 
    else if ($month == 11 && $day >= 22 || $month == 12 && $day <= 21) 
    {
        return "skytten";
    } 
    else if ($month == 12 && $day >= 22 || $month == 1 && $day <= 19) 
    {
        return "stenbocken";
    } 
    else if ($month == 1 && $day >= 20 || $month == 2 && $day <= 18) 
    {
        return "vattumannen";
    } 
    else if ($month == 2 && $day >= 19 || $month == 3 && $day <= 20) 
    {
        return "vattumannen";
    }
}