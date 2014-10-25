<?php
    
/*
 * String Extract PHP Function
 *
 * Simple function for extracting a string from within a string, given a start and end point.
 *
 * Copyright (c) 2014 Jacob Ward (http://www.jacobward.co.uk)
 *
 * Licensed under the MIT (http://opensource.org/licenses/MIT) and GPL (http://www.gnu.org/copyleft/gpl.html) licenses.
 *
 */

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