<x-app-layout>
<div class="wrapper">
    <div class="square">
	<h1 class="l1">Extended</h1>
	<h2 class="l2">Mag</h2>
	<h2 class="l3">nify</h2>
	</div>
	<p style="margin-top:20px;">jQuery plugin for a nice magnify effect. Nifty! <a target="_blank" href="https://github.com/caleboleary/jQuery-Extended-Mag"> Get it on Github</a></p>
	<hr>
	<h1>Options:</h1>
	<h2>No options</h2>
	<p>I've floated this image left, so the magnification is going up to the right. Where the magnification goes depends on the CSS already present.</p>
	<pre>$('.mainImg').extm();</pre>
	<img class="mainImg" src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg"/>
	<div style="clear:both;"></div>
	<hr>

	<h2>Custom Zoom Holder</h2>
	<p>You can make the zoom show up in a specific predefined place.</p>
	<pre>$('.mainImg2').extm({
	zoomElement:$('.customHolder')
}); </pre>
	<img class="mainImg2" src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg"/>
	<div class="customWrap"><div class="customHolder"></div></div>
	<div style="clear:both;"></div>
	<hr>

	<h2>Custom Image Source</h2>
	<p>With no options, the image is just a full size version of what you're zooming. If you're showing a small version but have the URL for the large version, here's how you'd make it zoom to the large version. I've made it zoom to a totally different image for emphasis.</p>
	<pre>$('.mainImg3').extm({
	imageSrc:'http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/10/G407-EDIT.jpg'
});</pre>
	<img class="mainImg3" src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg"/>
	<div style="clear:both;"></div>
	<hr>

	<h2>Odd Image Sizes</h2>
	<p>This is just to show that the plugin works with any image size, not just perfect squares.</p>
	<pre>$('.mainImg4').extm();</pre>
	<img class="mainImg4" src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/G407.jpg"/>
	<div style="clear:both;"></div>
	<hr>

	<h2>Square Overlay</h2>
	<p>A nice overlay showing what you're currently zooming in on, can be targeted and styled with CSS.</p>
	<pre>$('.mainImg5').extm({
	squareOverlay:true
});</pre>
	<img class="mainImg5" src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg"/>
	<div style="clear:both;"></div>
	<hr>

	<h2>Positioned to Right</h2>
	<p>Absolutely position the zoom box exactly to the right of the image you're zooming. Doesn't play well with custom zoom holder. Using position right also opens up 'rightPad', which will allow you to put distance between the image and the zoomed element. In the example below we've added 20px, without this, they would touch eachother.</p>
	<pre>$('.mainImg6').extm({
	position:'right',
	rightPad:20
});</pre>
	<img class="mainImg6" src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg"/>
	<div style="clear:both;"></div>
	<hr>

	<h2>Position Overlay</h2>
	<p>Absolutely position the zoom box over the zoomed image.</p>
	<pre>$('.mainImg7').extm({
	position:'overlay'
});</pre>
	<img class="mainImg7" src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg"/>
	<div style="clear:both;"></div>
	<hr>

	<h2>Custom Zoom Size</h2>
	<p>Give the zoomed image an absolute width (with auto height)</p>
	<pre>$('.mainImg11').extm({
	zoomSize:1000,
	position:'right'
});</pre>
	<img class="mainImg11" src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg"/>
	<div style="clear:both;"></div>
	<hr>

	<h2>Custom Zoom Level</h2>
	<p>Give the zoomed image a size based on the originals (double, triple, etc)</p>
	<pre>$('.mainImg12').extm({
	position:'overlay',
	zoomLevel:3
});</pre>
	<img class="mainImg12" src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg"/>
	<div style="clear:both;"></div>
	<hr>

	<h2>Lazy Loading</h2>
	<p>Instead of initializing on page load, it will initialize on first mouseenter</p>
	<pre>$('.mainImg8').extm({
	lazy:true,
	imageSrc:'http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg',
	position:'right'
});</pre>
	<img class="mainImg8" src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT-300x300.jpg"/>
	<div style="clear:both;"></div>
	<hr>

	<h2>Destroy</h2>
	<p>Destroy the zoom</p>
	<pre>$('.mainImg9').extm({
	imageSrc:'http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg',
	position:'overlay'
});

$('.destroyButton').click(function(){
	$('.mainImg9').extmDestroy();
});</pre>
	<img class="mainImg9" src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT-300x300.jpg"/>
	<div style="clear:both;"></div>
	<button class="destroyButton" >Destroyyyy!!!</button>
	<hr>

	<h2>Update Image</h2>
	<p>Update the zoomed image without needing to destroy and reinit (works well with identically sized images)</p>
	<pre>
$(document).ready(function(){	
	$('.thumb').on('click', function(){
		var newImage = $(this).find('img').attr('src');
		$('.mainImg10').attr('src', newImage);
		<span class="important">$('.mainImg10').extmImageUpdate(newImage);</span>
	});

	$('.mainImg10').extm({
		position:'right'
	});
});</pre>
	<img src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg" class="mainImg10">
<ul class="thumbs">
	<li class="thumb"><img src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/11/CT9454-EDIT.jpg"></li>
	<li class="thumb"><img src="http://vektier.com/astrobilliards/wp/wp-content/uploads/2015/10/G407-EDIT.jpg"></li>
</ul>

<br><div style="clear:both;"></div>
	<hr>

</div>
<script  src="{{ asset("assets/js/jquery.min.js") }}"></script>
<script  src="{{ asset("assets/js/extm.min.js") }}"></script>
<script  src="{{ asset("assets/js/my.js") }}"></script>
</x-app-layout>