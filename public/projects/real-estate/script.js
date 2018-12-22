$("#button-middle").click(function () {
  $("#button-middle").addClass("active-link");
  $("#button-left").removeClass("active-link");
  $("#button-right").removeClass("active-link");
  $("#zip-menu").removeClass("d-none");
  $("#city-menu").addClass("d-none");
  $("#price-menu").addClass("d-none");
});

$("#button-right").click(function () {
  $("#button-right").addClass("active-link");
  $("#button-left").removeClass("active-link");
  $("#button-middle").removeClass("active-link");
  $("#price-menu").removeClass("d-none");
  $("#city-menu").addClass("d-none");
  $("#zip-menu").addClass("d-none");
});


$("#button-left").click(function () {
  $("#button-left").addClass("active-link");
  $("#button-right").removeClass("active-link");
  $("#button-middle").removeClass("active-link");
  $("#city-menu").removeClass("d-none");
  $("#price-menu").addClass("d-none");
  $("#zip-menu").addClass("d-none");
});
