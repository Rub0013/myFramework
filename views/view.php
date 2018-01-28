<?php
    class view
    {
        public function render($name)
        {
            include_once $name.'.php';
        }
    }
