import {
  toLinkPageWithDoor,
  switchLoad,
  slideDoorToNextPage,
} from "./modules/index.js";

$(function () {
  switchLoad();
  slideDoorToNextPage();
  toLinkPageWithDoor();
});

$(window).on("load", function () {
  $("body").css({ opacity: 1 });
});
