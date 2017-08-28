<?php

function encodeAtbash ($str, $abc)
{
    $new_str = "";

    $abc = preg_split("//u", $abc, -1, PREG_SPLIT_NO_EMPTY);
    $arr_str = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);

    array_unshift($abc, " ");

    for ($i = 0; $i < count($arr_str); $i++)
    {
        $number = array_search($arr_str[$i], $abc);
        if ($number == $abc[0]) $new_str .= $abc[0];
        elseif (!$number) $new_str .= $arr_str[$i];
        else $new_str .= $abc[count($abc) - $number];
    }
    return $new_str;
}

function decodeAtbash ($str, $abc)
{
    $new_str = "";

    $abc = preg_split("//u", $abc, -1, PREG_SPLIT_NO_EMPTY);
    $arr_str = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);

    array_unshift($abc, " ");

    for ($i = 0; $i < count($arr_str); $i++)
    {
        $number = array_search($arr_str[$i], $abc);
        if ($number == $abc[0]) $new_str .= $abc[0];
        elseif (!$number) $new_str .= $arr_str[$i];
        else $new_str .= $abc[($number - count($abc)) * (-1)];
    }
    return $new_str;
}
?>