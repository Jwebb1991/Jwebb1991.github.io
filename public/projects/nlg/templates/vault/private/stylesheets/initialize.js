
$("#nav-list").click(function(){
  $("#directory").toggleClass("d-none");
  $("#login").addClass("d-none");
  $("#searchForm").addClass("d-none");
});

$("#search-button").click(function(){
  $("#searchForm").toggleClass("d-none");
  $("#directory").addClass("d-none");
  $("#login").addClass("d-none");
});

$("#login-dropdown").click(function(){
  $("#login").toggleClass("d-none");
  $("#directory").addClass("d-none");
  $("#searchForm").addClass("d-none");
});


var elem = document.getElementById("rolling-content"); //div#container
var elemWidth = elem.scrollWidth;
var elemVisibleWidth = elem.offsetWidth;
elem.scrollLeft = (elemWidth - elemVisibleWidth) / 2;
