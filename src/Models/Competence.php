<?php

namespace Ogrre\Laravel\PoleEmploi\Models;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Response;
use Ogrre\Laravel\PoleEmploi\Traits\HasClient;

class Competence extends Model
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
        return (array) $this->client->base('GET', 'rome-competences/v1/competences/' . $endpoint . '/' . self::parameters($code, $fields));
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function savoir(string $code = null, string $fields = null)
    {
        return self::get('savoir', $code, $fields);
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function objectif(string $code = null, string $fields = null)
    {
        return self::get('objectif', $code, $fields);
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function macroSavoirFaire(string $code = null, string $fields = null)
    {
        return self::get('macro-savoir-faire', $code, $fields);
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function macroSavoirEtreProfessionnel(string $code = null, string $fields = null)
    {
        return self::get('macro-savoir-etre-professionnel', $code, $fields);
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function enjeu(string $code = null, string $fields = null)
    {
        return self::get('enjeu', $code, $fields);
    }

    /**
     * @param string|null $code
     */
    public function domaineCompetence(string $code = null, string $fields = null)
    {
        return self::get('domaine-competence', $code, $fields);
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function competenceDetaillee(string $code = null, string $fields = null)
    {
        return self::get('competence-detaillee', $code, $fields);
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function categorieSavoirs(string $code = null, string $fields = null)
    {
        return self::get('categorie-savoirs', $code, $fields);
    }

    /**
     * @param string|null $code
     * @param string|null $fields
     * @return array
     */
    public function macroCompetence(string $code = null, string $fields = null)
    {
        return self::get('macro-competence', $code, $fields);
    }

    /**
     * @param string|null $code
     */
    public function competence(string $code = null, string $fields = null)
    {
        return self::get('competence', $code, $fields);
    }
}
