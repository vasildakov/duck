<?php

/**
 * This file is part of the vasildakov/duck project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Vasil Dakov <vasildakov@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link https://github.com/vasildakov/duck GitHub
 */

declare(strict_types=1);

namespace CoI\Model\Duck;

use CoI\Model\Duck\Fly\Flyable;
use CoI\Model\Duck\Quack\Quackable;

/**
 * Class Duck
 *
 * @package Model
 * @author Vasil Dakov <vasildakov@gmail.com>
 */
abstract class Duck
{
    public function __construct(
        public readonly Flyable $flyable,
        public readonly Quackable $quackable,
    ) {
    }

    public function quack(): string
    {
        return $this->quackable->quack();
    }

    public function fly(): string
    {
        return $this->flyable->fly();
    }

    abstract public function display(): string;

    public function swim(): string
    {
        return 'All ducks float, even decoys!';
    }
}
