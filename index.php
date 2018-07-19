<?php require('./partials/header.php'); ?>

    <section class="calendar-wrap">
      <?php require('calendar.php'); ?>
    </section>

    <?php // TODO: show pop-up "Dodaj wyzwanie" if first visit ever ?>
    <?php // TODO: show pop-up "Wyzwanie opanowane?" if first visit after deadline ?>
    <section class="popup-wrap">
      <?php // TODO: show if user used the app for the 1st time ?>
      <p class="popup-name"><a href="/trackovertime/add.php">Dodaj pierwsze wyzwanie!</a></p>

      <?php // TOOD: show if user user the app for the 1st time this day after deadline ?>
      <!-- <p class="popup-name"><a href="#">Jak dzisiaj poszło?</a></p> -->
    </section>

<?php require('./partials/footer.php'); ?>
