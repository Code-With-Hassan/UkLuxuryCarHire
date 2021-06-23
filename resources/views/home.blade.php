<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
</head>
<body>
<div class="owl-carousel owl-theme">
    <img class="owl-lazy" data-src="https://placehold.it/350x450&text=1" data-src-retina="https://placehold.it/350x250&text=1-retina" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x650&text=2" data-src-retina="https://placehold.it/350x250&text=2-retina" alt="">
  <picture>
      <source class="owl-lazy" media="(min-width: 650px)" data-srcset="https://placehold.it/350x250&text=3-large">
      <source class="owl-lazy" media="(min-width: 350px)" data-srcset="https://placehold.it/350x250&text=3-medium">
      <img class="owl-lazy" data-src="https://placehold.it/350x250&text=3-fallback" alt="">
  </picture>
    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=4" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=5" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=6" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=7" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=8" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x400&text=9" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x400&text=10" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x450&text=11" alt="">
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    items:4,
    lazyLoad:true,
    loop:true,
    margin:10
		});
</script>
</body>
</html>