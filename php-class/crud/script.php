<?php

$uname = $_POST['uname'];


//  Create Operation
if(isset($_POST['save']))
{
    $connection = new mysqli("localhost", "root", "", "crud");

    if(!$connection)
    {
        echo "Not Connected to the Server";
    }

    $insert_query = "INSERT INTO users(uname) VALUES ('$uname')";

    if(mysqli_query($connection, $insert_query))
    {
        header("Location: index.html");
    }

}


//  Display Operation
if(isset($_POST['display']))
{
    $connection = new mysqli("localhost", "root", "", "crud");

    if(!$connection)
    {
        echo "Not Connected to the Server";
    }

    $select_query = "SELECT id,uname FROM users";

    $result = mysqli_query($connection, $select_query);

    if(mysqli_num_rows($result) > 0)
    {
            echo "<table border='1'>
            <tr>
            <th>ID</th>
            <th>NAME</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
                echo "<tr><form action='script.php' method='post'>";
                echo "<td><input type=text name=id readonly value='" . $row['id'] . "'</td>";
                echo "<td><input type=text name=uname value='" . $row['uname'] . "'</td>";

                echo "<td><input type=submit name=update value=Update></td>";
                echo "<td><input type=submit name=delete value=Delete></td>";
                echo "</form></tr>";
            }
    }
    else
    {
        echo "No Data Found";
    }
    echo "</table>";
}


//  Update Operation
if(isset($_POST['update']))
{
    $connection = new mysqli("localhost", "root", "", "crud");

    if(!$connection)
    {
        echo "Not Connected to the Server";
    }

    $id = $_POST['id'];
    $uname = $_POST['uname'];

    $update_query = "UPDATE users SET uname='$uname' WHERE id='$id'";
    if(mysqli_query($connection, $update_query))
    {
        echo "Updated Successfully";
    }
    else
    {
        echo "Update Failed";
    }
}


//  Delete Operation
if(isset($_POST['delete']))
{
    $connection = new mysqli("localhost", "root", "", "crud");

    if(!$connection)
    {
        echo "Not Connected to the Server";
    }

    $id = $_POST['id'];

    $delete_query = "DELETE FROM users WHERE id='$id'";

    if(mysqli_query($connection, $delete_query))
    {
        echo "Deleted Successfully";
    }
    else
    {
        echo "Deletion Failed";
    }

}
    

?>