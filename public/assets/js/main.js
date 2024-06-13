

/*==============================================================*/
// Loader
/*==============================================================*/
$(".preload").fadeOut();
$(".content").fadeIn();
// $(document).ready(function() {
//     $(".preload").fadeOut(2000, function() {
//         $(".content").fadeIn(1000);
//     });
// });

/*==============================================================*/
// Back To Top
/*==============================================================*/
mybutton = document.getElementById("scrollTopButton");
whatsapp = document.getElementById("whatsappbutton");

function scrollToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function scrollFunction() {
  if (mybutton && whatsapp) {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      mybutton.style.display = "block";
      whatsapp.style.bottom = "110px";
    } else {
      mybutton.style.display = "none";
      whatsapp.style.bottom = "50px";
    }
  }
}
$(document).ready(function () {
  window.onscroll = function () {
    scrollFunction();
  };
});
