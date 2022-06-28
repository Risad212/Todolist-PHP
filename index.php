<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="todo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <?php
   include 'Database.php';
  ?>
    <div class="container mt-5">
        <h2 class="text-center">Our TodoList</h2>
        <form action="create.php" class="text-center" method="post">
            <input type="text" name="todoItem" id="todoItem" placeholder="writer someting" class="w-25 py-1 px-3 mt-2">
            <button class="py-1 px-4"><i class="fa-solid fa-circle-plus"></i></button>
        </form>

        <!-- display data -->
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">todo Item</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                 <?php
                   $sql = "SELECT * FROM todo_storge";
                   $result = mysqli_query($conn, $sql);
                   if($result){
                     while($row=mysqli_fetch_assoc($result)){
                         $id=$row['id'];
                         $item=$row['item'];
                 ?>
                 <tr>
                    <td><?php echo $id?></td>
                    <td><?php echo $item?></td>
                    <td>
                        <a href="delate.php?id=<?php echo $id?>" class="me-3"><i class="fa-solid fa-trash-can"></i></a>
                        <a href="edit.php?id=<?php echo $id?>"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                 </tr>
                  <?php
                    }
                  }
                 ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>