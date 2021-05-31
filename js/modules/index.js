const switchLoad = () => {
  const perfEntries = performance.getEntriesByType("navigation");
  perfEntries.forEach(function (pe) {
    const url = location.href;
    const new_url = url.replace(/\?.*$/, "");
    switch (pe.type) {
      case "reload":
        window.location.href = new_url;
        break;

      case "back_forward":
        window.location.href = new_url;
        break;
    }
  });
};

const toLinkPageWithDoor = () => {
  $("a").on("click", function (event) {
    const classNameOfLink = $(this).attr("class");

    if (classNameOfLink.includes("anchor-link")) {
      event.preventDefault();

      const Url = $(this).attr("href");

      $(".door").css({ opacity: 1 }).animate({ right: 0 }, 500);

      setTimeout(() => {
        location.href = `${Url}?prev=true`;
      }, 500);
    }
  });
};

const getParam = (name, url) => {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return "";
  return decodeURIComponent(results[2].replace(/\+/g, " "));
};

const slideDoorToShowPage = () => {
  const check = getParam("prev");
  check
    ? $(".door").css({ right: 0 }).animate({ right: "-100%" }, 700)
    : $("body").css({ opacity: 1 });
};

const scrollToPosition = (query) => {
  const headerHeight = $(".header").height();
  const position = $(query).offset().top - headerHeight;

  if ($(".burger-btn").hasClass("close")) {
    $(".burger-btn").toggleClass("close");
    $(".header__nav").removeClass("show");
  }
  $("html, body").animate({ scrollTop: position }, 800);
};

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
