<?php

function likes( $names ) {
    $N=count($names);
    if ($N==0) {
        return "no one likes this";
    } elseif ($N>=1) {
        return $names[0]." likes this";
    }elseif ($N>=2) {
        return $names[2]." and ".$names[1]." likes this";
    }elseif ($N>=5) {
        return $names[4].", ".$names[5]." and ".$names[3]." likes this";
    }elseif ($N>=6) {
        return $names[1].", ".$names[2].", ".$names[3]." and ".$names[4]." likes this";
    }
}
$result = likes($names=["Peter","Alex", "Jacob", "Mark", "Max","John"]);
var_dump($result);

?>