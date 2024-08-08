<!DOCTYPE html>
<html>
<head>
    <title>DISPLAY</title>
    <style>
        body {
            background-color: #53b6e1;
            font-family: Arial, sans-serif;
        }
        table {
            background-color: aliceblue;
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
        }
        th, td {
            border: 3px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
        mark {
            background-color: #ffff00;
            color: #000;
        }
    </style>
</head>
<body>
    <h2><mark>Displaying Course Details</mark></h2>
    <table>
        <tr>
            <th width="5%">Id</th>
            <th width="10%">First Name</th>
            <th width="10%">Last Name</th>
            <th width="10%">Password</th>
            <th width="10%">Gender</th>
            <th width="10%">Email Id</th>
            <th width="10%">Phone Number</th>
            <th width="10%">Address</th>
            <th colspan="3" width="15%">Operations</th>
        </tr>
        <!-- Example static row -->
        <tr>
            <td>1</td>
            <td>vikas</td>
            <td>singh</td>
            <td>password123</td>
            <td>Male</td>
            <td>vkumar@gmail.com</td>
            <td>123456789</td>
            <td>123 Elm Street</td>
            <td>
                <a href="update_design.html?result={&quot;Id&quot;:1,&quot;fname&quot;:&quot;John&quot;,&quot;lname&quot;:&quot;Doe&quot;,&quot;password&quot;:&quot;password123&quot;,&quot;gender&quot;:&quot;Male&quot;,&quot;email&quot;:&quot;john.doe@example.com&quot;,&quot;phone&quot;:&quot;(123) 456-7890&quot;,&quot;address&quot;:&quot;123 Elm Street&quot;}">
                    Add
                </a>
                
            </td>
            <td>
            <a href="add_design.html?result={&quot;Id&quot;:1,&quot;fname&quot;:&quot;John&quot;,&quot;lname&quot;:&quot;Doe&quot;,&quot;password&quot;:&quot;password123&quot;,&quot;gender&quot;:&quot;Male&quot;,&quot;email&quot;:&quot;john.doe@example.com&quot;,&quot;phone&quot;:&quot;(123) 456-7890&quot;,&quot;address&quot;:&quot;123 Elm Street&quot;}">
                    Update
                </a>
            </td>
            <td>
            <a href="add_design.html?result={&quot;Id&quot;:1,&quot;fname&quot;:&quot;John&quot;,&quot;lname&quot;:&quot;Doe&quot;,&quot;password&quot;:&quot;password123&quot;,&quot;gender&quot;:&quot;Male&quot;,&quot;email&quot;:&quot;john.doe@example.com&quot;,&quot;phone&quot;:&quot;(123) 456-7890&quot;,&quot;address&quot;:&quot;123 Elm Street&quot;}">
                    Delete
                </a>
            </td>
        </tr>
        <!-- Add more rows as needed -->
    </table>
</body>
</html>
