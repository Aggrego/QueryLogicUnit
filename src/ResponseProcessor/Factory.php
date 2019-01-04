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

namespace Aggrego\QueryLogicUnit\ResponseProcessor;

use Aggrego\QueryConsumer\Query;
use Aggrego\QueryConsumer\Response;
use Aggrego\QueryLogicUnit\ResponseProcessor\Exception\CouldNotFoundCorrespondResponseProcessorException;

interface Factory
{
    /**
     * @param Query $query
     * @param Response $response
     * @return ResponseProcessor
     * @throws CouldNotFoundCorrespondResponseProcessorException
     */
    public function create(Query $query, Response $response): ResponseProcessor;
}
