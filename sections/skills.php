<?php
$skills = DB::query('SELECT * FROM skills WHERE catagory = "Code" Order BY rating DESC');
?>
<section id="skills">
  <div class="container">
    <h1>skills</h1>
        <?php
          $catagorys = DB::query('SELECT catagory FROM skills');
          $catagorys = array_unique($catagorys, SORT_REGULAR);


          foreach($catagorys as $catagory) {
            echo("<div class='col-md-4'> <div class='catagory'> <h2>" . $catagory['catagory'] . "</h2> <ul>");

            $skills = DB::query('SELECT * FROM skills WHERE catagory = :catagory Order BY rating DESC', array(':catagory'=>$catagory['catagory']));
            foreach($skills as $value) {
              echo "<li>" . $value['skill'] . "<div class='rateing'><div style='width:" . $value['rating'] . "%'></div></div></li>";
            }

          echo("</ul> </div> </div>");
          }
        ?>
  </div>
</section>
