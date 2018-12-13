<?php

class View implements IObserver
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function handleEvent(IObservable $observable)
    {
        echo get_class($observable);
    }
}
