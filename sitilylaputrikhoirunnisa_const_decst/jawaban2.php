<?php
    class tiket{
        public $harga="1500000";

        public function __construct()
        {
            echo "ini berasal dari consrtuct tiket <br/>";
        }
        public function __destruct()
        {
            echo "ini berasal dari destruct tiket";
        }
    }
        $pesawat = new tiket();