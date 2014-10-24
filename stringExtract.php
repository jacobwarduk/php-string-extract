<?php
    // Function for extracting a string, given a start and end point
    function stringExtract($item, $start, $end){
        $item = stristr($item, $start);
    	$item = substr($item, strlen($start));
    	$stop = stripos($item, $end);
    	$data = substr($item, 0, $stop);
    	return $data;
    }
?>