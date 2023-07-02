<?php

namespace Ogrre\Laravel\PoleEmploi;

use Illuminate\Support\Collection;

class PoleEmploi
{
    public PoleEmploiClient $furiousClient;

    public function __construct(PoleEmploiClient $furiousClient)
    {
        $this->furiousClient = $furiousClient;
    }

    /**
     * @param null $variable
     * @param null $value
     * @param string $operator
     * @param string $oderBy
     * @return Collection
     */
    public function getCompanies($variable = null, $value = null, string $operator = 'eq', string $oderBy = 'id'): Collection
    {
        if($variable and $value){
            $filter = self::addFilter($variable, $value, $operator);
        } else {
            $filter = null;
        }

        return $this->furiousClient->getResources(
            'company',
            'Company',
            '{id,main_client_id,name,address,address2,zipcode,city,country,phone,url,category}}',
            $filter,
            $oderBy
        );
    }
}
