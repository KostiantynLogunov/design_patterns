<?php

interface IObserver
{
    public function handleEvent(IObservable $observable);
}
