<?php

declare(strict_types=1);

namespace CoI\ModelTest\Duck;

use CoI\Model\Duck\RedheadDuck;
use CoI\Model\Duck\Quack\Quack;
use CoI\Model\Duck\Fly\FlyWithWings;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class RedheadDuckTest extends TestCase
{
    protected FlyWithWings $flyable;

    protected Quack $quackable;

    #[\Override]
    protected function setUp(): void
    {
        $this->flyable = new FlyWithWings();

        $this->quackable = new Quack();
    }

    #[Test]
    public function itCanBeConstructed(): void
    {
        $duck = new RedheadDuck($this->flyable, $this->quackable);

        self::assertInstanceOf(RedheadDuck::class, $duck);
    }

    #[Test]
    public function itCanDisplay(): void
    {
        $duck = new RedheadDuck($this->flyable, $this->quackable);

        self::assertEquals("I'm a real Redhead duck", $duck->display());
    }
}
