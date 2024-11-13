<?php

declare(strict_types= 1);

function loadAccountsFromCSV(string $file): array
{
  $accounts = [];

  if ($handle = fopen($file, 'r') !== false) {
    //skip the head row
    fgetcsv( $handle );

    fclose( $handle );
  }

  return $accounts;
}