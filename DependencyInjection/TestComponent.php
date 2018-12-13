<?php
$container = [];
$container['request'] = new \liw\Request();

class TestComponent
{
    protected $request;

    public function __construct(\liw\Request $request)
    {
        $this->request = $request;
    }
}

$component = new TestComponent($container['request']);

//Example DI Container
$component2 = $container->get(TestComponent::class);
