import {
  switchLoad,
  toLinkPageWithDoor,
  slideDoorToShowPage,
  scrollToPosition,
  Animation,
} from "./modules/index.js";

$(function () {
  switchLoad();
  slideDoorToShowPage();
});

$(window).on("load", function () {
  $("body").css({ opacity: 1 });
  const topOfContent = $(".content").offset().top;

  const header = $(".header");

  const aboutMe = ".about-me";
  const aboutMeTitle = new Animation(`${aboutMe}__title`, "fadeIn");
  const aboutMeIntroduction = new Animation(
    `${aboutMe}__introduction`,
    "fadeIn"
  );
  const aboutMeBackground = new Animation(`${aboutMe}__background`, "fadeIn");

  const skills = ".skills";
  const skillsTitle = new Animation(`${skills}__title`, "rotate");

  const skillsItems = [];
  $(`${skills}__item`).each(function (index, skillsItem) {
    skillsItems.push(new Animation(skillsItem, "rotate"));
  });

  const service = ".service";

  const serviceTitle = new Animation(`${service}__title`, "popUp");

  const serviceItemImgBoxes = [];
  $(`${service}__item-imgBox`).each(function (index, serviceItemImgBox) {
    serviceItemImgBoxes.push(new Animation(serviceItemImgBox, "popUp"));
  });

  const serviceItemPopUpInners = [];
  $(`${service}__item-popUpInner`).each(function (
    index,
    serviceItemPopUpInner
  ) {
    serviceItemPopUpInners.push(new Animation(serviceItemPopUpInner, "popUp"));
  });

  const serviceItemPrices = [];
  $(`${service}__item-price`).each(function (index, serviceItemPrice) {
    serviceItemPrices.push(new Animation(serviceItemPrice, "popUp"));
  });

  const works = ".works";

  const worksTitle = new Animation(`${works}__title`, "blur");

  const worksItems = [];
  $(`${works}__item`).each(function (index, worksItem) {
    worksItems.push(new Animation(worksItem, "blur"));
  });

  $(window).on("scroll", function () {
    let top = $(window).scrollTop();
    top >= topOfContent
      ? header.addClass("fixed")
      : header.removeClass("fixed");

    if (aboutMeTitle.hasOverTaken(top)) {
      aboutMeTitle.show();
    }
    if (aboutMeIntroduction.hasOverTaken(top)) aboutMeIntroduction.show(200);
    if (aboutMeBackground.hasOverTaken(top)) {
      aboutMeBackground.show();
    }

    if (skillsTitle.hasOverTaken(top)) skillsTitle.show();

    $.each(skillsItems, function (index, skillsItem) {
      if (skillsItem.hasOverTaken(top)) skillsItem.show();
    });

    if (serviceTitle.hasOverTaken(top)) serviceTitle.show();

    $.each(serviceItemImgBoxes, function (index, serviceItemImgBox) {
      if (serviceItemImgBox.hasOverTaken(top)) serviceItemImgBox.show();
    });

    $.each(serviceItemPopUpInners, function (index, serviceItemPopUpInner) {
      if (serviceItemPopUpInner.hasOverTaken(top))
        serviceItemPopUpInner.show(200);
    });

    $.each(serviceItemPrices, function (index, serviceItemPrice) {
      if (serviceItemPrice.hasOverTaken(top)) serviceItemPrice.show();
    });

    if (worksTitle.hasOverTaken(top)) worksTitle.show();

    $.each(worksItems, function (index, worksItem) {
      if (worksItem.hasOverTaken(top)) worksItem.show();
    });
  });

  $(".scroll-top").click(() => {
    scrollToPosition("#top");
  });

  $(".about-me-link").click(() => {
    scrollToPosition("#about-me");
  });

  $(".skills-link").click(() => {
    scrollToPosition("#skills");
  });

  $(".service-link").click(() => {
    scrollToPosition("#service");
  });

  $(".works-link").click(() => {
    scrollToPosition("#works");
  });

  toLinkPageWithDoor();
});
