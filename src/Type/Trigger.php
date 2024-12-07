<?php

namespace Knightar\StampsSoapClient\Type;

class Trigger
{
    /**
     * @var 'ShipmentCreated' | 'DeliveryDateAnnounced' | 'OutForDelivery' | 'Delivered'
     */
    private string $NotificationType;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfChannel
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfChannel $Channels = null;

    /**
     * @return 'ShipmentCreated' | 'DeliveryDateAnnounced' | 'OutForDelivery' | 'Delivered'
     */
    public function getNotificationType() : string
    {
        return $this->NotificationType;
    }

    /**
     * @param 'ShipmentCreated' | 'DeliveryDateAnnounced' | 'OutForDelivery' | 'Delivered' $NotificationType
     * @return static
     */
    public function withNotificationType(string $NotificationType) : static
    {
        $new = clone $this;
        $new->NotificationType = $NotificationType;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfChannel
     */
    public function getChannels() : ?\Knightar\StampsSoapClient\Type\ArrayOfChannel
    {
        return $this->Channels;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfChannel $Channels
     * @return static
     */
    public function withChannels(?\Knightar\StampsSoapClient\Type\ArrayOfChannel $Channels) : static
    {
        $new = clone $this;
        $new->Channels = $Channels;

        return $new;
    }
}

