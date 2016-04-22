<?php


class My extends Thread {
    public function run() {
        echo "toto";
    }
}
$my = new My();
var_dump($my->start());



?>
