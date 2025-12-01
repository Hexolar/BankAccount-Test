<?php

class BankAccount {

    function __construct(public $owner, private $balance) {
        $this->owner = $owner;
        $this->balance = $balance;
      }
      
      
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return $this->balance;
        } else {
            echo "Nuh uh";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return $this->balance;
        } else {
            echo "Ay caramba";
        }
    }
    function printInfo() {
        echo $this->owner;
        echo $this->balance;
    }
}

?>