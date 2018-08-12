<?php

//Використання функції func_get_args()

function myecho() {
    foreach (func_get_args() as $v) {
        echo $v.'<br>';
    }
}

myecho('Pupkin', 'Perepelyca', 'Koval', 'Bybko');