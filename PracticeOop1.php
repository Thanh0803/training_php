<?php
    class ExerciseString 
    {
        public $check1;
        public $check2;

        function readFile($filename)
        {
            $file = fopen($filename, "r");
            $str = fread($file,filesize($filename));
            fclose($file);
            return $str;
        }

        function checkValidString($string, $v1, $v2)
        {
            $checkBook = strpos($string, $v1);
            $checkRes = strpos($string, $v2);
            if (($checkBook !== false && $checkRes !== false) || ($checkBook === false && $checkRes === false)) 
            {
                return false;
            }else{
                return true;
            }
        }

        function writeFile($text)
        {
            $myfile = fopen("result_file.txt", "w");
            fwrite($myfile, $text);
            fclose($myfile);
        }
    }
    $var_1 = 'restaurant';
    $var_2 = 'book';

    $object1 = new ExerciseString();
    $str1 = $object1->readFile("file_1.txt");
    $str2 = $object1->readFile("file_2.txt");

    $object1->check1 = $object1->checkValidString($str1, $var_1, $var_2);
    $object1->check2 = $object1->checkValidString($str2, $var_1, $var_2);

    $n = substr_count($str2, ".");
    $count = " Chuỗi có $n câu";
 ;
    $checkFile1 = ($object1->check1 == true) ? 'check1 là chuỗi Hợp lệ' : 'check1 là chuỗi Không hợp lệ';
    $checkFile2 = ($object1->check2 == true) ? 'check2 là chuỗi Hợp lệ.'.$count : 'check2 là chuỗi Không hợp lệ.'.$count;  
    $result = "$checkFile1 \n$checkFile2";
    $object1->writeFile($result); 
?>