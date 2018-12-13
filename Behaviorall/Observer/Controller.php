<?php

class Controller implements IObservable
{
    protected $observers = [];

    /**
     * @param IObserver $observer
     */
    public function addObserver(IObserver $observer)
    {
        $this->observers[get_class($observer)] = $observer;
    }

    /**
     * @param IObserver $observer
     *
     * @return mixed
     */
    public function removeObserver(IObserver $observer)
    {
        unset($this->observers[get_class($observer)]);
    }

    /**
     *Execute methods Observer::handleEvent for all observers
     *
     * @return void
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->handEvent($this);
        }
    }
}
