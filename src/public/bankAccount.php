<?php

declare(strict_types=1);

class BankAccount {
  public function __construct(
    private int $accountNumber,
    private string $firstName,
    private string $middleName,
    private string $lastName,
    private int $balance = 0
  )
  {

  }

  public function getAccountNumber(): int { return $this->accountNumber; }
  public function getName(): string 
  { 

    return $this->firstName . ' ' .$this->middleName . ' ' . $this->lastName; 
  }
  public function getBalance(): int { return $this->balance; }
}