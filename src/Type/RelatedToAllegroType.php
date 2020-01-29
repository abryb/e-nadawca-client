<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing RelatedToAllegroType
 *
 * Opcjonalne informacje o powiązaniu przesyłki ze
 *  sprzedażą w serwisie Allegro
 * XSD Type: relatedToAllegroType
 */
class RelatedToAllegroType
{
    /**
     * Id transakcji (MS), deal (WebAPI) lub order
     *  (RestAPI)
     *
     * @var string $id
     */
    protected $id;

    /**
     * Identyfikator sprzedającego w serwisie Allegro.
     *
     * @var string $sellerId
     */
    protected $sellerId;

    /**
     * Źródło identyfikatora: MS - Menedżer
     *  Sprzedaży Allegro, WEB_API - WebAPI Allegro,
     *  REST_API - RestAPI Allegro.
     *
     * @var string $channel
     */
    protected $channel;

    /**
     * Identyfikator rodzaju dostawy, gdzie dla
     *  źródła: MS - nazwa rodzaju dostawy, WEB_API
     *  - id postaci liczby, REST_API - id postaci
     *  guid
     *
     * @var string $deliveryMethod
     */
    protected $deliveryMethod;

    /**
     * Gets as id
     *
     * Id transakcji (MS), deal (WebAPI) lub order
     *  (RestAPI)
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * Id transakcji (MS), deal (WebAPI) lub order
     *  (RestAPI)
     *
     * @param string $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as sellerId
     *
     * Identyfikator sprzedającego w serwisie Allegro.
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * Sets a new sellerId
     *
     * Identyfikator sprzedającego w serwisie Allegro.
     *
     * @param string $sellerId
     *
     * @return self
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;

        return $this;
    }

    /**
     * Gets as channel
     *
     * Źródło identyfikatora: MS - Menedżer
     *  Sprzedaży Allegro, WEB_API - WebAPI Allegro,
     *  REST_API - RestAPI Allegro.
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * Źródło identyfikatora: MS - Menedżer
     *  Sprzedaży Allegro, WEB_API - WebAPI Allegro,
     *  REST_API - RestAPI Allegro.
     *
     * @param string $channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Gets as deliveryMethod
     *
     * Identyfikator rodzaju dostawy, gdzie dla
     *  źródła: MS - nazwa rodzaju dostawy, WEB_API
     *  - id postaci liczby, REST_API - id postaci
     *  guid
     *
     * @return string
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * Sets a new deliveryMethod
     *
     * Identyfikator rodzaju dostawy, gdzie dla
     *  źródła: MS - nazwa rodzaju dostawy, WEB_API
     *  - id postaci liczby, REST_API - id postaci
     *  guid
     *
     * @param string $deliveryMethod
     *
     * @return self
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;

        return $this;
    }
}
