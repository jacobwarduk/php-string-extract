PHP String Extract
==================

PHP String Extract can be used to extract a string from within another string, given a start and end point.

Usage
-----

    $string = 'The quick brown fox jumped over the lazy dog';
    
    $extract = stringExtract($string, 'brown ', ' jumped');
    
    echo $extract;	// Echoes "fox"
    

If successful, the function will return the desired string. If unsuccessful, the function will return **false**.