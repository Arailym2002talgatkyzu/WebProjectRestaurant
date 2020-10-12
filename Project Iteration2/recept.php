<!DOCTYPE html>
<html>
<body>
<div class="container">
    <div class="main">
        <nav>
            <div class="logo">
                <h1>Food&CookLovers</h1>
            </div>
            <ul>
                <li><a href="indexx.php">HOME</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="contact.php">SIGN UP</a></li>
            </ul>
        </nav>
    </div>
    <img src="SpecialOrder/menu.jpg" width="100%" height="300px">
    <div class="c">
    <div class="flex-container">
    <span id ='b'>Kazakh menu</span>
<?php
$Kazakh=array(array("Soup","Meal"),array("Nauryz soup","Kuyrdak"),
    array("Naryn","Fish"),array("Soup","Manty"),array("Naryn","Rice"),
    array("Soup","Steak"),    array("Chicken Soup","Besbarmak"),    array("Kespe Soup","Kazy"),);
$firstdish=array_column($Kazakh,1);
array_multisort($firstdish,SORT_ASC,$Kazakh);
print '<table>';
for ($i=0;$i<sizeof($Kazakh);$i++){
    print '<tr>';
    for($j=0;$j<sizeof($Kazakh[$j]);$j++){
        print '<td>'.$Kazakh[$i][$j].'</td>';
    }
    print '</tr>';
}
print '</table>';
?>
</div>
        <div class="flex-container">
    <span id="b">OZBEK MENU</span>
    <?php
    $OZBEK=array(array("Soup","Pilaf"),array("Chicken soup","Barbecue"),
        array("Soup","Uzbek bread"),array("Soup","Lagan"),array("Naryn","Domlama"),
        array("Kesps Soup","Samsa"),    array("Chicken Soup","Chuchvara"),    array("Kespe Soup","Kaynatma shurva"),);
    $firstdish=array_column($OZBEK,1);
    array_multisort($firstdish,SORT_ASC,$OZBEK);
    print '<table>';
    for ($i=0;$i<sizeof($OZBEK);$i++){
        print '<tr>';
        for($j=0;$j<sizeof($OZBEK[$j]);$j++){
            print '<td>'.$OZBEK[$i][$j].'</td>';
        }
        print '</tr>';
    }
    print '</table>';
    ?>
    </div>
    <div class="flex-container">
    <span id="b">TURKISH MENU</span>
    <div class="d">
        <?php
        $TURKISH=array(array("Soup","Maklube"),array("Chicken soup","Barbecue"),
            array("Soup","Dolma"),array("Soup","Kofte"),array("Naryn","Rice"),
            array("Kespe Soup","Alayan"),    array("Chicken Soup","Pide"),    array("Kespe Soup","Baklava"),);
        $firstdish=array_column($TURKISH,1);
        array_multisort($firstdish,SORT_ASC,$TURKISH);
        print '<table>';
        for ($i=0;$i<sizeof($TURKISH);$i++){
            print '<tr>';
            for($j=0;$j<sizeof($TURKISH[$j]);$j++){
                print '<td>'.$TURKISH[$i][$j].'</td>';
            }
            print '</tr>';
        }
        print '</table>';
        ?>
    </div>
    </div>
        <div class="flex-items">
            <br> <span id="b">BREAKFAST,LUNCH,DINNER,DESSERT </span></br>
            <?php
$food = array ( '1.Breakfast'=> 'Egg', 'Lunch'=>'Manty','Dinner' =>'Soup', 'Dessert'=> 'Red Velvet');


foreach ($food as $key => $value){
    print ("$key -- $value <br>");
}

?>
        </div>
        <div class="flex-items">
            <?php
            $food1 = array ( '2.Breakfast'=> 'Porridge', 'Lunch'=>'Chicken Soup ','Dinner' =>'Plov', 'Dessert'=> 'Whoopie pie');
            foreach ($food1 as $key => $value){
                print ("$key -- $value <br>");
            }

            ?>
        </div>

        <div class="flex-items">
            <div class="c">

            <?php
            $food2 = array ( '3.Breakfast'=> 'Sandwich', 'Lunch'=>'Pasta','Dinner' =>'Burger', 'Dessert'=> 'Ice-cream');

            foreach ($food2 as $key => $value){
                print ("$key -- $value <br>");
            }

            ?>
            </div>
        </div>
<style>
    table,tr,td {
        padding-bottom: 10px;
        border: 1px solid black;
    }
    nav{
        width: 100%;
        height: 100px;
        background-color: #fff;
    }
    nav ul{
        float: right;
    }
    nav ul li{
        display: inline-block;
        list-style-type: none;
    }
    nav ul li a{
        text-decoration: none;
        color: black;
        line-height: 100px;
        padding: 35px 10px;
        font-size: 18px;
        font-weight: normal;
        letter-spacing: 0.5px;
    }
    .logo{
        float: left;
        line-height: 100px;

    }

    .main{
        max-width: 1200px;
        height: auto;
        margin: 0 auto;
    }
    .container{
        width: 100%;
        float: left;
        padding-left: 30px;

    }
    .container .column1 li{
        font-family: monospace;
        font-size: 20px;
        letter-spacing: 2px;
        line-height: 20px;
    }
    a:hover {
        background-color: green;
        color: white;
    }
    #b{
        font-family: 'Gabriola';
        color: green;
        font-size: 30px;
        text-align: center;
        text-transform: uppercase;
    }
    .c{
        padding-top: 30px;
        margin-inline-start: 100px;

    }


    .flex-container {
        display:inline-table;
        margin-left: 200px;
    }
    .flex-items{
        display: inline-block;
    }

</style>
</body>
</html>
