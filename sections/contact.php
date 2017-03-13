<?php
?>

<section id="contact">
  <div class="container">
    <div class="form">
      <h1>Contact</h1>
      <form action="contact_form.php" method="post">
        <?php
        if(isset($_SESSION['error'])) {
          echo("
          <input type='text' name='name' placeholder='Your name' value='" . $_SESSION['name'] . "' />
          <input type='text' name='email' placeholder='Your Email' value='" . $_SESSION['email'] . "' />
          <input type='text' name='subject' placeholder='Subject' value='" . $_SESSION['subject'] . "' />
          <textarea type='text' name='message' maxlength='2000' placeholder='Your Message'> " . $_SESSION['message'] . " </textarea>
          <div class='errors'><h2>Somthing went wrong:</h2>" . $_SESSION['error'] . "
          </div>");
        }
        else {
          echo("
          <input type='text' name='name' placeholder='Your name' />
          <input type='text' name='email' placeholder='Your Email' />
          <input type='text' name='subject' placeholder='Subject' />
          <textarea type='text' name='message' maxlength='2000' placeholder='Your Message'></textarea>");
        }



        ?>
        <input type="submit" value="Submit" />
      </form>
    </div>
    <div class="media">

    </div>
  </div>
<section>
