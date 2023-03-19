<?php
$str = "HELLO1112he";
function affine_encrypt($str)
{
    $a = 19;
    $b =3;  
    $result = "";
    $n = strlen($str);
    for ($i = 0; $i < $n; $i++)
    {
        if (ctype_alpha($str[$i]))
        {
            $result .= chr((($a * (ord($str[$i]) - 65)) + $b) % 26 + 65);
        }
        else
        {
            $result .= $str[$i];
        }
    }
    return $result;
}
//echo affine_encrypt($str, $a, $b);
function affine_decrypt($str)
{
    $a = 19;
    $b =3; 
    $result = "";
    $n = strlen($str);
    $a_inv = 0;
    $valid_input = false;
    for ($i = 0; $i < 26; $i++)
    {
        if (($a * $i) % 26 == 1)
        {
            $a_inv = $i;
            $valid_input = true;
            break;
        }
    }
    if (!$valid_input)
    {
        return "Invalid input";
    }
    for ($i = 0; $i < $n; $i++)
    {
        if (ctype_alpha($str[$i]))
        {
            $result .= chr((($a_inv * (ord($str[$i]) - 65 - $b + 26)) % 26) + 65);
        }
        else
        {
            $result .= $str[$i];
        }
    }
    return $result;
}
//echo affine_decrypt($str, $a, $b);
// echo affine_encrypt($str);
// $str = affine_encrypt($str);
// echo affine_decrypt($str)
?>