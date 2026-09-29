<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light mb-4 shadow-sm" style="background-color: #E18AAA;">
        <div class="container">
            <a class="navbar-brand" href="/">POS System</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link active" href="/customers">Customers</a>
                <a class="nav-link" href="/users">Users</a>
            </div>
        </div>
    </nav>
    <div class="container py-4">
        <h2 class="mb-3">Customer Accounts</h2>
        <table class="table table-striped table-bordered shadow-sm bg-white">
            <thead class="table-light">
                <tr>
                <th style="background-color: #ffb5c0; color: white;">Full Name</th>
                <th style="background-color: #ffb5c0; color: white;">Email</th>
                <th style="background-color: #ffb5c0; color: white;">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>