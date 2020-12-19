export const switchLoad = () => {
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

export const toLinkPageWithDoor = () => {
  $(".link").on("click", function (event) {
    event.preventDefault();

    console.log($(this));

    const Url = $(this).attr("href");

    $(".door").css({ opacity: 1 }).animate({ right: 0 }, 500);

    setTimeout(() => {
      location.href = `${Url}?prev=true`;
    }, 500);
  });
};

export const getParam = (name, url) => {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return "";
  return decodeURIComponent(results[2].replace(/\+/g, " "));
};

export const slideDoorToNextPage = () => {
  const check = getParam("prev");
  check
    ? $(".door").css({ right: 0 }).animate({ right: "-100%" }, 500)
    : $("body").css({ opacity: 1 });
};
