<?php

class Personal
{
    private $_fname;
    private $_lname;
    private $_age;
    private $_number;

    /**
     * Order constructor.
     */
    public function __construct()
    {
        $this->_fname = "";
        $this->_lname = "";
        $this->_age = "";
        $this->_number = "";
    }

    /**
     * @return string
     */
    public function getFName(): string
    {
        return $this->_fname;
    }

    /**
     * @param string $fname
     */
    public function setFName(string $fname): void
    {
        $this->_fname = $fname;
    }

    /**
     * @return string
     */
    public function getLName(): string
    {
        return $this->_fname;
    }

    /**
     * @param string $lname
     */
    public function setLName(string $lname): void
    {
        $this->_lname = $lname;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->_age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->_age = $age;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->_condiments;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->_number = $number;
    }
}