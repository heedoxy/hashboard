<?php

public function old($field){
    return $_POST[$field] ?? null;
}
