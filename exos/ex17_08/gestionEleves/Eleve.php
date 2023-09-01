<?php

namespace gestionEleves;

class Eleve
{
    private string $nom;
    private array $listeNotes;
    private ?float $moyenne;
    private int $note;
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of listeNotes
     *
     * @return array
     */
    public function getListeNotes(): array
    {
        return $this->listeNotes;
    }

    /**
     * Set the value of listeNotes
     *
     * @param array $listeNotes
     *
     * @return self
     */
    public function setListeNotes(array $listeNotes): self
    {
        $this->listeNotes = $listeNotes;

        return $this;
    }

    /**
     * Get the value of moyenne
     *
     * @return float
     */
    public function getMoyenne(): float
    {
        return $this->moyenne;
    }

    /**
     * Set the value of moyenne
     *
     * @param float $moyenne
     *
     * @return self
     */
    public function setMoyenne(float $moyenne): self
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    /**
     * Get the value of note
     *
     * @return int
     */
    public function getNote(): int
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @param int $note
     *
     * @return self
     */
    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }
    public function __toString()
    {
        return ($this->nom . " (" . number_format($this->moyenne, 2) . ")" . PHP_EOL);
    }
    public function ajouterNote(int $note, array &$listeNotes, ?int &$moyenne = 0): void
    {
        if ($note < 0) {
            $listeNotes[] = 0;
        } elseif ($note > 20) {
            $listeNotes[] = 20;
        } else {
            $listeNotes[] = $note;
        }
        if (!empty($listeNotes)) {
            foreach ($listeNotes as $notes) {
                $moyenne = $moyenne + $notes;
            }
            $this->moyenne = number_format($moyenne, 2) / count($listeNotes);
        } else {
            $this->moyenne = null;
        }
    }
}
