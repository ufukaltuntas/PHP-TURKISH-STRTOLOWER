<?php
function strlower_tr($string, $charset = 'UTF-8')
{
    $special_cases = array(
        'Ç' => 'ç',
        'Ş' => 'ş',
        'Ö' => 'ö',
        'Ğ' => 'ğ',
        'I' => 'ı',
    );
    $string = str_replace(array_keys($special_cases), array_values($special_cases), $string);
    return mb_convert_case(mb_strtolower($string), MB_CASE_TITLE, $charset);
}

echo strlower_tr('teSt cONtent'); // output  Test Content

echo strlower_tr('test content'); // output  Test Content

echo strlower_tr('TEST CONTENT'); // output  Test Content

?>
