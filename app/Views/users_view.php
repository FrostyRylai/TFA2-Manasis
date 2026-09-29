<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light mb-4 shadow-sm" style="background-color: #E18AAA;">
        <div class="container">
            <a class="navbar-brand" href="/">POS System</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/customers">Customers</a>
                <a class="nav-link active" href="/users">Users</a>
            </div>
        </div>
    </nav>
    <div class="container py-4">
        <h2 class="mb-3">User & Staff Accounts</h2>
        <table class="table table-striped table-bordered shadow-sm bg-white">
            <thead class="table-light">
                <tr>
                    <th style="background-color: #ffb5c0; color: white;">Username</th>
                    <th style="background-color: #ffb5c0; color: white;">Full Name</th>
                    <th style="background-color: #ffb5c0; color: white;">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><span class="badge bg-info text-dark"><?= esc($user['role']) ?></span></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>