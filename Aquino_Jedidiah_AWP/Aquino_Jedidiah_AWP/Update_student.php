<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Information</title>
</head>
<body>
    <h1>Update Student Information</h1>
    
    <form action="update_student.php" method="POST">
        <label for="idNumber">Student ID Number:</label>
        <input type="text" name="idNumber" required><br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" required><br><br>

        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" required><br><br>

        <label for="middleName">Middle Name:</label>
        <input type="text" name="middleName"><br><br>

        <label for="birthdate">Birthdate:</label>
        <input type="date" name="birthdate" required><br><br>

        <label for="address">Home Address:</label>
        <input type="text" name="address" required><br><br>

        <label for="sex">Sex:</label>
        <input type="text" name="sex" required><br><br>

        <label for="nationality">Nationality:</label>
        <input type="text" name="nationality" required><br><br>

        <label for="civilStatus">Civil Status:</label>
        <input type="text" name="civilStatus" required><br><br>

        <label for="religion">Religion:</label>
        <input type="text" name="religion" required><br><br>

        <label for="emailAddress">Email Address:</label>
        <input type="email" name="emailAddress" required><br><br>

        <label for="contactNumber">Contact Number:</label>
        <input type="tel" name="contactNumber" required><br><br>

        <input type="submit" name="Update_Student_Information">
    </form>
</body>
</html>