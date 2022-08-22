<?php
    namespace test;

    class Table
    {
        public $title = ' ';
        public $rows = 0;

        public function info()
        {
            echo "My Table title is ".$this->title." and My table is ".$this->rows." rows";
        }
    }

    $table = new Table;
    $table->title = 'Customers';
    $table->rows = '5';
    $table->info();
?>