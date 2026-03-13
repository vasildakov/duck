<?php

declare(strict_types=1);

namespace CoI\ModelTest\Duck;

use CoI\Model\Duck\MallardDuck;
use CoI\Model\Duck\Quack\Quack;
use CoI\Model\Duck\Fly\FlyWithWings;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class MallardDuckTest extends TestCase
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
        $duck = new MallardDuck($this->flyable, $this->quackable);

        self::assertInstanceOf(MallardDuck::class, $duck);
    }

    #[Test]
    public function itCanSwim(): void
    {
        $duck = new MallardDuck($this->flyable, $this->quackable);

        self::assertEquals("All ducks float, even decoys!", $duck->swim());
    }

    #[Test]
    public function itCanDisplay(): void
    {
        $duck = new MallardDuck($this->flyable, $this->quackable);

        self::assertEquals("I'm a real Mallard duck", $duck->display());
    }

    #[Test]
    public function itCanFly(): void
    {
        $duck = new MallardDuck($this->flyable, $this->quackable);

        self::assertEquals("I'm flying!!", $duck->fly());
    }

    #[Test]
    public function itCanQuack(): void
    {
        $duck = new MallardDuck($this->flyable, $this->quackable);

        self::assertEquals('Quack', $duck->quack());
    }
}
