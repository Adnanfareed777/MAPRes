<?php
/**
 * Created by PhpStorm.
 * User: Adnan Fareed
 * Date: 12/21/2018
 * Time: 10:49 AM
 */
$support =(int)$_POST['support'];
include 'class.apriori.php';

$Apriori = new Apriori();
$Apriori->setMaxScan(20);       //Scan 2, 3, ...
$Apriori->setMinSup(2);         //Minimum support 1, 2, 3, ...
$Apriori->setMinConf($support);       //Minimum confidence - Percent 1, 2, ..., 100
$Apriori->setDelimiter(',');
$Apriori->process('files/array.txt');
//Association Rules
echo '<h1>Association Rules</h1>';
$Apriori->printAssociationRules();



?>
<div class="container">
    <?php
    echo '<h1>Association Rules</h1>';
    $Apriori->printAssociationRules();
    ?>
</div>
