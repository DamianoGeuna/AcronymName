<?php

function acronymName($name){
    $explodeName = explode(" ",$name);
    $correctNames = array_map('correctCase',$explodeName);
    return implode($correctNames);
}

function correctCase($name){
    // aAAa | AAA   ->  Tutto minuscolo
    $lowerCase = strtolower($name);
    //aaaa   ->   Lettera iniziale maiuscola
    $upperCaseName = ucfirst($lowerCase);
    $acronymName = preg_replace('/[a-z ]+/m','.',$upperCaseName);
    return $acronymName;
}