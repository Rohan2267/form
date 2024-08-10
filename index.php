<?php 
include 'connection.php';
?>
<html>

<head>
    <title> Form</title>
    <link rel="stylesheet" href="FORM CSS.css">
</head>

<body>
    <div class="form-container">
        <form action="connection.php" method="POST" >
            <h1 style="text-align: center; font-size: 50; font-style: normal;">FORM</h1>
            <label for="name">Name:</label>
            <br></br>
            <input type="text" id="name" name="name" required>

            <br></br>

            <label for="email">Email:</label>
            <br></br>
            <input type="email" id="email" name="email" required>

            <br></br>

            <label for="phone">Phone Number:</label>
            <br></br>
            <input type="tel" id="phone" name="phone" required>

            <br></br>

            <label for="dropdown">Select City:</label>
            <select id="dropdown" name="dropdown">
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Udaipur">Udaipur</option>
                <option value="Jodhpur">Jodhpur</option>
            </select>
            <br></br>
            <label>Gender:</label>
            <br></br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <br></br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>

            <br></br>

            <label for="checkbox">Hobbies:</label>
            <br></br>
            <input type="checkbox" id="hobby1" name="hobby" value="Cricket">
            <label for="hobby1">Cricket</label>
            <br></br>
            <input type="checkbox" id="hobby2" name="hobby" value="Football">
            <label for="hobby2">Football</label>

            <br></br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>