<?php


class PremiumMember extends Member
{
    private $_inDoorInterests;
    private $_outDoorInterests;

    /**
     * Order constructor.
     */
    public function __construct($inDoorInterests="", $outDoorInterests="")
    {
        $this->_inDoorInterests = $inDoorInterests;
        $this->_outDoorInterests = $outDoorInterests;
    }

    /**
     * @return array
     */
    public function getIndoorInterests(): array
    {
        return $this->_inDoorInterests;
    }

    /**
     * @param array $inDoorInterests
     */
    public function setIndoorInterests(array $inDoorInterests): void
    {
        $this->_inDoorInterests = $inDoorInterests;
    }

    /**
     * @return array
     */
    public function getOutdoorInterests(): array
    {
        return $this->_outDoorInterests;
    }

    /**
     * @param array $outDoorInterests
     */
    public function setOutdoorInterests(array $outDoorInterests): void
    {
        $this->_outDoorInterests = $outDoorInterests;
    }

}