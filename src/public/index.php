<?php

declare(strict_types=1);

require_once '../helpers/loadAccounts.php';
require_once './bankAccount.php';

$accounts = loadAccountsFromCSV(__DIR__ . '/../accounts.csv');

require_once '../views/list.php';

$action = $_POST['action'] ?? '';
$amount = $_POST['deposit_amount'] ?? $_POST['withdraw_amount'] ?? 0.0;

