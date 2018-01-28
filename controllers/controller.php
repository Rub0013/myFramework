<?php
    include_once 'config/config.php';
    class controller
    {
        protected $host = HOST;
        protected $user = USER;
        protected $pass = PASS;
        protected $dbName = DB;

        public function __construct()
        {
            $this->view = new view();
        }
    }