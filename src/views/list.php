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
        <th>Balance </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($accounts as $account): ?>
      <tr>
        <td><?= htmlspecialchars($account->getAccountNumber()) ?></td>
        <td><?= htmlspecialchars($account->getName()) ?></td>
        <td><?= htmlspecialchars(number_format($account->getBalance(), 2)) ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>