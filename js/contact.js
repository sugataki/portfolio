$(function () {
  switchLoad();
  slideDoorToShowPage();
  toLinkPageWithDoor();
});

$(window).on("load", function () {
  $("body").css({ opacity: 1 });

  toLinkPageWithDoor();
});
