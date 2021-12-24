<!DOCTYPE html>
<html lang="en">
<head>
    <title>CV</title>
    <style>
        table{
            border: solid;
            border-collapse: collapse;
        }
        td{
            border: solid 1px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php

    $name = "Abhay Kumar";
    $qualification = "Undergraduate";
    $course = "B.Tech CSE";
    $college = "GLA University, Mathura";
    $year_grad = "2023";
    $skills = "HTML, CSS, PHP, JS, Java, C";
    $mobile = "+91 9876543210";
    $email = "abhay.kumar_cs19@gla.ac.in";

    ?>

    <h1>CV</h1>

    <table>

    <tr>
        <td>
        <strong>Name</strong>
        </td>
        <td>
        <?php echo($name); ?>
        </td>
    </tr>

    <tr>
        <td>
        <strong>Qualification</strong>
        </td>
        <td>
        <?php echo($qualification); ?>
        </td>
    </tr>

    <tr>
        <td>
        <strong>Course</strong>
        </td>
        <td>
        <?php echo($course); ?>
        </td>
    </tr>

    <tr>
        <td>
        <strong>College</strong>
        </td>
        <td>
        <?php echo($college); ?>
        </td>
    </tr>

    <tr>
        <td>
        <strong>Year of Graduation</strong>
        </td>
        <td>
        <?php echo($year_grad); ?>
        </td>
    </tr>

    <tr>
        <td>
        <strong>Skills</strong>
        </td>
        <td>
        <?php echo($skills); ?>
        </td>
    </tr>

    <tr>
        <td>
        <strong>Mobile Number</strong>
        </td>
        <td>
        <?php echo($mobile); ?>
        </td>
    </tr>

    <tr>
        <td>
        <strong>Email Address</strong>
        </td>
        <td>
        <?php echo($email); ?>
        </td>
    </tr>

    </table>
</body>
</html>