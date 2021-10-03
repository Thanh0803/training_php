<?php
    trait Active
    {
        public function defindYourSelf()
        {
            return get_class($this);
        }
    }
    abstract class Country
    {
        protected $slogan;
        abstract public function sayHello();
        public function setSlogan($slogan)
        {
            $this->slogan = $slogan;
        }    
    }
    interface Boss
    {
        public function checkValidSlogan();
    }

    class EnglandCountry extends Country implements Boss
    {
        use Active;
        public function sayHello()
        {
            echo "Hello";
        }
        public function checkValidSlogan()
        {
            $v1 = 'england';
            $v2 = 'english';
            $slogan_Eng = $this->slogan; 
            $checkEngland = strpos($slogan_Eng, $v1);
            $checkEnglish = strpos($slogan_Eng, $v2);
            if ($checkEngland !== false || $checkEnglish !== false) {
                return true;
            }
            return false;
        }
    }

    class VietnamCountry extends Country implements Boss
    {
        use Active;
        public function sayHello()
        {
            echo "Xin chao";
        }
        public function checkValidSlogan()
        {
            $var1 = 'vietnam';
            $var2 = 'hust';
            $slogan_Vie = $this->setSlogan; 
            $checkVietnam = strpos($slogan_Vie, $var1);
            $checkHust = strpos($slogan_Vie, $var2);
            if (($checkVietnam !== false && $checkHust !== false)) {
                return true;
            }
            return false;
        }
    }

    $englandCountry = new EnglandCountry();
    $vietnamCountry = new VietnamCountry();

    $englandCountry->setSlogan('england is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.');
    $vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.');

    $englandCountry->sayHello(); // Hello
    echo "<br>";
    $vietnamCountry->sayHello(); // Xin chao
    echo "<br>";

    var_dump($englandCountry->checkValidSlogan()); // true
    echo "<br>";
    var_dump($vietnamCountry->checkValidSlogan()); // false

    echo 'I am ' . $englandCountry->defindYourSelf(); 
    echo "<br>";
    echo 'I am ' . $vietnamCountry->defindYourSelf(); 
?>



