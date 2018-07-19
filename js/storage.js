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

    console.log(challange);
  })


});
