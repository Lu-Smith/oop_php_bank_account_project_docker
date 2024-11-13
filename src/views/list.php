<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank Account</title>
</head>
<body>
  <h1>List</h1>
  <table>
    <thead>
      <tr>
        <th>Account Number</th>
        <th>Name</th>
        <th>Balance (£)</th>
        <th>Change</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($accounts as $account): ?>
      <tr>
        <td><?= htmlspecialchars($account->getAccountNumber()) ?></td>
        <td><?= htmlspecialchars($account->getName()) ?></td>
        <td><?= htmlspecialchars(number_format($account->getBalance(), 2)) ?></td>
        <td>
          <form action="process_transaction.php" method="POST">
            <input type="number" name="deposit_amount" placeholder="deposit">
            <button type="submit" name="action" value="deposit">Submit Deposit</button>
            <input type="number" name="withdraw_amount" placeholder="withdraw">
            <button type="submit" name="action" value="withdraw">Submit Withdraw</button>
          </form>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>