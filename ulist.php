<?php
include 'db/_dbConnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <title>Update User Records Details</title>
</head>

<body>

    <?php
    require 'db/_nav.php'; ?>
<div class="container my-4">


<!-- New club creating starts here -->
<form action="/cse328/db/create.php" method="POST">
  <div class="form-group">
    <label for="title">Update User name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="User Name ">
  </div>
  <div class="form-group">
    <label for="motto">Update User clubs joined</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="motto"  placeholder=" User clubs joined..."></textarea>
  </div>
  <button type="submit" class="btn btn-success" name="create">Update changes</button>
</form>
<!-- New club creating ends here -->
<hr>

<table class="table bg-light text-dark my-4">
    <thead>
        <tr>
            <th scope="col">S.No</th>
            <th scope="col">User ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Club Joined</th>
            <!-- <th scope="col">Event Joined</th> -->
        </tr>
    </thead>
        <tbody>

    <?php
            $sql = "SELECT * FROM `users7`";
            $fireq = mysqli_query($connect, $sql);
            
            //Using a loop here to iterate through clubs 
            while ($row = mysqli_fetch_assoc($fireq)) {
                if(!($row['uid']==111)){
                echo '
            <tr>
                <td>' . $row['sno'] . '</td>
                <td>' . $row['uid'] . '</td>
                <td>' . $row['username'] . '</td>
                <td>' . $row['uclub'] . '</td>
                <td>   
                <button class="edit btn btn btn-primary" id=' . $row["uid"] . ' disabled>Edit</button>
                <button class="delete btn btn-success" id=d' . $row["uid"] . ' disabled>Delete</button>
                </td>
                </tr>
    ';
                }
} ?>
</tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"> </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
    </script>
   
      <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[1].innerText;
        description = tr.getElementsByTagName("td")[2].innerText;
        console.log(title, description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        snoEdit.value = e.target.id;
        console.log(e.target.id);
        $('#editModal').modal('toggle');
      })
    })
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        sno = e.target.id.substr(1, );
        if (confirm("Are you sure you want to delete this club? Press OK!")) {
          console.log("yes");
          window.location = `/cse328/updatec.php?delete=${sno}`;
          //todo: create a form and use post request to submit a form
        } else {
          console.log("No")
        }

      })
    })
  </script>
</body>

</html>