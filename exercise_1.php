<?php
    $file_1 = fopen("file_1.txt", "r");
    $file_2 = fopen("file_2.txt", "r");

    $str_1 = fread($file_1,filesize("file_1.txt"));
    $str_2 = fread($file_2,filesize("file_2.txt"));

    $var_1 = 'restaurant';
    $var_2 = 'book';
    $count = 0;

    function checkValidString($string, $v1, $v2)
    {
        $checkBook = strpos($string, $v1);
        $checkRes = strpos($string, $v2);
        if (($checkBook !== false && $checkRes !== false) || ($checkBook === false && $checkRes === false)) {
            return false;
        }
        return true;
    }

    function count_sentence($check_str, $str)
    {
        if (($check_str == false)){
            echo "Chuỗi  không hợp lệ <br>";
        }else {
            $n = substr_count($str, ".");
            echo " Chuỗi  hợp lệ. chuỗi bao gồm $n câu. <br>";
        }
    }
    $check_str_1 = checkValidString($str_1, $var_1, $var_2);
    $check_str_2 = checkValidString($str_2, $var_1, $var_2);

    count_sentence($check_str_1, $str_1);
    count_sentence($check_str_2, $str_2);
?>