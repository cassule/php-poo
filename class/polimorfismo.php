<?php

abstract class Animal {

    public function falar () {

        return "Som";

    }

    public function mover () {

        return "Anda";

    }
}

class Cachorro extends Animal {

    public function falar() {

        return "Late";

    }
}

class Gato extends Animal {

    public function falar() {

        return "Miar";

    }

}

class Passaro extends Animal {

    public function falar() {

        return "Cantar";

    }

    public function mover () {

        return "Voa e ". parent::mover();

    }

}

?>