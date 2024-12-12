<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        #navigation-bar {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        #navigators {
            display: flex;
        }

        #navigators h3 {
            margin-left: 20px;
        }

        #user-auth {
            margin-right: 50px;
        }

        a:link {
            text-decoration: none;
            color: white;
        }

        a:visited {
            text-decoration: none;
            color: white;
        }

        a:hover {
            text-decoration: underline;
            color: white;
        }

        a:active {
            text-decoration: underline;
            color: white;
        }

        #container {
            display: flex;
        }

        .A,
        .B {
            background-color: rgb(194, 191, 191);
            padding: 40px;
            height: 600px;
            width: 50%;
            box-shadow: 10px 10px 10px gray;
            margin: 10px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
        }

        #cp {
            background-color: rgb(0, 54, 0);
            color: white;
        }

        #bar {
            background-color: rgb(0, 54, 0);
            color: white;
        }
    </style>
</head>

<body>
    <!-- <form action="backend.php" onsubmit="submitForm(event)"> -->
        <div id="bar">
            <hr>
            <div id="navigation-bar">
                <div id="navigators">
                    <h3>College</h3>
                    <a href="College%20website.html">
                        <h3>Home</h3>
                    </a>
                    <a href="About.html">
                        <h3>About</h3>
                    </a>
                    <a href="Classes.html">
                        <h3>Classes</h3>
                    </a>
                    <a href="Syllabus.html">
                        <h3>Syllabus</h3>
                    </a>
                </div>
                <div id="user-auth">
                    <a href="enquiry.html">
                        <h3>Contact us</h3>
                    </a>
                </div>
            </div>
            <hr>
        </div>

        <center>
            <h2>Enquiry</h2>
        </center>
        <?php
    $servername = "localhost";
    $username = "root";
    $dbname = "enquiry";
    $password = "";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
        echo "COnnection Failed";
    }
    else{
        echo "Connection Success";
    }

    if(isset($_POST["insert"]))
    {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $query1 = $_POST["query1"];

        $sql = "INSERT INTO registration (name,phone,email,query1) VALUES
        ('$name', '$phone' , '$email', '$query1')";

        if($conn->query($sql) == TRUE)
        {
            echo "Data INSERTED";
        }
        else{
            echo "Data Failed to insert ";
        }
    }

    ?>
        <div id="container">
            <div class="A">
                <h3>For College related queries write to admin@sophiacollege.edu.in</h3><br>
                <form action="" method="post">
                <label>Name :- </label>
                <input type="text" placeholder="Enter your name" name="name" required><br><br><br>
                <label>Phone :- </label><input type="number" placeholder="Enter your number" name="phone" required><br><br><br>
                <label>Email :- </label><input type="email" placeholder="Enter your email Id" name="email" required><br><br><br>
                <label>Query :- </label><textarea type="text" placeholder="Type your query here" rows="10" cols="30" name="query1" required></textarea><br><br><br>
                <!-- <input type="submit" value="insert"> -->
                 <button type="submit" value="insert" name="insert">Submit</button>
                <!-- <input type="reset" value="Reset"> -->
                </form>
            </div>

            <div class="B">
                <h3>Sophia College (Autonomous) For Women</h3>
                <h4>Address :</h4>
                <h5>Bhulabhai Desai Road, Mumbai 400026</h5>
                <h4>Phone :</h4>
                <h5>022-2351 2642 | 022-2352 3304 (Between 8 a.m. and 8 p.m.)</h5>
                <h4>Email :</h4>
                <h5>admin@sophiacollege.edu.in</h5>
                <h4>College Office Timings :</h4>
                <table>
                    <tr>
                        <th>Day</th>
                        <th>During term</th>
                        <th>During vacations</th>
                    </tr>
                    <tr>
                        <td>Monday-Friday</td>
                        <td>10:30 a.m. to 12:30 p.m.<br>2:00 p.m. to 3:00 p.m.</td>
                        <td>10:30 a.m. to 12:30 p.m.</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td>10:30 a.m. to 12:00 p.m.</td>
                        <td>10:30 a.m. to 12:00 p.m.</td>
                    </tr>
                </table>
            </div>
        </div>
    <!-- </form> -->

    <br>
    <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886.5683547791818!2d72.80660256288967!3d18.96956888614304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf9507075e4d%3A0x29a70be09134d7aa!2sSophia%20College%20(AUTONOMOUS)!5e0!3m2!1sen!2sin!4v1707126965034!5m2!1sen!2sin"
            width="1430" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </center>

    <br>
    <div id="cp">
        <hr>
        <center>
            <h3>|<span>&#169;</span> Copyright 2023 | College | All rights reserved |</h3>
        </center>
        <hr>
    </div>

    <!-- <script>
        function submitForm(event) {
            event.preventDefault(); // Prevent form from submitting for demo purposes
            alert("Your query has been successfully submitted!");
        }
    </script> -->
</body>

</html>
