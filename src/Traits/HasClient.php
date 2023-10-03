<?php

namespace Ogrre\Laravel\PoleEmploi\Traits;

use Ogrre\Laravel\PoleEmploi\PoleEmploiClient;

trait HasClient
{
    public PoleEmploiClient $client;

    public function __construct(PoleEmploiClient $poleEmploiClient)
    {
        $this->client = $poleEmploiClient;
    }

    /**
     * @param string $code
     * @param string|null $fields
     * @return string
     */
    protected static function request(string $code, string $fields = null): string
    {
        return $fields ? $code . '?champs=' . $fields : $code;
    }
}
