<?php

class txt implements Page
{
    public $value = 'SomeValue';

    public function createPage()
    {
        echo 'new ' . __CLASS__ . ' page';
    }

    public function getSomevalue()
    {
        return $this->value;
    }
}
