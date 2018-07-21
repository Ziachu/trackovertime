<?php require('./partials/header.php'); ?>

    <section class="add-wrap container">
      <h1 class="headline">Dodaj wyzwanie</h1>

      <div class="input-wrap">
        <p>Nazwa wyzwania:</p>
        <input type="text" id="challange-name" placeholder='np. "Nie jem czekolady!"' />
      </div>

      <div class="input-wrap">
        <p>Data rozpoczęcia:</p>
        <input type="date" id="challange-start-date" />
      </div>

      <div class="input-wrap">
        <p>Data zakończenia:</p>
        <input type="date" id="challange-end-date" />
      </div>

      <div class="input-wrap">
        <p>Godzina weryfikacji:</p>
        <input type="text" id="challange-deadline-hour" placeholder="np. 19:00" />
        <p>Kolor:</p>
        <input type="color" id="challange-color" />
      </div>

      <div class="submit-wrap">
        <p class="submit-button">Zapisz!</p>
        <p class="info-success">Udało się</p>
        <p class="info-fail">Coś poszło nie tak</p>
      </div>
    </section>

<?php require('./partials/footer.php'); ?>
