<?php
trait MammalType {
    static function getType() {
        echo __TRAIT__. " : Mammal";
        echo "<br /> called from : " . __CLASS__;
    }
}