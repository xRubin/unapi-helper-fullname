<?php
namespace unapi\helper\fullname;

class FullName
{
    /** @var string */
    private $name;

    /** @var string */
    private $surname;

    /** @var string */
    private $patronymic;

    /**
     * FullName constructor.
     * @param string $name
     * @param string $surname
     * @param string $patronymic
     */
    public function __construct(string $name, string $surname, string $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getPatronymic(): string
    {
        return $this->patronymic;
    }

    /**
     * @param string $patronymic
     */
    public function setPatronymic(string $patronymic): void
    {
        $this->patronymic = $patronymic;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->asString();
    }

    /**
     * @return string
     */
    public function asString(): string
    {
        return sprintf('%s %s %s', $this->surname, $this->name, $this->patronymic);
    }

    /**
     * @return string
     */
    public function asShortString(): string
    {
        return sprintf('%s %s.%s.', $this->surname, mb_substr($this->name, 0, 1), mb_substr($this->patronymic, 0, 1));
    }
}