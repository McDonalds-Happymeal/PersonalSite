<?php
?>

<section  id="refrences">
  <div class="container">
    <h1>Refrences</h1>
    <p>Some nice thing people have said about me.<p>
      <?php
        $refrences = DB::query('SELECT * FROM refrences ORDER BY RAND() LIMIT 1');
        foreach($refrences as $refrence) {
          echo("
          <div class='content' class='j" . $refrence['id'] . "'>
            <div class='img'>
              <img src='images/refrence/" . $refrence['image'] . "' height='330' width='330' />
            </div>
            <div class='text'>
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
