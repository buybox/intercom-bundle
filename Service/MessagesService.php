<?php

namespace Scytale\Bundle\IntercomBundle\Service;

use Intercom\IntercomClient;

/**
 * Class MessagesService
 *
 * @author Paweł Winiecki <pawel.winiecki@gmail.com>
 */
class MessagesService
{
    /**
     * @var IntercomClient
     */
    private $client;

    /**
     * MessagesService constructor.
     *
     * @param string $accessToken
     */
    public function __construct($accessToken)
    {
        $this->client = new IntercomClient($accessToken, null);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function createMessage(array $data)
    {
        return $this->client->messages->create($data);
    }
}