<?php

declare(strict_types=1);

namespace CoI\ModelTest\Duck;

use CoI\Model\Duck\RubberDuck;
use CoI\Model\Duck\Quack\Squeak;
use CoI\Model\Duck\Fly\CannotFly;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class RubberDuckTest extends TestCase
{
    protected CannotFly $flyable;

    protected Squeak $quackable;

    #[\Override]
    protected function setUp(): void
    {
        $this->flyable = new CannotFly();

        $this->quackable = new Squeak();
    }

    #[Test]
    public function itCanBeConstructed(): void
    {
        $duck = new RubberDuck($this->flyable, $this->quackable);

        self::assertInstanceOf(RubberDuck::class, $duck);
    }

    #[Test]
    public function itCanFly(): void
    {
        $duck = new RubberDuck($this->flyable, $this->quackable);

        self::assertEquals("I can't fly!", $duck->fly());
    }

    #[Test]
    public function itCanQuack(): void
    {
        $duck = new RubberDuck($this->flyable, $this->quackable);

        self::assertEquals("Squeak", $duck->quack());
    }

    #[Test]
    public function itCanSwim(): void
    {
        $duck = new RubberDuck($this->flyable, $this->quackable);

        self::assertEquals("All ducks float, even decoys!", $duck->swim());
    }

    #[Test]
    public function itCanDisplay(): void
    {
        $duck = new RubberDuck($this->flyable, $this->quackable);

        self::assertEquals("I'm a Rubber duck", $duck->display());
    }
}
