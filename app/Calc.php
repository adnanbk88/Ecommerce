<?php

namespace App;

class Calc {
    public static function total($products)
    {
        $some = 0;
        foreach ($products as $p) {
            $some += $p->price;
        }
        return $some;
    }
}