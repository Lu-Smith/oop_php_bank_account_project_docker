<?php

declare(strict_types=1);

class BankAccount {
  public function __construct(
    private int $accountNumber,
    private string $firstName,
    private string $middleName,
    private string $lastName,
    private float $balance = 0,
    public float $amount = 0
  )
  {

  }

  public function getAccountNumber(): int { return $this->accountNumber; }
  public function getName(): string 
  { 

    return $this->firstName . ' ' .$this->middleName . ' ' . $this->lastName; 
  }
  public function getBalance(): float { return $this->balance; }

  public function withdraw(float $amount): float {
    if ($amount <= 0 || $amount > $this->balance) {
        throw new Exception("Invalid withdrawal amount");
    }
    $this->balance -= $amount;
    return $this->balance;
}

public function deposit(float $amount): float {
    if ($amount <= 0) {
        throw new Exception("Invalid deposit amount");
    }
    $this->balance += $amount;
    return $this->balance;
}
}