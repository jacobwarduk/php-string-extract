PHP String Extract
==================

String Extract PHP can be used to extract a string from within another string, given a start and end point. Useful for certain web scraping tasks.

Usage
-----

    $string = '<h1>Hello World!</h1>';
    
    $extract = stringExtract($string, '<h1>', '</h1>');
    
    echo $extract;	// Echoes “Hello World!”
    

If successful, the function will return the desired string. If unsuccessful, the function will return **false**.