$(".name").mouseenter(function () {
  $(".adres-collapse").fadeOut("400", function () {
    $(".name-collapse").fadeIn("400");
  });
});


$(".adres").mouseenter(function () {
  $(".name-collapse").fadeOut("400", function() {
    $(".adres-collapse").fadeIn("400");
  });
});