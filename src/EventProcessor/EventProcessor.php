<?php
/**
 * This file is part of the Aggrego.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Aggrego\QueryLogicUnit\EventProcessor;

use Aggrego\EventConsumer\Event;
use Aggrego\EventConsumer\Exception\UnprocessableEventException;

interface EventProcessor
{
    /**
     * @param  Event $event
     * @return QueryCollection
     * @throws UnprocessableEventException if event (payload) have invalid structure.
     */
    public function transform(Event $event): QueryCollection;
}
