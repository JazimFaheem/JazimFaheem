<?php

namespace App\Helpers;

class Combinations
{
    public static function generate($arrays, $i = 0)
    {
        if (!isset($arrays[$i])) {
            return array();
        }
        
        if ($i == count($arrays) - 1) {
            return $arrays[$i];
        }
        
        // get combinations from subsequent arrays
        $tmp = self::generate($arrays, $i + 1);
        
        $result = array();
        
        // concat each array from tmp with each element from $arrays[$i]
        foreach ($arrays[$i] as $value) {
            foreach ($tmp as $combination) {
                $result[] = is_array($combination) ? 
                    array_merge([$value], $combination) : 
                    [$value, $combination];
            }
        }
        
        return $result;
    }
}