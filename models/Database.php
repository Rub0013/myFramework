<?php
    class Database
    {
        protected $DB;
        private static $instance = null;

        private function __construct($host,$user,$pass,$dbName)
        {
            try {
                $this->DB = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }
            catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        protected function __clone()
        {
            //Me not like clones! Me smash clones!
        }

        public static function getInstance($host,$user,$pass,$dbName)
        {
            if(!self::$instance)
            {
                self::$instance = new Database($host,$user,$pass,$dbName);
            }
            return self::$instance;
        }

        public function runQuery($sql, $args = NULL)
        {
            if (!$args) {
                $stmt = $this->DB->query($sql);
            } else {
                $stmt = $this->DB->prepare($sql, $args);
                $stmt->execute($args);
            }
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        }
    }