<?php

namespace Ogrre\Laravel\PoleEmploi\Traits;

use Ogrre\Laravel\PoleEmploi\PoleEmploiClient;

trait HasClient
{
    public PoleEmploiClient $client;

    /**
     * @param PoleEmploiClient $poleEmploiClient
     */
    public function __construct(PoleEmploiClient $poleEmploiClient)
    {
        $this->client = $poleEmploiClient;
    }

    /**
     * @param string $endpoint
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    protected function request(string $endpoint, string $code = null, string $fields = null)
    {
        return (array)$this->client->base('GET', $endpoint . self::request($code, $fields));
    }

    /**
     * @param string $code
     * @param string|null $fields
     * @return string
     */
    protected static function parameters(string $code, string $fields = null)
    {
        return $fields ? $code . '?champs=' . $fields : $code;
    }
}
