<?php
    $file_1 = fopen("file_1.txt", "r");
    $file_2 = fopen("file_2.txt", "r");

    $str_1 = fread($file_1,filesize("file_1.txt"));
    $str_2 = fread($file_2,filesize("file_2.txt"));
    $count = 0;

    function checkValidString($str_1){
        echo $str_1;
        echo "<br>";
        if ((strpos($str_1, 'restaurant') !== FALSE) && (strpos($str_1, 'book')) !== FALSE){
            return false;
        } elseif ((strpos($str_1, 'restaurant') !== FALSE) || (strpos($str_1, 'book')) !== FALSE){
            return true;
        } else {
            return false;
        }
    }

    function count_sentence($str, $count){
        for($i==0; $i<strlen($str); $i++){
            if (substr($str,$i,1) == "."){
                $count+=1;
            }
        }
        return $count;
    }

    $check_str_1 = checkValidString($str_1);
    if (($check_str_1 == false)){
        echo "-> Chuỗi  không hợp lệ <br>";
    }else {
        $n_1 = count_sentence($str_1, $count);
        echo "-> Chuỗi  hợp lệ. chuỗi bao gồm $n_1 câu. <br>";
    }

    $check_str_2 = checkValidString($str_2);
    if (($check_str_2 == false)){
        echo "-> Chuỗi  không hợp lệ <br>";
    }else {
        $n_2 = count_sentence($str_2, $count);
        echo "-> Chuỗi  hợp lệ. chuỗi bao gồm $n_2 câu. <br>";
    }

?>