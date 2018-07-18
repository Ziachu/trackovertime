<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Track Over Time</title>

    <link rel="stylesheet" type="text/css" href="./css/base.css" />
    <link rel="stylesheet" type="text/css" href="./css/calendar.css" />
    <link rel="stylesheet" type="text/css" href="./css/popup.css" />
  </head>
  <body>

    <?php // TODO: show calendar (empty if first visit) ?>
    <section class="calendar-wrap">
      <?php
        // get the amount of days in month
        $days_in_month = date('t');

        // display box for every single day
        for ($i = 0; $i < $days_in_month; $i++) {
          $classes = array('day-wrap');

          if ($i == 0) {
            switch (date('N', mktime(0, 0, 0, date('n'), 0, date('Y')))) {
              case '0': array_push($classes, 'monday');     break;
              case '1': array_push($classes, 'tuesday');    break;
              case '2': array_push($classes, 'wednesday');  break;
              case '3': array_push($classes, 'thursday');   break;
              case '4': array_push($classes, 'friday');     break;
              case '5': array_push($classes, 'saturday');   break;
              case '6': array_push($classes, 'sunday');     break;
            }
          }

          $classes_code = implode(' ', $classes);
          echo '<div class="' . $classes_code . '"><span class="day-number">' . ($i + 1) . '</span></div>';
        }

        // place first box in right position


      ?>
    </section>

    <?php // TODO: show pop-up "Dodaj wyzwanie" if first visit ever ?>

    <?php // TODO: show pop-up "Wyzwanie opanowane?" if first visit after deadline ?>

    <script src="./js/storage.js"></script>
    <script src="./js/calendar.js"></script>
  </body>
</html>
