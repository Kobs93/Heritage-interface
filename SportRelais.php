<?php

class SportRelais extends Sport
{
    private $distance;

    /**
     * @param $distance
     */
    public function __construct(string $nomsport, int $nbjoueurs, int $distance)
    {
        parent::__construct($nomsport, $nbjoueurs);
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance(): int
    {
        return $this->distance;
    }
    public function getDescription(): string
    {
        return '<br></br>Description: <br>"Nom du sport<br>'. $this->getNomsport(). '<br>Nb de joueurs:<br>'. $this->nbjoueurs. 'personne <br></br>Distance:' . $this->distance.'m "<br>';
    }


}