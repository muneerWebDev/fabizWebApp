(function ($) {

  // Navbar 

  var allPanels = $('.dropdown > ul').hide();

  $('.dropdown > a').click(function () {

    $(this).parents('.dropdown').siblings('.dropdown').removeClass('active').children('.dropdown-menu').slideUp();

    if ($(this).parents('.dropdown').hasClass('active')) {
      $(this).parent().removeClass('active').children('.dropdown-menu').slideUp();
    } else {
      $(this).parent().addClass('active').children('.dropdown-menu').slideDown();
    }
  });

  var openedNav = 0;

  $(".sidenav-toggler-inner").click(function () {
    if (openedNav == 1) {
      openedNav = 0;
      $("header nav").removeClass("pinned");
      $('main').removeClass("navPinned");
    } else {

      openedNav = 1;
      $("header nav").addClass("pinned");
      $('main').addClass("navPinned");
    }

  });

  $("header nav").mouseenter(function () {
    $("header nav").removeClass("collapsed");

  });
  $("header nav").mouseleave(function () {
    if (!(openedNav == 1))
      $("header nav").addClass("collapsed");
  });

  /*************************/

  // Resizable table width

  $('table.resizable').resizableColumns();

  /************************/

  //Table filter button
  $(".data-table th.filter").append("<button class='filter_btn'></button>");
  $(".data-table th.filter .filter_btn").click(function () {
    $(".data-table th.filter .filter_btn").removeClass("active");
    $(this).addClass("active");
    $(this).toggleClass("asc");
  });

  /************************/

  // Table Editable cells
  // $('table tr th').each(function () {
  //   if ($(this).hasClass("editable")) {
  //     var nth = $(this).index() + 1;
  //     $(this).closest('table').find("tr td:nth-child(" + nth + ")").prop('contenteditable', true).append("<span class='status'></span>");
  //   }
  // });

  // $('table tr td[contenteditable="true"] *').prop('contenteditable', false);

  /************************/


  //***********************************Controls And Modals************************************//

  //Default Modal
  $("#modal").hide();

  $(".editable tbody tr").on("click", function (event) {
    $(".controls-wrapper").addClass("show-all-controls");
    $(".editable tr").removeClass("active");
    $(this).addClass("active");
  });

  $(".modal-dismiss").on("click", function () {
    $(this).closest("#modal").fadeOut();
    $(".controls-wrapper").removeClass("show-delete-only");
  });

  //Modal In Modal
  $("#modal-in-modal").hide();

  $("#modal .editable tbody tr").on("click", function (event) {
    $(".controls-wrapper").addClass("modal-in-modal-controls");
  });

  $("#modal-in-modal .modal-in-modal-dismiss").on("click", function () {
    $(this).closest("#modal-in-modal").fadeOut();
    $(".controls-wrapper").removeClass("show-delete-only modal-in-modal-controls");
    $("#modal > .modal").removeClass("overflow-hidden");
  });

  //Modal <=> Controlls\\

  $(".controls-wrapper .edit-btn,.controls-wrapper .add-new-btn").on("click", function () {

    if ($(".controls-wrapper").hasClass("modal-in-modal-controls")) {
      // modal-in-modal-control

      $(".controls-wrapper").addClass("show-delete-only");
      $(".controls-wrapper").removeClass("show-all-controls");
      $("#modal-in-modal").show("closed");
      $("#modal > .modal").addClass("overflow-hidden");

    } else {
      //default control

      $(".controls-wrapper").addClass("show-delete-only");
      $(".controls-wrapper").removeClass("show-all-controls");
      $(".three-controlls-modal").show("closed");

    }

  });

  $(".controls-wrapper .delete-btn").on("click", function () {

    if ($(".controls-wrapper").hasClass("modal-in-modal-controls")) {
      // modal-in-modal-control

      $("#modal .editable tr.active").remove();
      $("#modal-in-modal").fadeOut();
      $(".controls-wrapper").removeClass("show-delete-only  modal-in-modal-controls show-all-controlls");

    } else {
      //default control

      $(".controls-wrapper").removeClass("show-all-controls");
      $(".editable tr.active").remove();
      $(".three-controlls-modal").fadeOut();
      $(".controls-wrapper").removeClass("show-delete-only");
    }
  });

  /************************/

  //Import conntrols
  $(".imports-control input.import").on("change", function () {

    //Upload 

    var filename = $(this).val();

    var extension = filename.replace(/^.*\./, '');

    if (extension == filename) {
      extension = '';
    } else {
      extension = extension.toLowerCase();
    }

    if (($(this).val() == "")) {
      $(".imports-control").removeClass("show-all-controls");
    } else if (extension == "xls" || extension == "xlsx") {
      $(".imports-control").addClass("show-all-controls");
    } else {
      alert("Only excel files are supported");
    }

  });


  //Diffrent 'Search by date' types\\
  $(".search-by-date").addClass("single");

  $(".search-by-date select").on("change", function () {
    var val = $(this).val();
    var targetInput = $(".search-by-date #single")

    if (val == 'between') {
      $(".search-by-date").addClass("between");
      $(".search-by-date").removeClass("single");
    } else {
      $(".search-by-date").removeClass("between");
      $(".search-by-date").addClass("single");
    }

    switch (val) {

      case 'month':
        targetInput.prop('type', 'month');
        break;

      default:
        targetInput.prop('type', 'date');
    }

  });


  //DatePicker
  $('.diary-date #date').datepicker('pick', true);
  
  $('.diary-date #yest').click(function () {
    var date_new = $('#date').datepicker('getDate');
    date_new.setDate(date_new.getDate() - 1);
    $('#date').datepicker('setDate', date_new);
  });

  $('.diary-date #tom').click(function () {
    var date_new = $('#date').datepicker('getDate');
    date_new.setDate(date_new.getDate() + 1);
    $('#date').datepicker('setDate', date_new);
  });

})(jQuery);