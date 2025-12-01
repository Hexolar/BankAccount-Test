<?php

require_once "BankAccount.php";

$Jānis = new BankAccount(owner: 'JANIS', balance: 500);
$David = new BankAccount(owner: 'DAVID', balance: 600);
$Jānis->deposit(20);
$Jānis->printInfo();

?>