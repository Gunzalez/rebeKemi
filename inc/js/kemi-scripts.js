jQuery(document).ready(function ($) {
  "use strict";

  // alert('Loaded!')
  jQuery(".hidden-cell").removeClass("hidden-cell");

  $(".main-carousel").flickity({
    wrapAround: true,
    autoPlay: 10000,
    arrowShape: "M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z",
  });

  // social links open in new tab/window
  $("#menu-social a").attr("target", "_blank");

  // funky grid stuff
  $(".grid").pinterest_grid({
    no_columns: 3,
    padding_x: 0,
    padding_y: 0,
    margin_bottom: 15,
    single_column_breakpoint: 920,
  });

  var $links = $(".my-stories a");
  $links.each(function (index, link) {
    var text = index + 1 + ". " + $(link).text();
    $(link).text(text);
  });

  /* ------------------------------------------------------------------------------------------------- */

  var stickyNavInit = function () {
    if ($("#my-sidebar").length > 0) {
      var scrollPosY = window.pageYOffset | document.body.scrollTop;
      var $stickySideBar = document.querySelector("#my-sidebar");
      var pageHeaderHeight = $(".page-header").height();
      var triggerHeight = pageHeaderHeight + 257;
      var checkForSticky = function () {
        if (scrollPosY > triggerHeight) {
          $stickySideBar.classList.add("scrolled");
        } else if (scrollPosY <= triggerHeight) {
          $stickySideBar.classList.remove("scrolled");
        }
      };

      window.onscroll = function () {
        scrollPosY = window.pageYOffset | document.body.scrollTop;
        checkForSticky();
      };
      checkForSticky();
    }
  };
  stickyNavInit();

  /* ------------------------------------------------------------------------------------------------- */

  var prettifySocialMediaLinks = function () {
    var $links = $("#menu-social-items a");
    $links.each(function (index, link) {
      $(link).addClass("link-" + index);
    });
  };
  prettifySocialMediaLinks();

  /* ------------------------------------------------------------------------------------------------- */

  var setUpItemLinks = function () {
    var $itemLinks = $(".item-link");
    $itemLinks.each(function (_, link) {
      var url = $(link).find("a").attr("href");
      var $item = $(link).parents(".copy");
      $item.addClass("clickable");
      $item.on("click", function () {
        window.location.assign(url);
      });
    });
  };
  // setUpItemLinks();

  /* ----------------------------------------------------------- */

  // Replace links with numbers, ensure correct top nav option is clicked
  var adjustSubnavigationMenu = function () {
    // replaces links masks with numbers
    var $subnavs = $(".sub-navigation");
    $subnavs.each(function (_, subnav) {
      $(subnav)
        .find("li")
        .each(function (index, li) {
          $(li)
            .find("a")
            .text(index + 1);
        });
    });

    // sets focus on appropriate manin nav item, based on sub-navigation
    if ($subnavs) {
      var subnav = $subnavs[0];
      if ($(subnav).hasClass("menu-my-story")) {
        var $mainNavLinks = $("#cssmenu > ul li");
        $mainNavLinks.each(function (_, link) {
          if ($(link).find("a").text() === "My Story") {
            $(link).addClass("current-menu-item");
          }
        });
      } else if ($(subnav).hasClass("menu-second-time")) {
        var $mainNavLinks = $("#cssmenu ul li");
        $mainNavLinks.each(function (_, link) {
          if ($(link).find("a").text() === "A Second Time") {
            $(link).addClass("current-menu-item");
          }
        });
      }
    }
    $subnavs.removeClass("display-none");
  };
  adjustSubnavigationMenu();

  /* ----------------------------------------------------------- */

  // options
  var mmenuOptions = {
    extensions: [
      "position-right",
      "pagedim-black",
      "position-front",
      // "theme-dark",
    ],
    navbar: {
      // sticky: false,
    },
  };

  // configuration
  var mmenuConfigurations = {
    offCanvas: {
      clone: true,
    },
  };

  // create mobile navigation
  var setUpPageMobileNavigation = function () {
    var menu = new Mmenu("#main-navigation", mmenuOptions, mmenuConfigurations);

    $("#menu-trigger button").on("click", function (evnt) {
      evnt.preventDefault();
      menu.API.open();
    });

    $(".close-menu").on("click", function (evnt) {
      evnt.preventDefault();
      menu.API.close();
    });

    // remove 'MENU 'heading from slide out panels
    $(".mm-navbar").eq(0).remove();
  };
  setUpPageMobileNavigation();

  /* ----------------------------------------------------------- */

  // Changes the news ticker HTML from links to just text inside each <li></li>
  var rearrangeNewsTickerHTML = function () {
    if ($("#menu-news-ticker li a").length > 1) {
      $("#menu-news-ticker li a").each(function (_, item) {
        var text = $(item).text();
        $(item).parent().empty().text(text);
      });
    } else {
      $("#menu-news-ticker").parent().remove();
    }
  };
  rearrangeNewsTickerHTML();
});
