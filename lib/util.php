<?php
 function sanitize($string, $conn){
    $string = mysqli_real_escape_string($conn, $string);
    $string = htmlentities($string);
    return $string;
 }
 
 function getHtml($tag, $value, $attr=""){
     return "<$tag $attr>$value</$tag>";
 }
 
 function h1($value){
     return getHtml("h1",$value);
 }

?>
