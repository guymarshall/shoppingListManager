<?php

class Item
{

    public function __construct(private int $itemID, private string $name, private string $description, private int $price, private DateTime $createdDateTime, private DateTime $editedDateTime, private int $quantity = 1)
    {
    }

    /**
     * @return int
     */
    public function getItemID(): int
    {
        return $this->itemID;
    }

    /**
     * @param int $itemID
     */
    public function setItemID(int $itemID): void
    {
        $this->itemID = $itemID;
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return DateTime
     */
    public function getCreatedDateTime(): DateTime
    {
        return $this->createdDateTime;
    }

    /**
     * @param DateTime $createdDateTime
     */
    public function setCreatedDateTime(DateTime $createdDateTime): void
    {
        $this->createdDateTime = $createdDateTime;
    }

    /**
     * @return DateTime
     */
    public function getEditedDateTime(): DateTime
    {
        return $this->editedDateTime;
    }

    /**
     * @param DateTime $editedDateTime
     */
    public function setEditedDateTime(DateTime $editedDateTime): void
    {
        $this->editedDateTime = $editedDateTime;
    }
}