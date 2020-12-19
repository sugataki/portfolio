import {
  switchLoad,
  toLinkPageWithDoor,
  slideDoorToNextPage,
} from "./modules/index.js";

$(function () {
  switchLoad();
  slideDoorToNextPage();
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

  toLinkPageWithDoor();
});

class Animation {
  constructor(query, type) {
    this.query = $(query);
    this.type = type;

    const $query = this.query;

    const opacity0 = () => $query.css({ opacity: 0 });

    switch (this.type) {
      case "fadeIn":
        opacity0();
        $query.css({ position: "relative", top: "20px" });
        break;
      case "rotate":
        opacity0();
        break;
      case "popUp":
        opacity0();
        break;
      case "blur":
        opacity0();
        break;
    }
  }

  show(delaySeconds = 0) {
    const $query = this.query;

    const opacity1 = () => $query.css({ opacity: 1 });
    setTimeout(() => {
      switch (this.type) {
        case "fadeIn":
          $query.animate({ opacity: 1, top: 0 }, 800);
          break;
        case "rotate":
          $query.animate({ opacity: 1 }, 800).addClass("rotate");
          break;
        case "popUp":
          opacity1();
          $query.addClass("popUp");
          break;
        case "blur":
          opacity1();
          $query.addClass("blur");
          break;
      }
    }, delaySeconds);
  }

  _getScrollTop() {
    return this.query.offset().top;
  }

  hasOverTaken(comparisonPosition) {
    return (
      comparisonPosition >= this._getScrollTop() - ($(window).height() / 3) * 2
    );
  }
}
