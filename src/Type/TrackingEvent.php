<?php

namespace Knightar\StampsSoapClient\Type;

class TrackingEvent
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Timestamp;

    /**
     * @var string
     */
    private string $Event;

    /**
     * @var 'ManifestAcknowledgement' | 'ElectronicNotification' | 'Delivered' | 'AttemptedNoticeLeft' | 'AcceptOrPickup' | 'Refused' | 'Undeliverable' | 'Forwarded' | 'ArrivalAtUnit' | 'Missent' | 'ReturnToSender' | 'Enroute' | 'DeadLetter' | 'ArrivalAtPickupPoint' | 'NoSuchNumber' | 'InsufficientAddress' | 'MovedNoForwarding' | 'ForwardingExpired' | 'AddresseeUnknown' | 'Vacant' | 'Unclaimed' | 'Deceased' | 'ReturnedOtherReason' | 'PickedUpByShippingPartner' | 'ArrivedAtShippingPartner' | 'DepartedFromShippingPartner' | 'USPS Event' | 'ArriveSortFacility_A1' | 'AcceptedAtDestination' | 'ArrivedUSPSSortFacility' | 'Processed_BE' | 'DepartUSPSSortFacility' | 'DeliveryStatusNotUpdated' | 'DispatchedFromSortFacility' | 'ShippingLabelCreated' | 'DepartSortFacility_L1' | 'PickedUpAndProcessedByAgent' | 'OriginAcceptance' | 'ProcessedAtDestinationFacility' | 'OutForDelivery' | 'Sorting_ProcessingComplete' | 'DispatchedToSortFacility' | 'ArriveSortFacility_R1' | 'Processed_RB' | 'DepartSortFacility_T1' | 'ShipmentAcceptance' | 'In_processAcceptance' | 'ArriveSortFacility_U1' | 'Mis_shipped' | 'AvailableForPickup' | 'PickedUpByAgent' | 'ReturnToSender_NotPickedUp' | 'DeadMail_DisposedByPostOffice' | 'DeadMail_SentToRecoveryCenter' | 'Processed_RegisteredMailOnly_35' | 'Processed_RegisteredMailOnly_36' | 'Processed_RegisteredMailOnly_38' | 'Processed_RegisteredMailOnly_39' | 'Processed_RegisteredMailOnly_40' | 'ReceivedAtOpeningUnit' | 'USPSHandoffToShippingPartner' | 'PickedUp' | 'CustomerRecall' | 'DispatchedToMilitary' | 'DuplicateLabelID' | 'BusinessClosed' | 'NoticeLeft' | 'ReceptacleBlocked' | 'ReceptacleFull' | 'NoSecureLocationAvailable' | 'NoAuthorizedRecipientAvailable' | 'TenderedToAgentForFinalDelivery' | 'TenderedToPostalService' | 'ArrivedAgentFacility' | 'DepartedAgentFacility' | 'DeliveredByAgentToMerchant' | 'FinalDispositionByMerchant' | 'MailConsigned' | 'ForeginReceipt' | 'CustomsClearance' | 'RecipientActionRequired' | 'Delay' | 'ReturnToSender_CO' | 'AttemptedNoticeLeft_H0' | 'ServiceDelay' | 'ErrorDataNotAvailable' | 'None'
     */
    private string $TrackingEventType;

    /**
     * @var string
     */
    private string $City;

    /**
     * @var string
     */
    private string $State;

    /**
     * @var string
     */
    private string $Zip;

    /**
     * @var string
     */
    private string $Country;

    /**
     * @var string
     */
    private string $SignedBy;

    /**
     * @var bool
     */
    private bool $AuthorizedAgent;

    /**
     * @return \DateTimeInterface
     */
    public function getTimestamp() : \DateTimeInterface
    {
        return $this->Timestamp;
    }

    /**
     * @param \DateTimeInterface $Timestamp
     * @return static
     */
    public function withTimestamp(\DateTimeInterface $Timestamp) : static
    {
        $new = clone $this;
        $new->Timestamp = $Timestamp;

        return $new;
    }

    /**
     * @return string
     */
    public function getEvent() : string
    {
        return $this->Event;
    }

    /**
     * @param string $Event
     * @return static
     */
    public function withEvent(string $Event) : static
    {
        $new = clone $this;
        $new->Event = $Event;

        return $new;
    }

    /**
     * @return 'ManifestAcknowledgement' | 'ElectronicNotification' | 'Delivered' | 'AttemptedNoticeLeft' | 'AcceptOrPickup' | 'Refused' | 'Undeliverable' | 'Forwarded' | 'ArrivalAtUnit' | 'Missent' | 'ReturnToSender' | 'Enroute' | 'DeadLetter' | 'ArrivalAtPickupPoint' | 'NoSuchNumber' | 'InsufficientAddress' | 'MovedNoForwarding' | 'ForwardingExpired' | 'AddresseeUnknown' | 'Vacant' | 'Unclaimed' | 'Deceased' | 'ReturnedOtherReason' | 'PickedUpByShippingPartner' | 'ArrivedAtShippingPartner' | 'DepartedFromShippingPartner' | 'USPS Event' | 'ArriveSortFacility_A1' | 'AcceptedAtDestination' | 'ArrivedUSPSSortFacility' | 'Processed_BE' | 'DepartUSPSSortFacility' | 'DeliveryStatusNotUpdated' | 'DispatchedFromSortFacility' | 'ShippingLabelCreated' | 'DepartSortFacility_L1' | 'PickedUpAndProcessedByAgent' | 'OriginAcceptance' | 'ProcessedAtDestinationFacility' | 'OutForDelivery' | 'Sorting_ProcessingComplete' | 'DispatchedToSortFacility' | 'ArriveSortFacility_R1' | 'Processed_RB' | 'DepartSortFacility_T1' | 'ShipmentAcceptance' | 'In_processAcceptance' | 'ArriveSortFacility_U1' | 'Mis_shipped' | 'AvailableForPickup' | 'PickedUpByAgent' | 'ReturnToSender_NotPickedUp' | 'DeadMail_DisposedByPostOffice' | 'DeadMail_SentToRecoveryCenter' | 'Processed_RegisteredMailOnly_35' | 'Processed_RegisteredMailOnly_36' | 'Processed_RegisteredMailOnly_38' | 'Processed_RegisteredMailOnly_39' | 'Processed_RegisteredMailOnly_40' | 'ReceivedAtOpeningUnit' | 'USPSHandoffToShippingPartner' | 'PickedUp' | 'CustomerRecall' | 'DispatchedToMilitary' | 'DuplicateLabelID' | 'BusinessClosed' | 'NoticeLeft' | 'ReceptacleBlocked' | 'ReceptacleFull' | 'NoSecureLocationAvailable' | 'NoAuthorizedRecipientAvailable' | 'TenderedToAgentForFinalDelivery' | 'TenderedToPostalService' | 'ArrivedAgentFacility' | 'DepartedAgentFacility' | 'DeliveredByAgentToMerchant' | 'FinalDispositionByMerchant' | 'MailConsigned' | 'ForeginReceipt' | 'CustomsClearance' | 'RecipientActionRequired' | 'Delay' | 'ReturnToSender_CO' | 'AttemptedNoticeLeft_H0' | 'ServiceDelay' | 'ErrorDataNotAvailable' | 'None'
     */
    public function getTrackingEventType() : string
    {
        return $this->TrackingEventType;
    }

    /**
     * @param 'ManifestAcknowledgement' | 'ElectronicNotification' | 'Delivered' | 'AttemptedNoticeLeft' | 'AcceptOrPickup' | 'Refused' | 'Undeliverable' | 'Forwarded' | 'ArrivalAtUnit' | 'Missent' | 'ReturnToSender' | 'Enroute' | 'DeadLetter' | 'ArrivalAtPickupPoint' | 'NoSuchNumber' | 'InsufficientAddress' | 'MovedNoForwarding' | 'ForwardingExpired' | 'AddresseeUnknown' | 'Vacant' | 'Unclaimed' | 'Deceased' | 'ReturnedOtherReason' | 'PickedUpByShippingPartner' | 'ArrivedAtShippingPartner' | 'DepartedFromShippingPartner' | 'USPS Event' | 'ArriveSortFacility_A1' | 'AcceptedAtDestination' | 'ArrivedUSPSSortFacility' | 'Processed_BE' | 'DepartUSPSSortFacility' | 'DeliveryStatusNotUpdated' | 'DispatchedFromSortFacility' | 'ShippingLabelCreated' | 'DepartSortFacility_L1' | 'PickedUpAndProcessedByAgent' | 'OriginAcceptance' | 'ProcessedAtDestinationFacility' | 'OutForDelivery' | 'Sorting_ProcessingComplete' | 'DispatchedToSortFacility' | 'ArriveSortFacility_R1' | 'Processed_RB' | 'DepartSortFacility_T1' | 'ShipmentAcceptance' | 'In_processAcceptance' | 'ArriveSortFacility_U1' | 'Mis_shipped' | 'AvailableForPickup' | 'PickedUpByAgent' | 'ReturnToSender_NotPickedUp' | 'DeadMail_DisposedByPostOffice' | 'DeadMail_SentToRecoveryCenter' | 'Processed_RegisteredMailOnly_35' | 'Processed_RegisteredMailOnly_36' | 'Processed_RegisteredMailOnly_38' | 'Processed_RegisteredMailOnly_39' | 'Processed_RegisteredMailOnly_40' | 'ReceivedAtOpeningUnit' | 'USPSHandoffToShippingPartner' | 'PickedUp' | 'CustomerRecall' | 'DispatchedToMilitary' | 'DuplicateLabelID' | 'BusinessClosed' | 'NoticeLeft' | 'ReceptacleBlocked' | 'ReceptacleFull' | 'NoSecureLocationAvailable' | 'NoAuthorizedRecipientAvailable' | 'TenderedToAgentForFinalDelivery' | 'TenderedToPostalService' | 'ArrivedAgentFacility' | 'DepartedAgentFacility' | 'DeliveredByAgentToMerchant' | 'FinalDispositionByMerchant' | 'MailConsigned' | 'ForeginReceipt' | 'CustomsClearance' | 'RecipientActionRequired' | 'Delay' | 'ReturnToSender_CO' | 'AttemptedNoticeLeft_H0' | 'ServiceDelay' | 'ErrorDataNotAvailable' | 'None' $TrackingEventType
     * @return static
     */
    public function withTrackingEventType(string $TrackingEventType) : static
    {
        $new = clone $this;
        $new->TrackingEventType = $TrackingEventType;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return static
     */
    public function withCity(string $City) : static
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return string
     */
    public function getState() : string
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return static
     */
    public function withState(string $State) : static
    {
        $new = clone $this;
        $new->State = $State;

        return $new;
    }

    /**
     * @return string
     */
    public function getZip() : string
    {
        return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return static
     */
    public function withZip(string $Zip) : static
    {
        $new = clone $this;
        $new->Zip = $Zip;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountry() : string
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return static
     */
    public function withCountry(string $Country) : static
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }

    /**
     * @return string
     */
    public function getSignedBy() : string
    {
        return $this->SignedBy;
    }

    /**
     * @param string $SignedBy
     * @return static
     */
    public function withSignedBy(string $SignedBy) : static
    {
        $new = clone $this;
        $new->SignedBy = $SignedBy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAuthorizedAgent() : bool
    {
        return $this->AuthorizedAgent;
    }

    /**
     * @param bool $AuthorizedAgent
     * @return static
     */
    public function withAuthorizedAgent(bool $AuthorizedAgent) : static
    {
        $new = clone $this;
        $new->AuthorizedAgent = $AuthorizedAgent;

        return $new;
    }
}

