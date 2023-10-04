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
     * @param string $endpoint
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    private function get(string $endpoint, string $code = null, string $fields = null)
    {
        return (array) $this->client->base('GET', 'rome-metiers/v1/metiers/' . $endpoint . '/' . self::parameters($code, $fields));
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function theme(string $code = null, string $fields = null)
    {
        return self::get('theme', $code, $fields);
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function metier(string $code = null, string $fields = null)
    {
        return self::get('metier', $code, $fields);
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function grandDomaine(string $code = null, string $fields = null)
    {
        return self::get('grand-domaine', $code, $fields);
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function domaineProfessionel(string $code = null, string $fields = null)
    {
        return self::get('domaine-professionnel', $code, $fields);
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function appellation(string $code = null, string $fields = null)
    {
        return self::get('appellation', $code, $fields);
    }
}
