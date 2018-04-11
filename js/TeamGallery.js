
//Problem: user when clicking on image goes to a dead end
//Solution: create an overlaw with the larg image - lightbox

var $overlay = $('<div id="overlay"></div>');
var $splash = $('<div id="splash"></div>');
var $image = $("<img>");
var $caption = $("<p></p>");
var $sonProfile = $("#sonProfile");
var $armanProfile = $("#armanProfile");
var $liubaProfile = $("#liubaProfile");
var $jamProfile = $("#jamProfile");
var $annaProfile = $("#annaProfile");


// A caption to overlay

// Add overlay
$("#teamDiv").append($overlay);

//capture the click on a link to an image
$("#members a").click(function(event){
  event.preventDefault();
  var imageLocation = $(this).attr("href");
  // Update overlay with the image linked in the link
  $image.attr("src", imageLocation);

  $splash.append($image);

  var captionText = $(this).children("img").attr("alt");
  $caption.text(captionText);

  $splash.append($caption);


  if ($captionText = "Son") {
    getMember(1);
  } else if ($captionText = "Arman") {
    getMember(2);
  } else if ($captionText = "Liuba") {
    getMember(3);
  } else if ($captionText = "Jamie") {
    getMember(4);
  } else if ($captionText = "Anna") {
    getMember(5);
  }

  function getMember(index) {
    // $splash.remove($sonProfile);
    // $splash.remove($armanProfile);
    // $splash.remove($liubaProfile);
    // $splash.remove($jamProfile);
    // $splash.remove($annaProfile);
    if (index = 1) {
      $splash.append($sonProfile);
    } else if (index = 2) {
      $splash.append($armanProfile);
    } else if (index = 3) {
      $splash.append($liubaProfile);
    } else if (index = 4) {
      $splash.append($jamProfile);
    } else if (index = 5) {
      $splash.append($annaProfile);
    }
  }

  $overlay.append($splash);

  //show the overlay
  $overlay.show();

  //Get child's alt attribute and set caption

});



//When overlay is clicked
$overlay.click(function() {
  $overlay.hide();
})
//Hide the overlay
