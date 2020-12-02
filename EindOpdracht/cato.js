function analyzeValue(myValue) {
  switch (myValue) {
    case "1":
      $(".news").fadeIn();
      break;
    case "2":
      $(".news").fadeOut(function () {
        $(".politiek").fadeIn();
      });
      break;
    case "3":
      $(".news").fadeOut(function () {
        $(".verzamelaars").fadeIn();
      });
      break;
    case "4":
      $(".news").fadeOut(function () {
        $(".next-gen").fadeIn();
      });
      break;
    case "5":
      $(".news").fadeOut(function () {
        $(".streaming").fadeIn();
      });
      break;
  }
}
