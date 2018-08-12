<?php

//Змінна кількість параметрів (застарілий варіант)
function myecho() {
    for ($i = 0; $i < func_num_args(); $i++) {
        echo func_get_arg($i).'<br>';
    }
}
myecho('Pupkin', 'Perepelyca', 'Koval', 'Bybko');