$(document).ready(function(){
  $(".article-loop").slice(0,3).show();
  $(".load-more-container").click(function(e){
    e.preventDefault();
    $(".article-loop:hidden").slice(0,3).fadeIn("slow");

    if($(".article-loop:hidden").length == 0){
       $(".load-more-container").fadeOut("slow");
      }
  });
})


// https://codepen.io/vipch/pen/Ndadeg?depth=everything&order=popularity&page=3&q=load+more&show_forks=false
