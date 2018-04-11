<!-- PHP header -->
<?php
$pageTitle = "Wafffles";

include("../../../inc/header.php"); ?>
<!-- /PHP header -->



<div class="content">
	<div class="articleHead">
		<!--
		<div class="articleHeadText">
		<h1>
		graduation blues and expectations
	</h1>
	<h3>
	Opinion
</h3>
</div>
-->
<img src="img/1-1.jpg" class="wideImgActual">
</div>

<div class="articleActual">
	<p>There are so many reasons to hate internet. Bullies, haters, stalkers...cheesy couples that celebrate their first week together and call it anniversary. Ugh, internet world is insane.<br><br>

		Yet, what really annoys me is the incomprehensibly bizarre methods of online dating.<br><br>

		Instead of normal human behaviour, people overcomplicate strategies and produce the worst pick up lines in human history. I've had unvoluntary experience in this ruthless field.The days before tinder, I received suspicious messages on facebook and vk. In this article, I'm sharing the funniest, scariest and most disgusting messages in my messages folder.<br><br>

		These are the first messages unknown users sent. Yep, they were all men.<br><br>

		5 messages that made me laugh (starting with a classic one):
		<br><br></p>

		<div class="forma slider" id="div1">
			<div class="mySlides fade">
			  <div class="numbertext">1 / 5</div>
			  <img src="img/1.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">2 / 5</div>
			  <img src="img/2.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">3 / 5</div>
			  <img src="img/3.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">4 / 5</div>
			  <img src="img/4.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">5 / 5</div>
			  <img src="img/5.png" style="width:100%">
			</div>

			<a class="prev" onclick="plusDivs(this,-1)">&#10094;</a>
			<a class="next" onclick="plusDivs(this,1)">&#10095;</a>
		</div>
		<br>
	<p>
	5 messages that made me cringe: <br><br>
	</p>

		<div class="forma slider" id="div2">
			<div class="mySlides fade">
			  <div class="numbertext">1 / 5</div>
			  <img src="img/6.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">2 / 5</div>
			  <img src="img/7.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">3 / 5</div>
			  <img src="img/8.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">4 / 5</div>
			  <img src="img/9.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">5 / 5</div>
			  <img src="img/10.png" style="width:100%">
			</div>

			<a class="prev" onclick="plusDivs(this,-1)">&#10094;</a>
			<a class="next" onclick="plusDivs(this,1)">&#10095;</a>
		</div>
	  <br>
	<p>
  Disgusting messages: <br><br>
  </p>
		<div class="forma slider" id="div3">
			<div class="mySlides fade">
			  <div class="numbertext">1 / 5</div>
			  <img src="img/11.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">2 / 5</div>
			  <img src="img/12.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">3 / 5</div>
			  <img src="img/13.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">4 / 5</div>
			  <img src="img/14.png" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">5 / 5</div>
			  <img src="img/15.png" style="width:100%">
			</div>

			<a class="prev" onclick="plusDivs(this,-1)">&#10094;</a>
			<a class="next" onclick="plusDivs(this,1)">&#10095;</a>
		</div>
    <br>
		<script>
		var sliderObjects = [];
		createSliderObjects();

		function plusDivs(obj, n) {
		  var parentDiv = $(obj).parent();
		  var matchedDiv;
		  $.each(sliderObjects, function(i, item) {
		    if ($(parentDiv[0]).attr('id') == $(item).attr('id')) {
		      matchedDiv = item;
		      return false;
		    }
		  });
		  matchedDiv.slideIndex=matchedDiv.slideIndex+n;
		  showDivs(matchedDiv, matchedDiv.slideIndex);
		}

		function createSliderObjects() {
		  var sliderDivs = $('.slider');
		  $.each(sliderDivs, function(i, item) {
		    var obj = {};
		    obj.id = $(item).attr('id');
		    obj.divContent = item;
		    obj.slideIndex = 1;
		    obj.slideContents = $(item).find('.mySlides');
		    showDivs(obj, 1);
		    sliderObjects.push(obj);
		  });
		}

		function showDivs(divObject, n) {
		  debugger;
		  var i;
		  if (n > divObject.slideContents.length) {
		    divObject.slideIndex = 1
		  }
		  if (n < 1) {
		    divObject.slideIndex = divObject.slideContents.length
		  }
		  for (i = 0; i < divObject.slideContents.length; i++) {
		    divObject.slideContents[i].style.display = "none";
		  }
		  divObject.slideContents[divObject.slideIndex - 1].style.display = "block";
		}
		</script>

</div>

<!-- PHP hot -->
	<?php include("../../../inc/hot.php"); ?>
<!-- /PHP hot -->


<!-- PHP footer -->
<?php include("../../../inc/footer.php"); ?>
<!-- /PHP footer -->
