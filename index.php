<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php

class shopProduct{
    public $title = "Стандартный товар";
    public $producerMainName = "Фамилия автора";
    public $producerFirstName = "Фамилия автора";
    public $price = 0;

    function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    function getProducer()
    {
        return  "{$this->producerFirstName} "
            . "{$this->producerMainName}";
    }

}

$product1 = new shopProduct("Собачье сердце", "Михаил", "Булгаков", 5.99);
print "Автор: {$product1->getProducer()}\n";

?>



</body>
</html>