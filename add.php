<?php require('./partials/header.php'); ?>

    <section class="add-wrap container">
      <h1>Dodaj wyzwanie</h1>

      <div class="input-wrap">
        <input type="text" id="challange-name" placeholder="Nazwa wyzwania" />
      </div>

      <div class="input-wrap">
        <input type="date" id="challenge-start-date" />
      </div>

      <div class="input-wrap">
        <input type="date" id="challange-end-date" />
      </div>

      <div class="input-wrap">
        <input type="text" id="challange-deadline-hour" placeholder="Godzina weryfikacji (format: HH:MM)" />
      </div>

      <div class="input-wrap">
        <input type="text" id="challange-color" placeholder="Kolor wyzwania (format #hex)" />
      </div>
    </section>

<?php require('./partials/footer.php'); ?>
