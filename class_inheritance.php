<?php

class Fly {

    var $name;
    var $size;
    var $hook;

    function fly_description() {
        return $this->name . " , " . $this->size . " , ";
        }
}

class Salmon extends Fly {
}

$u = new Fly;
$u->first_name = 'Jerry';
$u->last_name = 'Seinfeld';
$u->username = 'jseinfled';

$c = new Salmon;
$c->first_name = 'George';
$c->last_name = 'Costanza';
$c->username = 'gcostanza';

echo $u->full_name() . '<br />';
echo $c->full_name() . '<br />';

echo get_parent_class($u) . '<br />';
echo get_parent_class($c) . '<br />';

if(is_subclass_of($c, 'User')) {
    echo "Instance is a subclass of User.<br />";
}

$parents = class_parents($c);
echo implode(', ', $parents) . '<br />';

?>