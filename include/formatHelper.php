<?php

/**
 * date style
 */
function formatDate($date){
    return date('F j, Y, g:i a', strtotime($date));
}
/**
 * shorten text style
 */
function Textshorten($text, $chars = 250){
    $text = $text."";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text,' '));
    $text = $text."...";
    return $text;
}
/**
 * shorten text style col-9-md
 */
function textShort($text, $chars = 120){
    $text = $text."";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text,' '));
    $text = $text."...";
    return $text;
}
/**
 * shorten text style for view in table
 */
function TextShortenTable($text, $chars = 70){
    $text = $text." ";
    $text = substr($text,0 ,$chars);
    //$text = substr($text, 0, strrpos($text,''));
    $text = $text."...";
    return $text;
}
/**
 * shorten text style for continue reading
 */
function TextContinueReading($text, $chars = 360){
    $text = $text." ";
    $text = substr($text,0 ,$chars);
   // $text = substr($text, 0, strrpos($text,''));
    $text = $text."...";
    return $text;
}

/**
 * shorten text style for sidebar
 */
function TextSidebarShorten($text, $chars = 25){
    $text = $text."";
    $text = substr($text, 0, $chars);
//    $text = substr($text, 0, strrpos($text,' '));
    $text = $text."...";
    return $text;
}
/**
 * shorten text style for sidebar
 */
function OtherTextShorten($text, $chars = 100){
    $text = $text."";
    $text = substr($text, 0, $chars);
//    $text = substr($text, 0, strrpos($text,' '));
    $text = $text."...";
    return $text;
}