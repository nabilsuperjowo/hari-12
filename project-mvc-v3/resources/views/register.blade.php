<!-- resources/views/register.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Menghubungkan ke file CSS jika ada -->
</head>
<body>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>

    <form action="{{ route('handleRegister') }}" method="POST">
        @csrf <!-- Tambahkan ini untuk melindungi dari CSRF -->

        <label for="fname">First name: </label><br><br>
        <input type="text" name="first_name" required><br><br>

        <label for="lname">Last name: </label><br><br>
        <input type="text" name="last_name" required><br><br>

        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>

        <label for="negara">Nationality:</label><br><br>
        <select name="negara" id="negara" required>
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Japanese">Japanese</option>
        </select>

        <p>Language Spoken:</p>
        <input type="checkbox" id="bahasa1" name="bahasa[]" value="Bahasa Indonesia">
        <label for="bahasa1">Bahasa Indonesia</label><br>
        <input type="checkbox" id="bahasa2" name="bahasa[]" value="English">
        <label for="bahasa2">English</label><br>
        <input type="checkbox" id="bahasa3" name="bahasa[]" value="Other">
        <label for="bahasa3">Other</label><br>

        <p>Bio:</p>
        <textarea name="bio" id="pesan" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Sign up</button>
    </form>
</body>
</html>
