<?php
function total_item($cart) {
    $total = 0;
    foreach($cart as $key => $value) {
        $total += $value['quantity'];
    }
    return $total;
}
?>