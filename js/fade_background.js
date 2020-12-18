var nImages = 2;
var currImage = 0;

function changePic(){
    var top = $("#cover-top");
    currImage == nImages ? currImage = 0 : currImage++;
    top.hide().addClass("img0"+currImage).fadeIn(3500, function(){
        $("#cover-bottom").attr("class", "").attr("class", top.attr("class"));
        top.attr("class", "");
    });
}
setInterval(changePic, 6500);