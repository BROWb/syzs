<?php
 function criarhash($senha){
    $hash = password_hash($senha,PASSWORD_DEFAULT);
    return $hash;
 }

?>