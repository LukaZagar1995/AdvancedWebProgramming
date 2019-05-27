<?php 
 

$xml = simplexml_load_file('lv2.xml');

foreach ($xml->dataset->record as $record) { 
    //Ispiši naslov
    echo '<div><h2>'.$record->ime . $record->prezime ;   
	echo '</h2>';		    
	echo '<img src=\"'.$record->slika.'/><br>';
	echo '<span>email: '.$record->email.' </span>';
	echo 'zivotopis: <p>email: '.$record->zivotopis.' </p>'; 
    
    
    
    
    echo '</div>';
    
}
?>