<?php

declare(strict_types=1);

namespace CoI\ModelTest\Duck;

use CoI\Model\Duck\DecoyDuck;
use CoI\Model\Duck\Quack\MuteQuack;
use CoI\Model\Duck\Fly\CannotFly;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class DecoyDuckTest extends TestCase
{
    protected CannotFly $flyable;

    protected MuteQuack $quackable;

    #[\Override]
    protected function setUp(): void
    {
        $this->flyable = new CannotFly();

        $this->quackable = new MuteQuack();
    }

    #[Test]
    public function itCanBeConstructed(): void
    {
        $duck = new DecoyDuck($this->flyable, $this->quackable);
        self::assertInstanceOf(DecoyDuck::class, $duck);
    }

    #[Test]
    public function itCanDisplay(): void
    {
        $duck = new DecoyDuck($this->flyable, $this->quackable);

        self::assertEquals("I'm a Decoy duck", $duck->display());
    }

    #[Test]
    public function itCanFly(): void
    {
        $duck = new DecoyDuck($this->flyable, $this->quackable);

        self::assertEquals("I can't fly!", $duck->fly());
    }

    #[Test]
    public function itCanQuack(): void
    {
        $duck = new DecoyDuck($this->flyable, $this->quackable);

        self::assertEquals("Silence", $duck->quack());
    }
}
