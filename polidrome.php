<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $lowercase = strtolower($word);
        $temp = strrev($lowercase);
        
        $string_reverse = str_split($temp);

        $palindrome = '';

        foreach ($string_reverse as $value) {
            $palindrome .= $value;
        }

        if ($palindrome = $word) {
            return TRUE;
        }else{
            return FALSE;
        }

    }
}

echo Palindrome::isPalindrome('Deleveled');