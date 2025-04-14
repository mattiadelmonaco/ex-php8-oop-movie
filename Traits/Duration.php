<?php

trait Duration {
    public $duration;

    public function isLongMovie() {
        if ($this->duration > 120) {
            return "Il film è lungo";
        } else {
            return "Il film è corto";
        }
    }
}

?>