<?php

declare(strict_types=1);

class BankAccount {
  public function __construct(
    private int $accountNumber,
    private string $firstName,
    private string $middleName,
    private string $lastName,
    private int $balance
  )
  {

  }
}