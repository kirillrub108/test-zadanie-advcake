<?php

class ReverseWords
{
    public static function reverseLettersInWords($str) {
        $words = explode(" ", $str);
        $reversed = [];

        foreach ($words as $word) {
            $reversedWord = '';
            $length = mb_strlen($word, 'UTF-8');

            for ($i = $length - 1; $i >= 0; $i--) {
                $reversedWord .= mb_substr($word, $i, 1, 'UTF-8');
            }

            $reversed[] = $reversedWord;
        }

        return implode(' ', $reversed);
    }
}