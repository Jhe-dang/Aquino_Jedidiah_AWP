<?php
include("DB_Config.php");
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Last Name</label><br>
        <input type="text" id="Last_Name" name="Last_Name">

        <label>First Name</label><br>
        <input type="text" id="First_Name" name="First_Name">

        <label>Middle Name</label><br>
        <input type="text" id="Middle_Name" name="Middle_Name">

        <label>Extension Name</label><br>
        <input type="text" id="Extension Name" name="extension_Name">

        <label>Sex</label><br>
        <select name="sex" id="sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> 

        <label>Birth_Date</label><br>
        <input type="date" id="birth_Date" name="birth_Date">

        <label>Age</label><br>
        <input type="number" id="age" name="age">

        <label>Home Address</label><br>
        <input type="text" id="home_Address" name="home_Address">

        <label>Civil Status</label><br>
        <select name="civil_Status" id="civil_Status">
            <option value="Single">Single</option>
            <option value="Maried">Maried</option>
            <option value="Widowed/Widower">Widowed/Widower</option>
        </select> 

        <label>Nationality</label><br>
        <input type="text" id="nationality" name="nationality">

        <label>Religion</label><br>
        <input type="text" id="religion" name="religion">

        <label>Boarding Address</label><br>
        <input type="text" id="boarding_Address" name="boarding_Address">

        <label>Contact Number</label><br>
        <input type="text" id="contact_Number" name="contact_Number">

        <label>Email Address</label><br>
        <input type="email" id="email_Address" name="email_Address">
<button type="submit"  name="add_Student">ADD STUDENT</button>
</form>
<?php
    if (array_key_exists('add_Student',$_POST))
    {
        $last_name= $_POST['Last_Name'];
        $first_name= $_POST['First_Name'];
        $middle_name= $_POST['Middle_Name'];
        $extension_name= $_POST['Extension_Name'];
        $sex= $_POST['Sex'];
        $birth_date= $_POST['Birth_Date'];
        $age= $_POST['Age'];
        $home_address= $_POST['Home_Address'];
        $civil_status= $_POST['Civil_Status'];
        $nationality= $_POST['Nationality'];
        $religion= $_POST['Religion'];
        $boarding_address= $_POST['Boarding_Address'];
        $contact_number= $_POST['Contact_Number'];
        $email_address= $_POST['Email_Address'];
        
        echo $last_name;
        echo $first_namme;
        echo $middle_name;
        echo $extension_name;
        echo $sex;
        echo $birth_date;
        echo $age;
        echo $home_address;
        echo $civil_status;
        echo $nationality;
        echo $religion;
        echo $boarding_address;
        echo $contact_number;
        echo $email_address;
        
        $insertUserAccountQuery = "INSERT INTO person (Last_Name, First_Name, Middle_Name, Extension_Name, Sex, Birth_Date, Age, Home_Address, Civil_Status,Nationality, Religion, Boarding_Address, Contact_Number, Email_Address)
        VALUES `'$last_name', ' $first_name', '$middle_name', '$extension_name', '$sex', '$birth_date', '$age=', '$home_address', '$civil_status', '$nationality',  ' $religion',
    '$boarding_address', '$contact_number', '$email_address'`;";"
        $db_connect->query($insertUserAccountQuery);
    }
    ?>
</body>
</html>