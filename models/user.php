<?php
class User
{

    function __construct(string $firstname, string $name, string $mail, int $facture, string $comment, int $note, string $date, string $time)

    {
        $this->firstname = $firstname;
        $this->name = $name;
        $this->mail = $mail;
        $this->facture = $facture;
        $this->comment = $comment;
        $this->note = $note;
        $this->date = $date;
        $this->time = $time;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getFacture()
    {
        return $this->facture;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getNote()
    {
        return $this->note;
    }
}

