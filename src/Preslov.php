<?php

namespace Marxo;

/**
 * @package Preslov
 * @version 1.0.0
 * @author Марко Кажић <marko.kazic@zamphyr.com>
 * @link http://marxo.me
 * @license Unlicense
 */

class Preslov
{
    /**
     * Transliterates Serbian from Cyrillic to Latin and vice versa.
     * @param  string $text   Input text
     * @param  string $pismo  ISO 15924 source script name 'Cyrl' for Cyrillic, 'Latn' for Latin
     * @return string Transliterated text
     */
    public static function preslovi($text, $pismo)
    {
        $cirilica = array ("панјелиниз","конјуг","конјук","конјун","анјуг","поджил","поджет","поджањ","поджњ","преджет","преджив","подждр","подржар","поджуп","оджал","оджив","оджвал","оджељ","оджел","оджден","наджир","наджуп","надрждрел","наджањ","наджњ","наджет","наджив","наджн","инјункт","инјек","Џ","џ","Љ","љ","Њ","њ","Ђ","ђ","а","б","в","г","д","е","ж","з","и","ј","к","л","љ","м","н","о","п","р","с","т","ћ","у","ф","х","ц","ч","ш","ѕ","А","Б","В","Г","Д","Е","Ж","З","И","Ј","К","Л","Љ","М","Н","Њ","О","П","Р","С","Т","Ћ","У","Ф","Х","Ц","Ч","Џ","Ш","Ѕ");

        $latinica = array ("panjeliniz","konjug","konjuk","konjun","anjug","podžil","podžet","podžanj","podžnj","predžet","predživ","podždr","podžar","podžup","odžal","odživ","odžval","odželj","odžel","odžden","nadžir","nadžup","nadždrel","nadžanj","nadžnj","nadžet","nadživ","nadžn","injunkt","injek","Dž","dž","Lj","lj","Nj","nj","Đ","đ","a","b","v","g","d","e","ž","z","i","j","k","l","lj","m","n","o","p","r","s","t","ć","u","f","h","c","č","š","dz","A","B","V","G","D","E","Ž","Z","I","J","K","L","Lj","M","N","Nj","O","P","R","S","T","Ć","U","F","H","C","Č","Dž","Š","Dz");

        if($pismo === "Cyrl") {
            return str_replace($cirilica, $latinica, $text);
        }
        elseif($pismo === "Latn")
        {
            return str_replace($latinica, $cirilica, $text);
        }

    }
}

?>
