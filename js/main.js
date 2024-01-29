/* @ default js*/
function yearNow(textlocation) {
  var data = new Date();
  var year;
  year = data.getFullYear();
  document.querySelector(textlocation).replaceWith(year);
}