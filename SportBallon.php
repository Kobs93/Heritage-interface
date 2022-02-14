<?php

class SportBallon extends sport
{
    private $largeur;
    private $longueur;

    /**
     * @param $largeur
     * @param $longueur
     */
    public function __construct(string $nomSport, int $nbjoueurs, int $largeur,int $longueur)
    {
        parent::__construct($nomSport,$nbjoueurs);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }
    public function getDescription(): string
    {
        return 'Description: <br>"Nom du sport'. $this->getNomsport(). 'Nb de joueurs:'. $this->nbjoueurs. 'longueur ' . $this->longueur. "m".'largeur:' .$this->largeur."m".' <br>';

    }
}