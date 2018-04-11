<!-- PHP header -->
<?php
$pageTitle = "Wafffles";

include("../../../../inc/header.php"); ?>
<!-- /PHP header -->


<style>
.main-photo {
  display: flex;
  flex-direction: column;
  padding-top: 120px;
  height: 400px;
  background: linear-gradient(#272a37, transparent 30%), linear-gradient(0deg, #fff, transparent), #272a37 url(../img/main__photo.jpg);
  background-size: cover;
  background-position: center;
}
.slider {
  width: 50%;
  margin: 0px auto;
}

.slick-slide img {
  width: 100%;
}

@media screen and (max-width: 680px) {
  .slider {
    width: 100%;
  }
}

.slick-prev:before,
.slick-next:before {
  color: black;
}


.slick-slide {
  transition: all ease-in-out .3s;
  opacity: .2;
}

.slick-active {
  opacity: .5;
}

.slick-current {
  opacity: 1;
}
</style>
<div class="content">
	<div class="articleHead">
		<div class="main-photo">
				<div class="main-photo__air"></div>
				<h2 class="main-photo__title" style="font-size: 3em;" >The Worst Social Media Pick Up Lines</h2>
				<h3 class="main-photo__subtitle">OPINION</h3>
		</div>
<div class="articleActual">
	<p>There are so many reasons to hate internet. Bullies, haters, stalkers...cheesy couples that celebrate their first week together and call it anniversary. Ugh, internet world is insane.<br><br>

		Yet, what really annoys me is the incomprehensibly bizarre methods of online dating.<br><br>

		Instead of normal human behaviour, people overcomplicate strategies and produce the worst pick up lines in human history. I've had unvoluntary experience in this ruthless field.The days before tinder, I received suspicious messages on facebook and vk. In this article, I'm sharing the funniest, scariest and most disgusting messages in my messages folder.<br><br>

		These are the first messages unknown users sent. Yep, they were all men.<br><br>

		5 messages that made me laugh (starting with a classic one):
		<br><br></p>


  <section class="first_one-time slider">
    <div>
      <img src="../img/1.jpg">
    </div>
    <div>
      <img src="../img/2.jpg">
    </div>
    <div>
      <img src="../img/3.jpg">
    </div>
    <div>
      <img src="../img/4.jpg">
    </div>
    <div>
      <img src="../img/5.jpg">
    </div>
  </section>

  <p>
  5 messages that made me cringe: <br><br>
  </p>

  <section class="second_one-time slider">
    <div>
      <img src="../img/6.jpg">
    </div>
    <div>
      <img src="../img/7.jpg">
    </div>
    <div>
      <img src="../img/8.jpg">
    </div>
    <div>
      <img src="../img/9.jpg">
    </div>
    <div>
      <img src="../img/10.jpg">
    </div>
  </section>

  <p>
  Disgusting messages: <br><br>
  </p>

  <section class="third_one-time slider">
    <div>
      <img src="../img/11.jpg">
    </div>
    <div>
      <img src="../img/12.jpg">
    </div>
    <div>
      <img src="../img/13.jpg">
    </div>
    <div>
      <img src="../img/14.jpg">
    </div>
    <div>
      <img src="../img/15.jpg">
    </div>
  </section>


    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://wafffles.com/js/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    $(".first_one-time").slick({
      dots: true,
      slidesToShow: 1,
      arrows: true
      });
    $(".second_one-time").slick({
      dots: true,
      slidesToShow: 1,
      arrows: true
      });
    $(".third_one-time").slick({
      dots: true,
      slidesToShow: 1,
      arrows: true
      });
    </script>
</div>


<!-- PHP hot -->
 <?php include("../../../../inc/hot.php"); ?>
<!-- /PHP hot -->


<!-- PHP footer -->
<?php include("../../../../inc/footer.php"); ?>
<!-- /PHP footer -->
