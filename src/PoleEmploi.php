<?php

namespace Ogrre\Laravel\PoleEmploi;

use Ogrre\Laravel\PoleEmploi\Models\Metier;
use Ogrre\Laravel\PoleEmploi\Traits\HasClient;

class PoleEmploi
{
    use HasClient;

    /**
     * @param array $body
     * @param bool $feedback
     * @return array
     */
    public function appellationMetier(array $body, bool $feedback = false): array
    {
        $endpoint = $feedback ? 'appellationmetier_feedback' : 'appelationmetier';

        return (array) $this->client->base('POST', 'appellationmetier/v1/' . $endpoint, $body);
    }

    /**
     * @param string $libelle
     * @param string $number
     * @param string $type
     * @return array
     */
    public function explorateurMetiers(string $libelle, string $number, string $type): array
    {
        return self::request('explorateurmetiers/v1/explorateurmetiers?libelle=' . $libelle . '&nombre=' . $number . '&type=' . $type);
    }

    /**
     */
    public function competences(): array
    {
        return new Competence($this->client);
    }

    /**
     * @param string $code
     * @param string|null $fields
     * @return array
     */
    public function contextesDeTravail(string $code, string $fields = null): array
    {
        return self::request('rome-contextes-travail/v1/situations-travail/contexte-travail/', $code, $fields);
    }

    /**
     * @param string $code
     * @param string|null $fields
     * @return array
     */
    public function ficheMetiers(string $code, string $fields = null): array
    {
        return self::request('rome-fiches-metiers/v1/fiches-rome/fiche-metier/', $code, $fields);
    }

    /**
     * @return Metier
     */
    public function metiers()
    {
        return new Metier($this->client);
    }

}
