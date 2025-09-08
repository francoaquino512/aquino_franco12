<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url();?>public/css/style.css">
    <title>Create</title>
</head>
<body>
    <h1>💻🔍Welcome to Create View🔍💻</h1>
    <form action="<?=site_url('user/create')?>" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" required><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" required><br>
        <label for="role">Role</label><br>
        <input type="text" name="role" id="role" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>