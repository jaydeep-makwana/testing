<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON_TABLE</title>
    <link rel="stylesheet" href="style.css">
 </head>
<body>

<?php  include('json.php');  ?>

<table class="table">
    <thead>
        <tr>
            <th rowspan='3'>ID</th>
            <th rowspan='3'>NAME</th>
            <th rowspan='3'>USER_NAME</th>
            <th rowspan='3'>EMAIL</th>
            <th rowspan='3'>ID</th>
            <th colspan='6'>ADDRESS</th>
            <th rowspan='3'>PHONE</th>
            <th rowspan='3'>ID</th>
            <th rowspan='3'>WEBSITE</th>
            <th COLSPAN='3' rowspan='2'>COMPANY</th>
        </tr>
        <tr>
             <th rowspan='2'>STREEET</th>
             <th rowspan='2'>SUITE </th>
             <th rowspan='2'>CITY</th>
             <th rowspan='2'>ZIPCODE</th>
             <th colspan="2">GEO</th>
            </tr>
            <tr>
                <th>LAT E</th>
                <th>LNG</th>
                <th>NAME</th>
                <th>CATCHCPHRASE</th>
                <th>BS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <table> <?php Id(); ?> </table> </td>
            <td> <table> <?php Name(); ?> </table> </td>
            <td> <table> <?php User_Name(); ?> </table> </td>
            <td> <table> <?php Email(); ?> </table> </td>
            <td> <table> <?php Id(); ?> </table> </td>
            <td> <table> <?php Street(); ?> </table> </td>
            <td> <table> <?php Suite(); ?> </table> </td>
            <td> <table> <?php City(); ?> </table> </td>
            <td> <table> <?php Zipcode(); ?> </table> </td>
            <td> <table> <?php Latitude(); ?> </table> </td>
            <td> <table> <?php Longitude(); ?> </table> </td>
            <td> <table> <?php Phone(); ?> </table> </td>
            <td> <table> <?php Id(); ?> </table> </td>
            <td> <table> <?php Website(); ?> </table> </td>
            <td> <table> <?php Website_Name(); ?> </table> </td>
            <td> <table> <?php Catchphrase(); ?> </table> </td>
            <td> <table> <?php Bs(); ?> </table> </td>
            
        </tr>
    </tbody>
</table>
 
</body>
</html>

 