<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Events\V1\Sink;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class SinkValidateTest extends HolodeckTestCase {
    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->events->v1->sinks("DGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->sinkValidate->create("test_id");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['TestId' => "test_id", ];

        $this->assertRequest(new Request(
            'post',
            'https://events.twilio.com/v1/Sinks/DGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Validate',
            null,
            $values
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "result": "valid"
            }
            '
        ));

        $actual = $this->twilio->events->v1->sinks("DGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->sinkValidate->create("test_id");

        $this->assertNotNull($actual);
    }
}