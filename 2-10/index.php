<?php
    function getCapacityArea($vertical, $width, $height) {
        $area = $vertical * $width * $height;
        print "直方体の体積は". $area. "です。";
    }
    getCapacityArea(5, 10, 8);
?>