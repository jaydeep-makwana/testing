<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

  <form  method="post">

      <input type="text" name="search">
      <input type="submit" name="submit">
    </form>  
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'mydb');
    if (!isset($_POST['submit'])) {
       
    $query = "select * from user";
    $rslt = mysqli_query($conn, $query);

    while ($arr = mysqli_fetch_assoc($rslt)) { ?>
        <div id="row<?php echo $arr['id']; ?>">

            ID : <?php echo $arr['id']; ?> age : <?php echo $arr['age']; ?> gender : <?php echo $arr['gender']; ?>

            <button onclick="del(<?php echo $arr['id']; ?>)" >delete</button>
            <button onclick="update(<?php echo $arr['id']; ?>)" >update</button>
            <br>
        </div>

    <?php  } 
    
    } else {
        $id = $_POST['search'];
        $query = "SELECT * from user where gender='$id'";
        $rslt = mysqli_query($conn, $query);
    
        while ($arr = mysqli_fetch_assoc($rslt)) { ?>
            <div id="row<?php echo $arr['id']; ?>">
    
                ID : <?php echo $arr['id']; ?> age : <?php echo $arr['age']; ?> gender : <?php echo $arr['gender']; ?>
    
                <button onclick="del(<?php echo $arr['id']; ?>)" >delete</button>
                <button onclick="update(<?php echo $arr['id']; ?>)" >update</button>
                <br>
            </div>
    
        <?php  }
    }
    
    ?>






    <script> 
     
       

        function del(id) {
            let alert = confirm('sure?');
            if (alert == true) {


                let xhr = new XMLHttpRequest();
                xhr.open("GET", "delete.php?id=" + id);
                xhr.send();
                document.getElementById('row'+id).style.display = 'none';
            }

        }
    </script>




</body>

</html>