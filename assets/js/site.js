function loadItems(element, path, selectInputClass) {
  var selectedVal = $(element).val();

  // select all
  if (selectedVal == -1) {
    return;
  }

  $.ajax({
  type: 'GET',
  url: path + selectedVal,
  success: function (datas) {
    if (!datas || datas.length === 0) {
       return;
    }

    for (var  i = 0; i < datas.length; i++) {
      $(selectInputClass).append($('<option>', {
        value: datas[i].id,
        text: datas[i].name
    }));
    }
  },
  error: function (ex) {
  }
  });
}

function loadDepartment(element) {
  $('.js-department').empty().append('<option value="-1">Select Department</option>');
  $('.js-designation').empty().append('<option value="-1">Select Designation</option>');
  loadItems(element, '../api/department/', '.js-department');
}

function loadDesignation(element) {
  $('.js-designation').empty().append('<option value="-1">Please select your city</option>');;
  loadItems(element, '../api/designation/', '.js-designation');
}

function registerEvents() {
  $('.js-designation').change(function() {
    loadDepartment(this);
  });

  $('.js-department').change(function() {
    loadDesignation(this);
  });
}

function init() {
  registerEvents();
}

init();