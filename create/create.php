<?php
  include_once __DIR__ .'/../env.php'
  // include 'server.php';
  include __DIR__ .'/../partials/header.php';
 ?>

 <div class="container">
  <div class="row">
   <div class="col-12 mt-5">
     <form action="server-update.php" method="POST">
       <div class="form-group">
         <label for="room_number">Numero di stanza</label>
         <input class="form-control" type="text" name="room_number" placeholder="Inserisci il numero della stanza" value="">
       </div>
       <div class="form-group">
         <label for="floor">Piano</label>
         <input class="form-control" type="text" name="floor" placeholder="Inserisci il numero del piano" value="">
       </div>
       <div class="form-group">
         <label for="beds">Letti</label>
         <input class="form-control" type="text" name="beds" placeholder="Inserisci il numero dei letti"value="">
       </div>
       <div class="form-group">
         <input type="hidden" name="id" value="<?php echo $rooms['id']; ?>">
         <input  class="btn btn-info form-control" type="submit" value="Salva">
       </div>
     </form>
   </div>
  </div>
 </div>

 <?php
 include __DIR__ . '/../partials/footer.php';
?>
