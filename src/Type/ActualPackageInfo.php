<?php

namespace Knightar\StampsSoapClient\Type;

class ActualPackageInfo
{
    /**
     * @var 'Unknown' | 'Postcard' | 'Letter' | 'Large Envelope or Flat' | 'Thick Envelope' | 'Package' | 'Flat Rate Box' | 'Small Flat Rate Box' | 'Large Flat Rate Box' | 'Flat Rate Envelope' | 'Flat Rate Padded Envelope' | 'Large Package' | 'Oversized Package' | 'Regional Rate Box A' | 'Regional Rate Box B' | 'Legal Flat Rate Envelope' | 'Regional Rate Box C' | 'OpenAndDistribute Half Tray Box' | 'OpenAndDistribute Full Tray Box' | 'OpenAndDistribute EMM Tray Box' | 'OpenAndDistribute Flat Tub Tray Box' | 'Express Envelope' | 'Documents' | 'Envelope' | 'Pak' | '10 KG Box' | '25 KG Box' | 'Express Box Large' | 'Express Box Medium' | 'Express Box Small' | 'Tube' | 'One Rate Envelope' | 'One Rate Small Box' | 'One Rate Medium Box' | 'One Rate Large Box' | 'One Rate Extra Large Box' | 'One Rate Pak' | 'One Rate Tube' | 'Box'
     */
    private string $ActualPackageType;

    /**
     * @var null | float
     */
    private ?float $ActualWeight = null;

    /**
     * @var null | float
     */
    private ?float $ActualLength = null;

    /**
     * @var null | float
     */
    private ?float $ActualWidth = null;

    /**
     * @var null | float
     */
    private ?float $ActualHeight = null;

    /**
     * @return 'Unknown' | 'Postcard' | 'Letter' | 'Large Envelope or Flat' | 'Thick Envelope' | 'Package' | 'Flat Rate Box' | 'Small Flat Rate Box' | 'Large Flat Rate Box' | 'Flat Rate Envelope' | 'Flat Rate Padded Envelope' | 'Large Package' | 'Oversized Package' | 'Regional Rate Box A' | 'Regional Rate Box B' | 'Legal Flat Rate Envelope' | 'Regional Rate Box C' | 'OpenAndDistribute Half Tray Box' | 'OpenAndDistribute Full Tray Box' | 'OpenAndDistribute EMM Tray Box' | 'OpenAndDistribute Flat Tub Tray Box' | 'Express Envelope' | 'Documents' | 'Envelope' | 'Pak' | '10 KG Box' | '25 KG Box' | 'Express Box Large' | 'Express Box Medium' | 'Express Box Small' | 'Tube' | 'One Rate Envelope' | 'One Rate Small Box' | 'One Rate Medium Box' | 'One Rate Large Box' | 'One Rate Extra Large Box' | 'One Rate Pak' | 'One Rate Tube' | 'Box'
     */
    public function getActualPackageType() : string
    {
        return $this->ActualPackageType;
    }

    /**
     * @param 'Unknown' | 'Postcard' | 'Letter' | 'Large Envelope or Flat' | 'Thick Envelope' | 'Package' | 'Flat Rate Box' | 'Small Flat Rate Box' | 'Large Flat Rate Box' | 'Flat Rate Envelope' | 'Flat Rate Padded Envelope' | 'Large Package' | 'Oversized Package' | 'Regional Rate Box A' | 'Regional Rate Box B' | 'Legal Flat Rate Envelope' | 'Regional Rate Box C' | 'OpenAndDistribute Half Tray Box' | 'OpenAndDistribute Full Tray Box' | 'OpenAndDistribute EMM Tray Box' | 'OpenAndDistribute Flat Tub Tray Box' | 'Express Envelope' | 'Documents' | 'Envelope' | 'Pak' | '10 KG Box' | '25 KG Box' | 'Express Box Large' | 'Express Box Medium' | 'Express Box Small' | 'Tube' | 'One Rate Envelope' | 'One Rate Small Box' | 'One Rate Medium Box' | 'One Rate Large Box' | 'One Rate Extra Large Box' | 'One Rate Pak' | 'One Rate Tube' | 'Box' $ActualPackageType
     * @return static
     */
    public function withActualPackageType(string $ActualPackageType) : static
    {
        $new = clone $this;
        $new->ActualPackageType = $ActualPackageType;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getActualWeight() : ?float
    {
        return $this->ActualWeight;
    }

    /**
     * @param null | float $ActualWeight
     * @return static
     */
    public function withActualWeight(?float $ActualWeight) : static
    {
        $new = clone $this;
        $new->ActualWeight = $ActualWeight;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getActualLength() : ?float
    {
        return $this->ActualLength;
    }

    /**
     * @param null | float $ActualLength
     * @return static
     */
    public function withActualLength(?float $ActualLength) : static
    {
        $new = clone $this;
        $new->ActualLength = $ActualLength;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getActualWidth() : ?float
    {
        return $this->ActualWidth;
    }

    /**
     * @param null | float $ActualWidth
     * @return static
     */
    public function withActualWidth(?float $ActualWidth) : static
    {
        $new = clone $this;
        $new->ActualWidth = $ActualWidth;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getActualHeight() : ?float
    {
        return $this->ActualHeight;
    }

    /**
     * @param null | float $ActualHeight
     * @return static
     */
    public function withActualHeight(?float $ActualHeight) : static
    {
        $new = clone $this;
        $new->ActualHeight = $ActualHeight;

        return $new;
    }
}

