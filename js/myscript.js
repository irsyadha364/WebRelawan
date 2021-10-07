let d = new Date();
// document.body.innerHTML = "<h1>Time right now is: " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds() + "</h1>";

$("#time").css("color", "red");
$("#time").css("text-align", "center");
$("#time").text("Time right now is = " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds());
