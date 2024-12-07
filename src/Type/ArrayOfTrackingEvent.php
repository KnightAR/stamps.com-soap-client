<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfTrackingEvent
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\TrackingEvent>
     */
    private ?array $TrackingEvent = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\TrackingEvent>
     */
    public function getTrackingEvent() : ?array
    {
        return $this->TrackingEvent;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\TrackingEvent> $TrackingEvent
     * @return static
     */
    public function withTrackingEvent(?array $TrackingEvent) : static
    {
        $new = clone $this;
        $new->TrackingEvent = $TrackingEvent;

        return $new;
    }
}

