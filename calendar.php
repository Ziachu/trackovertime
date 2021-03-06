<?php
  // get the amount of days in month
  $days_in_month = date('t');

  // display box for every single day
  for ($i = 0; $i < $days_in_month; $i++) {
    $classes = array('day-wrap');
    $inactive = false;

    // if first day of month
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

    // if day after current day
    if ($i + 1 > date('j')) {
      $inactive = true;
      array_push($classes, 'inactive');
    }

    $classes_code = implode(' ', $classes);
    echo '<div class="' . $classes_code . '">';
    echo '<span class="day-number">' . ($i + 1) . '</span>';

    if (rand(0, 1) && !$inactive) {
      echo '<i class="material-icons day-completed-mark">check_circle_outline</i></span>';
    }

    echo '</div>';
  }
?>
