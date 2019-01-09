<?php
/**
 * This file is part of the Aggrego.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace spec\Aggrego\QueryLogicUnit\EventConsumer;

use Aggrego\QueryConsumer\Client as QueryConsumerClient;
use Aggrego\QueryLogicUnit\EventConsumer\Client;
use Aggrego\QueryLogicUnit\EventProcessor\EventProcessor;
use Aggrego\QueryLogicUnit\ResponseProcessor\Factory;
use Aggrego\EventConsumer\Client as EventConsumerClient;
use PhpSpec\ObjectBehavior;

class ClientSpec extends ObjectBehavior
{
    function let(
        EventProcessor $eventProcessor,
        QueryConsumerClient $client,
        Factory $factory,
        EventConsumerClient $eventConsumerClient
    ) {
        $this->beConstructedWith($eventProcessor, $client, $factory, $eventConsumerClient);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }
}
