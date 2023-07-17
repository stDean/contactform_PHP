<?php

require base_path('/views/partials/head.php');

?>

<div>
  <p>Congratulations <b><?= $_SESSION['user']['name'] ?></b>, You have successfully Logged in</p>

  <form action="/session" method="POST" style="margin: 20px 40%;">
    <input type="hidden" name="_method" value="DELETE">
    <button style="width: auto; height: auto; padding: 15px 20px;" type="submit">Log Out</button>
  </form>
</div>

<?php

require base_path('/views/partials/footer.php');

?>