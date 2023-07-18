var width = 500;
// Percentage Increment Animation
var PercentageID = $("#percent1"),
  start = 0,
  end = 500,
  durataion = 500;
animateValue(PercentageID, start, end, durataion);

function animateValue(id, start, end, duration) {
  var range = end - start,
    current = start,
    increment = end > start ? 1 : -1,
    stepTime = Math.abs(Math.floor(duration / range)),
    obj = $(id);

  var timer = setInterval(function () {
    current += increment;
    $(obj).text(current + "%");
    $("#bar1").css("width", current + "%");
    //obj.innerHTML = current;
    if (current == end) {
      clearInterval(timer);
    }
  }, stepTime);
}

// Fading Out Loadbar on Finised
setTimeout(function () {
  $(".pre-loader").fadeOut(300);
}, 500);
