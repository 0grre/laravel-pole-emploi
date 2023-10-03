<?php

namespace Ogrre\Laravel\PoleEmploi\Models;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Response;
use Ogrre\Laravel\PoleEmploi\Traits\HasClient;

class Metier extends Model
{
    use HasClient;

    /**
     * @param string|null $code
     */
    public function theme(string $code = null)
    {
        return (array) $this->client->base('GET', 'rome-metiers/v1/metiers/theme' . $code ?? '/' . self::request($code));
    }
}
