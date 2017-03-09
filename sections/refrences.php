<?php
?>

<section  id="refrences">
  <div class="container">
    <h1>Refrences</h1>
    <p>Some nice thing people have said about me.<p>
      <?php
      $refrences = DB::query('SELECT * FROM refrences');
      foreach($refrences as $refrence) {
        echo("
          <div class='refrence'>
            <div class='col-md-4'>
              <img src='images/refrence/" . $refrence['image'] . "' height='330' width='330' />
            </div>
            <div class='col-md-8'>
              <p>''" . $refrence['extract'] . "''</p>
              <ul>
                <li>" . $refrence['name'] . "</li>
                <li>" . $refrence['relation'] . "</li>
              </ul>
            </div>
          </div>
          ");
      }
      ?>
  </div>
</section>
