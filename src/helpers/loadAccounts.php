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
        (float) $balance,
      );
    }

    fclose( $handle );
  }

  return $accounts;
}

function saveAccountsToCSV(array $accounts, string $filePath): void {
  $file = fopen($filePath, 'w');

  fputcsv($file, ['AccountNumber', 'FirstName', 'MiddleName', 'LastName', 'Balance']);
  
  foreach ($accounts as $account) {
      fputcsv($file, [
          $account->getAccountNumber(),
          $account->firstName,
          $account->middleName,
          $account->lastName,
          $account->getBalance()
      ]);
  }
  fclose($file);
}
