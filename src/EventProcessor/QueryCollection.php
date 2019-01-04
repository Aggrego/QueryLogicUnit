<?php
/**
 *
 * This file is part of the Aggrego.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

declare(strict_types = 1);

namespace Aggrego\QueryLogicUnit\EventProcessor;

use Traversable;

/**
 * Interface CommandCollection
 *
 * Should contain command's collection
 * @see \Aggrego\QueryConsumer\Query
 */
interface QueryCollection extends Traversable
{
}
