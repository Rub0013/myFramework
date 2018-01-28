<?php
    class home extends controller
    {

        public function __construct()
        {
            parent::__construct();
            $conn = Database::getInstance($this->host, $this->user, $this->pass, $this->dbName);
            $res = $conn->runQuery("SELECT * FROM add_books where price > ?",[4000]);
            echo "<pre>";
            print_r($res);
            echo "</pre>";
            $this->view->render('header');
            $this->view->render('footer');
        }
    }
