<?php
  include 'server.php';
  include 'partials/header.php';

 ?>

<!-- <body>
  <div class="container"> -->
    <div class="row">
      <div class="col-12">


    <h1 class="text-center">Tutte le stanze in Hotel</h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>FLOOR</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(!empty($rooms)) {
            foreach ($rooms as $room) { ?>
              <tr>
                <td> <?php echo $room['id']; ?></td>
                <td> <?php echo $room['floor']; ?></td>
                <td><a class="btn btn-primary"href="show/show.php?id= <?php echo $room['id']; ?>">VIEW</a></td>
                <td><a class="btn btn-success"href="edit.php?id= <?php echo $room['id']; ?>">UPDATE</a></td>
                <td>
                <form class="" action="delete/server.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                  <input class="btn btn-danger" type="submit" value="DELETE">
                </form>
                </td>
              </tr>
            <?php }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
      <?php include 'partials/footer.php' ?>
      <!--
    </div>
  </body>

</html> -->
