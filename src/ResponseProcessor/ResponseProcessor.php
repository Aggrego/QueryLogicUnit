<?php
/**
 * This file is part of the Aggrego.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Aggrego\QueryLogicUnit\ResponseProcessor;

use Aggrego\EventConsumer\Shared\Events;
use Aggrego\QueryConsumer\Query;
use Aggrego\QueryConsumer\Response;

interface ResponseProcessor
{
    public function processResponse(Query $query, Response $response): void;

    public function pullEvents(): Events;
}
