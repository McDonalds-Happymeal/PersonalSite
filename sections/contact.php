<?php
?>

<section id="contact">
  <div class="container">
    <div class="form">
      <h1>Contact</h1>
      <from action="contact_form.php" method="post">
        <?php
        if(isset($post['error'])) {
          echo("
          <input type='text' name='name' placeholder='Your name' value='" . $post['name'] . "' />
          <input type='text' name='email' placeholder='Your Email' value='" . $post['email'] . "' />
          <input type='text' name='subject' placeholder='Subject' value='" . $post['subject'] . "' />
          <textarea type='text' name='message' maxlength='2000' placeholder='Your Message'> " . $post['message'] . " </textarea>
          <div class='errors'><h2>Somthing went wrong:</h2>" . $post['error'] . "
          </div>");
        }
        else {
          echo("
          <input type='text' name='Name' placeholder='Your name' />
          <input type='text' name='Email' placeholder='Your Email' />
          <input type='text' name='Subject' placeholder='Subject' />
          <textarea type='text' name='Message' maxlength='2000' placeholder='Your Message'></textarea>");
        }



        ?>
        <input type="submit" value="submit" />
      </form>
    </div>
    <div class="media">

    </div>
  </div>
<section>
