<?php

interface IText
{
    public function show();
}

class Text implements IText
{
    public function show(){}
}

class TextHello implements IText
{
    protected $obj;

    public function __construct(IText $text)
    {
        $this->obj = $text;
    }

    public function show()
    {
        echo "РАсширяем функционал";
        $this->obj->show();
    }
}

class TextSpace implements IText
{
    protected $obj;

    public function __construct(IText $text)
    {
        $this->obj = $text;
    }

    public function show()
    {
        echo "РАсширяем функционал";
        $this->obj->show();
    }
}

$decor = new TextHello(new TextSpace(new TextHello(new Text())));