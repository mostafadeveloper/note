<?php
 
FUNCTION yahoo($id){ 
    $url = 'http://opi.yahoo.com/online?u='; 
    $data = FILE_GET_CONTENTS($url . $id); 
    IF (TRIM(STRTOLOWER(STRIP_TAGS($data))) != 'user not specified.') { 
        RETURN (STRLEN($data) == 140) ? 'online' : 'offline'; 
    } ELSE { 
    RETURN TRIM(STRIP_TAGS($data)); 
    } 
    } 
?>
<?php

echo yahoo(m_zs93);
?>