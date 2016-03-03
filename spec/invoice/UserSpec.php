<?php

namespace spec\invoice;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('invoice\User');
    }
    function it_get_something()
    {
        $this->getcos()->shouldreturn('asd');
    }
}
