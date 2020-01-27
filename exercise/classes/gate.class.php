<?php
    //Interface
    interface PaymentInterface {
        public function payNow();
    }
    interface loginInterface {
        public function loginFirst();
    }

    class PayPal implements PaymentInterface, LoginInterface {
        public function payNow() {}
        public function loginFirst() {}
        public function paymentProcess() {
            $this->loginFirst();
            $this->payNow();
        }
    }
    class BankTransfer implements PaymentInterface, LoginInterface {
        public function payNow() {}
        public function loginFirst() {}
        public function paymentProcess() {
            $this->loginFirst();
            $this->payNow();
        }
    }
    class Visa implements PaymentInterface {
        public function payNow() {}
        public function paymentProcess() {
            $this->payNow();
        }
    }
    class Cash implements PaymentInterface {
        public function payNow() {}
        public function paymentProcess() {
            $this->payNow();
        }
    }

    class BuyProduct {
        public function pay(PaymentInterface $paymentType) {
            $paymentType->paymentProcess();
        }
        public function onlinePay(loginInterface $paymentType) {
            $paymentType->paymentProcess();
        }
    }

    $paymentType = new Visa();
    $buyProduct = new BuyProduct();
    $buyProduct->pay($paymentType);
    
