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

class ShopProduct{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    function __construct($title, $firstName, $mainName, $price,
                        $numPages = 0, $playLength =0)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
        $this->playLength = $playLength;
    }

    function getProducer()
    {
        return  "{$this->producerFirstName} "
            . "{$this->producerMainName}";
    }

    function getSummaryLine()
    {
        $base = "$this->title ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}

class CDProduct extends ShopProduct{
    function getPlayLength(){
        return $this->playLength;
    }
    function getSummaryLine(){
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }
}

class BookProduct extends ShopProduct{
    function getNumberOfPages(){
        return $this->numPages;
    }
}

class shopProductWriter {
    public function write( ShopProduct $shopProduct )
    {
        $str = "{$shopProduct->title}: "
                .$shopProduct->getProducer()
                ." ({$shopProduct->price})\n";
        print $str;
    }
}



$product1 = new ShopProduct("Собачье сердце",
    "Михаил", "Булгаков", 5.99);
//print "Автор: {$product1->getProducer()}\n";

$writer = new ShopProductWriter();
$writer->write( $product1 );

echo "<br><br>";

$product2 = new CDProduct("Пропавщий без вести",
    "Группа", "ДДТ",
    10.99, null, 60.33);

print "Исполнитель: {$product2->getProducer()}\n";

?>



</body>
</html>