<?php


class Member
{
    private $_fname;
    private $_lname;
    private $_age;
    private $_gender;
    private $_number;
    private $_email;
    private $_state;
    private $_seeking;
    private $_bio;

    /**
     * Order constructor.
     */
    public function __construct($fname="", $lname="", $age="", $gender="", $number="", $email="", $state="", $seeking="",
                               $bio="")
    {
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_age = $age;
        $this->_gender = $gender;
        $this->_number = $number;
        $this->_email = $email;
        $this->_state = $state;
        $this->_seeking = $seeking;
        $this->_bio = $bio;
    }

    /**
     * @return string
     */
    public function getFname(): string
    {
        return $this->_fname;
    }

    /**
     * @param string $fname
     */
    public function setFname(string $fname)
    {
        $this->_fname = $fname;
    }

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->_lname;
    }

    /**
     * @param string $lname
     */
    public function setLname(string $lname): void
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
     * @return string
     */
    public function getGender(): string
    {
        return $this->_gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->_gender = $gender;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->_number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->_number = $number;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->_email = $email;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->_state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->_state = $state;
    }

    /**
     * @return string
     */
    public function getSeeking(): string
    {
        return $this->_seeking;
    }

    /**
     * @param string $seeking
     */
    public function setSeeking(string $seeking): void
    {
        $this->_seeking = $seeking;
    }

    /**
     * @return string
     */
    public function getBio(): string
    {
        return $this->_bio;
    }

    /**
     * @param string $bio
     */
    public function setBio(string $bio): void
    {
        $this->_bio = $bio;
    }





}