<?php

class Voiture
{
    private string $immat;
    private int $vitesse;
    private string $marque;
    private string $proprio;
    public function __construct($immat, $vitesse, $marque, $proprio)
    {
        $this->immat = $immat;
        $this->vitesse = $vitesse;
        $this->marque = $marque;
        $this->proprio = $proprio;
    }
    public function getImmat(): string
    {
        return $this->immat;
    }
    public function setImmat($immat): self
    {

        $this->immat = $immat;
        return $this;
    }

    /**
     * Get the value of vitesse
     *
     * @return int
     */
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @param int $vitesse
     *
     * @return self
     */
    public function setVitesse(int $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of marque
     *
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @param string $marque
     *
     * @return self
     */
    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of proprio
     *
     * @return string
     */
    public function getProprio(): string
    {
        return $this->proprio;
    }

    /**
     * Set the value of proprio
     *
     * @param string $proprio
     *
     * @return self
     */
    public function setProprio(string $proprio): self
    {
        $this->proprio = $proprio;

        return $this;
    }
}
