<?php

class club implements comparable
{
    private $idClub;
    private $nomClub;
    private $nbPoints;
    private $lesSports = array();

    /**
     * @param $idClub
     * @param $nomClub
     * @param $nbPoints
     */
    public function __construct(int $idClub,string $nomClub,int $nbPoints)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
    }

    /**
     * @return mixed
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * @return mixed
     */
    public function getNomClub()
    {
        return $this->nomClub;
    }

    /**
     * @return mixed
     */
    public function getNbPoints()
    {
        return $this->nbPoints;
    }

    /**
     * @return array
     */
    public function getLesSports(): array
    {
        return $this->lesSports;
    }
    public function AjouterSport(Sport $sport)
    {
        $this->lesSports[]=$sport;
    }


    public function compareTO(Club $club)
    {
        // TODO: Implement compareTO() method.
    }
}