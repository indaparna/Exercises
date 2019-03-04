<?php
echo '<h2>Trait Example</h2>';
trait Trait1 {
    public function trait1() {
        echo 'Trait 1 <br/> ';
    }
}
trait Trait2 {
    public function trait2() {
        echo 'Trait2 <br/>';
    }
}
trait Trait3 {
    public function trait3() {
        echo 'Trait 3 <br/>';
    }
}
class Something {
    use Trait1, Trait2, Trait3;
}

$o = new Something();
$o->trait1();
$o->trait2();
$o->trait3();
?>
