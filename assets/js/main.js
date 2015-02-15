//collapsing accordions
$(".accordion-content").hide();
$(".accordion-title").click(function () {
    $accordions = $(".accordion-content");
    $accordions.not($(this).next()).hide("fast");
    $(this).next().toggle("fast");
    if ($(this).hasClass("closed")) {
        $(this).removeClass("closed").addClass("open");
    } else {
        $(this).removeClass("open").addClass("closed");
    }
});

//lightbox img gallery
var $overlay = $("<div id='overlay'></div>");
var $image = $("<img>");
var $caption = $("<p></p>");

$overlay.append($image);
$overlay.append($caption);
$("body").append($overlay);

$("#gallery a").click(function (event) {
    //This prevents the page from going to a link's href
    event.preventDefault();

    //Here we are storing the anchor's href in a variable called href
    var imageLocation = $(this).attr("href");
    //This sets the new src of a new image to the one above
    $image.attr("src", imageLocation);

    //This shows the overlay
    $overlay.show();

    //This finds the alt text of any images inside the anchor tag and stores them as a variable by the name of caption text
    var $captionText = $(this).children("img").attr("alt");
    //This puts the value of captionText inside of the p tags known as caption
    $caption.text($captionText);
    //This sets the color of the text above as white
    $caption.css("color", "white");

});

//This hides the overlay div when it's clicked
$overlay.click(function () {
    $(this).hide();
});
