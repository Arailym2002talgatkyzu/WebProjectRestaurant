<?php


class mainmenu
{
    public $name;
    public $nationality;
    public $price1;
    public $price2;
    public $sale;
    public $bonus;

    public function printAll(){
        echo "Name:   ", " ", $this->name;
        print "<br>";
        echo "National meal of   :", " ", $this->nationality;
        print "<br>";
        echo "Full portion:  ",  "Price:", " ", $this->price1;
        print "<br>";
        echo "Half portion:  ",  "Price:", " ", $this->price2;
        print "<br>";
        echo "Sale  :", " ", $this->sale;
        print "<br>";
        echo "Bonus:", " ", $this->bonus;
    }
}