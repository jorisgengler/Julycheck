<?php

$maand = date("m") ;



function julycheck($maand) {


if ($maand == "7") {
    echo "It's July, so it can get really hot";
}
else {
    echo "It’s not July, so at least we’re not in the peak of the heat.";
}
}


echo julycheck($maand);

?>
