<?php
include_once 'Colorable.php';

class Square implements Colorable
{
    public $width;

    public function howToColor()
    {
        return "Color all four sides";
    }
}
