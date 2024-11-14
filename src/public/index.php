<?php

declare(strict_types=1);

require_once '../helpers/loadAccounts.php';
require_once './bankAccount.php';

$csvPath = __DIR__ . '/../accounts.csv';
$accounts = loadAccountsFromCSV($csvPath);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $accountIndex = (int) $_POST['account_index'];
  $action = $_POST['action'];
  $amount = (float) $_POST['amount'];

  try {
    if ($action === 'deposit') {
      $accounts[$accountIndex]->deposit($amount);
    } elseif ($action === 'withdraw') {
      $accounts[$accountIndex]->withdraw($amount);
    }
    saveAccountsToCSV($accounts, $csvPath); 
  } catch (Exception $e) {
    echo "<p>Error: {$e->getMessage()}</p>";
  }
}

require_once '../views/list.php';



