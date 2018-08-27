<!doctype html>
<?php  
include 'db.php';
$sql = 'select * from tasks';
$rows = $db->query($sql);

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
  <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h1 class="mb-5">To-do List</h1>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <form method="post" action="add.php" class="text-left">
                        <div class="form-group">
                            <input type="text" name='task' class="form-control" required autofocus placeholder="Task Name">
                        </div>
                        <button type="submit" name="send" class="btn btn-success btn-block">Add</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
            <table class="table">
                <button class="btn btn-success float-left mb-3" data-toggle="modal" data-target="#exampleModal">Add Task</button>
                <!-- <button class="btn btn-defult float-right mb-3">Print</button> -->
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Task Name</th>
                    <th scope="col">Settings</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = $rows->fetch_assoc()){ ?>
                    <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id'] ?>&name=<?php echo $row['name']; ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
        </div>
      </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>