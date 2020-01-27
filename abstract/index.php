<?php
    //Abstract jednoduše řečeno přikazujeme classe, aby obsahovala určitou metodu pokud neobsahuje, tak bude error
    include_once 'abstract/paymenttypes.abstract.php';
    include_once 'classes/BuyProduct.class.php';

    $buyProduct = new BuyProduct();
    echo $buyProduct->getPayment(); 