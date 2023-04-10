<?php

    // Polymorphism

    interface Talkable
    {
        public function talk();
    }

    class American implements Talkable
    {
        public function talk()
        {
            echo "English";
        }
    }

    class Myanmar implements Talkable
    {
        public function talk()
        {
            echo "Burmese";
        }
    }

    $american = new American();
    $american->talk();

    $myanmar = new Myanmar();
    $myanmar->talk();
