<?php
    // Function for extracting a string from within a string, given a start and end point
    function stringExtract($item, $start, $end) {
    	if (($startPos = stripos($item, $start)) === false) {	// If $start string is not found
    		return false;	// Return false
    	} else if (($endPos = stripos($item, $end)) === false) {	// If $end string is not found
    		return false;	// Return false
    	} else {
    		$substrStart = $startPos + strlen($start);	// Assigning start position
    		return substr($item, $substrStart, $endPos - $substrStart);	// Returning string between start and end positions
    	}
    }
?>