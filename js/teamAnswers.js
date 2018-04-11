
// show popup when you click on the link
$('.show-popup').click(function(event){
$(this).next().show(); //display your popup
});

// hides the popup if user clicks anywhere outside the container
$('.overlay-bg').click(function(){
    $('.overlay-bg').hide();
})
// prevents the overlay from closing if user clicks inside the popup overlay
$('.overlay-content').click(function(){
    return false;
});
