<?php

class About
{
    public function index($name = 'Arif', $job = 'Turu')
    {
        echo "Halo, nama saya $name, saya adalah seorang $job";
    }

    public function page()
    {
        echo "About/page";
    }
}
