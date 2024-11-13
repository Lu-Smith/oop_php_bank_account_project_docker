<?php

declare(strict_types= 1);

function loadAccountsFromCSV(string $file): array
{
  $accounts = [];

  if (($handle = fopen($file, 'r')) !== false) {
    //skip the head row
    fgetcsv( $handle );

    while (($data = fgetcsv($handle)) !== false) {
      [$accountNumber, $firstName, $middleName, $lastName, $balance] = $data;

      $accounts[] = new BankAccount(
        (int) $accountNumber,
        (string) $firstName,
        (string) $middleName,
        (string) $lastName,
        (int) $balance
      );
    }

    fclose( $handle );
  }

  return $accounts;
}