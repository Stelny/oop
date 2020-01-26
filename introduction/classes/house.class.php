<?php

    class House {
        private $address;
        private $number;

        public function __construct($address, $number) {
            $this->address = $address;
            $this->number = $number;
        }
        public function getAddress() {
            return $this->address;
        }
    }