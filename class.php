<?php //я знаю про таку штуку як успадкування, проте вважаю не доцільним використовувати його в тому, що описано в завданні 1. Тому додам для цього ще один клас)
class People{
    var $city;
    var $street;
    var $house;
    var $human;
    function People($city_name,$street_name,$number_h,$name) //конструктор класу з параметром
    {
        $this->city=$city_name;
        $this->street=$street_name;
        $this->house=$number_h;
        $this->human=$name;
    }
    function Out()
    {            
        echo "<br>Місто:".$this->city.";<br>Вулиця:".$this->street.";<br>Будинок:".$this->house.";<br>Ім'я:".$this->human.";";
    }
    function Modify($city_name,$street_name,$number_h,$name)
    {
        if($city_name!="") $this->city=$city_name;
        if($street_name!="") $this->street=$street_name;
        if($number_h!="") $this->house=$number_h;
        if($name!="") $this->human=$name;
    }
    function Destroy()//деструктор
    {
        echo"<h5>Destroy;(</h5>";
        unset($this);
    }
}
function check($data)//функцыя що очищує зчитані з полів дані від:
{
    $data = trim($data);//пробілів по обидві сторони від тексту 
    $data = stripslashes($data);//екрануючих слешів (зворотні)
    $data = htmlspecialchars($data);//замінює спец символи html 
    $data = strip_tags($data);//видаляе скриптові теги
    return $data;
}

class People2 extends People{
    var $number;
    function People2($number_t)
    {
        People::People($city_name,$street_name,$number_h,$name);
        $this->number=$number_t;
    }
    function Out()
    {            
        People::Out();
        echo "<br>tel:".$this->number.";";
    }
    function Modify($number_t)
    {
        People::Modify($city_name,$street_name,$number_h,$name);
        $this->number=$number_t;
    }
    function Destroy()
    {
        People::Destroy();
    }
}
    
?>