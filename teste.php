<?php
    foreach (glob($_SERVER['DOCUMENT_ROOT']."/lib/*.php") as $fn) require_once $fn;
    
    header('Content-Type: text/html; charset=UTF-8');
    echo h1("opa") ;
?>