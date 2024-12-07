<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfIncludeField
{
    /**
     * @var array<int<0,max>, 'StampsTxId' | 'ShipmentStatus' | 'PrintDate' | 'MailDate' | 'DeliveredDate' | 'TrackingNumber' | 'ScanFormId' | 'Service' | 'AddOns' | 'FromZIPCode' | 'ReturnTo' | 'ShipTo' | 'PackageInfo' | 'References' | 'RefundType' | 'RefundStatus' | 'ExpiryDate' | 'Reserved' | 'AdjustmentDetails' | 'ClaimDetails' | 'ReturnTrackingNumber' | 'Surcharges' | 'LabelCategory'>
     */
    private array $IncludeField;

    /**
     * @return array<int<0,max>, 'StampsTxId' | 'ShipmentStatus' | 'PrintDate' | 'MailDate' | 'DeliveredDate' | 'TrackingNumber' | 'ScanFormId' | 'Service' | 'AddOns' | 'FromZIPCode' | 'ReturnTo' | 'ShipTo' | 'PackageInfo' | 'References' | 'RefundType' | 'RefundStatus' | 'ExpiryDate' | 'Reserved' | 'AdjustmentDetails' | 'ClaimDetails' | 'ReturnTrackingNumber' | 'Surcharges' | 'LabelCategory'>
     */
    public function getIncludeField() : array
    {
        return $this->IncludeField;
    }

    /**
     * @param array<int<0,max>, 'StampsTxId' | 'ShipmentStatus' | 'PrintDate' | 'MailDate' | 'DeliveredDate' | 'TrackingNumber' | 'ScanFormId' | 'Service' | 'AddOns' | 'FromZIPCode' | 'ReturnTo' | 'ShipTo' | 'PackageInfo' | 'References' | 'RefundType' | 'RefundStatus' | 'ExpiryDate' | 'Reserved' | 'AdjustmentDetails' | 'ClaimDetails' | 'ReturnTrackingNumber' | 'Surcharges' | 'LabelCategory'> $IncludeField
     * @return static
     */
    public function withIncludeField(array $IncludeField) : static
    {
        $new = clone $this;
        $new->IncludeField = $IncludeField;

        return $new;
    }
}

