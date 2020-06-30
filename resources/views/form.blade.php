<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar HTML</title>
</head>

<body>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
    <form action="{{ url('/welcome') }}" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <p>First name:</p>
        <input type="text" name="firstname">
        <p>Last name:</p>
        <input type="text" name="lastname">
        <p>Gender:</p>
        <input type="radio" name="gender" value="male"> Male <br>
        <input type="radio" name="gender" value="female"> Female <br>
        <input type="radio" name="gender" value="other"> Other <br>
        <p>Nationality:</p>
        <select name="nationality">
            <option value="indonesia">Indonesian</option>
            <option value="singapura">Singaporean</option>
            <option value="malaysia">Malaysian</option>
            <option value="autralia">Australian</option>
        </select>
        <p>Languange Spoken:</p>
        <input type="checkbox" name="languange1" value="indonesia">
        <label for="languange1">Bahasa Indonesia</label><br>
        <input type="checkbox" name="languange2" value="inggris">
        <label for="languange2">English</label><br>
        <input type="checkbox" name="languange3" value="other">
        <label for="languange3">Other</label><br>
        <p>Bio:</p>
        <textarea name="bio" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>