init_challanges();

document.addEventListener('DOMContentLoaded', function() {

  var submit_button = document.getElementsByClassName('submit-button')[0];
  submit_button.addEventListener('click', function() {
    var challange_name = document.getElementById('challange-name').value;
    var challange_start_date = document.getElementById('challange-start-date').value;
    var challange_end_date = document.getElementById('challange-end-date').value;
    var challange_deadline_hour = document.getElementById('challange-deadline-hour').value;
    var challange_color = document.getElementById('challange-color').value;

    var challange = {
      challangeName: challange_name,
      challangeStartDate: challange_start_date,
      challangeEndDate: challange_end_date,
      challangeDeadlineHour: challange_deadline_hour,
      challangeColor: challange_color
    };

    remove_hightlights();
    add_challange(challange);
  })


});

function init_challanges() {
  if (localStorage.getItem('challanges') === null)
    localStorage.setItem('challanges', JSON.stringify({}));
}

function get_challanges() {
  var challanges = localStorage.getItem('challanges');
  return JSON.parse(challanges);
}

function set_challanges(challanges) {
  localStorage.setItem('challanges', JSON.stringify(challanges));
}

function add_challange(challange) {
  if (!validate_input(challange)) {
    info_fail();
    return;
  }

  var challanges = get_challanges();
  var tmp_name = challange.challangeName.trim().toLowerCase().replace(new RegExp(' ', 'g'), '-');

  challanges[tmp_name] = challange;
  set_challanges(challanges);
  info_success();
}

function validate_input(challange) {
  var date_regex = /\d{4}-\d{2}-\d{2}/;
  var hour_regex = /\d{2}:\d{2}/;
  var color_regex = /#\d{6}/;
  var wrong_object_ids = [];

  if (challange.challangeName == '') {
    wrong_object_ids.push('challange-name');
  }

  if (!date_regex.test(challange.challangeStartDate))
    wrong_object_ids.push('challange-start-date');
  if (!date_regex.test(challange.challangeEndDate))
    wrong_object_ids.push('challange-end-date');
  if (!hour_regex.test(challange.challangeDeadlineHour))
    wrong_object_ids.push('challange-deadline-hour');
  if (!color_regex.test(challange.challangeColor))
    wrong_object_ids.push('challange-color');

  if (wrong_object_ids.length > 0) {
    wrong_object_ids.forEach(function(object_id) {
      highlight_wrong(object_id);
    });

    return false;
  } else {
    return true;
  }
}

function highlight_wrong(object_id) {
  document.getElementById(object_id).classList.add('invalid');
}

function info_success() {
    document.getElementsByClassName('info-fail')[0].classList.remove('visible');
    document.getElementsByClassName('info-success')[0].classList.add('visible');
}

function info_fail() {
  document.getElementsByClassName('info-success')[0].classList.remove('visible');
  document.getElementsByClassName('info-fail')[0].classList.add('visible');
}

function remove_hightlights() {
  document.getElementById('challange-name').classList.remove('invalid');
  document.getElementById('challange-start-date').classList.remove('invalid');;
  document.getElementById('challange-end-date').classList.remove('invalid');;
  document.getElementById('challange-deadline-hour').classList.remove('invalid');;
  document.getElementById('challange-color').classList.remove('invalid');;
}
