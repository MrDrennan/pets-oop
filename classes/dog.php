<?php

class Dog extends Pet
{
    function fetch()
    {
        echo "<p>" . $this->getName() . " is fetchiing</p>";
    }

    function talk()
    {
        echo "<p>" . $this->getName() . " is barking</p>";
    }

}
