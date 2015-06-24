<div class="container">
	<div class="row">
		<div class="col-md-2 col-md-offset-10">
			<a href="https://twitter.com/ideasbri" target="_blank">
				<img src="{{asset('librerias/img/twitter.png')}}"></a>
			<a href="https://www.facebook.com/ideasbri" target="_blank">
				<img src="{{asset('librerias/img/facebook.png')}}"></a>
			<a href="http://www.youtube.com/user/ideasbri" target="_blank">
				<img src="{{asset('librerias/img/youtube.png')}}"></a>
		</div>
	</div>
</div>
	
<!--Menú-->
<div class="container">
	<div class="main clearfix">
		<nav id="menu" class="nav">					
			<ul>
				<li>
					<a href="{{url('/')}}">
						<span class="icon">
							<i aria-hidden="true" class="icon-tag"></i>
						</span>
						<span>Principal</span>
					</a>
				</li>

				<li>
					<a href="{{url('moda')}}">
						<span class="icon"> 
							<i aria-hidden="true" class="icon-t-shirt"></i>
						</span>
						<span>Moda</span>
					</a>
				</li>

				<li>
					<a href="{{url('hogar')}}">
						<span class="icon">
							<i aria-hidden="true" class="icon-home"></i>
						</span>
						<span>Hogar</span>
					</a>
				</li>

				<li>
					<a href="{{ url('comida') }}">
						<span class="icon">
							<i aria-hidden="true" class="icon-cup"></i>
						</span>
						<span>Comida</span>
					</a>
				</li>

				<li>
					<a href="{{ url('salud') }}">
						<span class="icon">
							<i aria-hidden="true" class="icon-aid"></i>
						</span>
						<span>Salud</span>
					</a>
				</li>

				<li>
					<a href="{{ url('tecnologia') }}">
						<span class="icon">
							<i aria-hidden="true" class="icon-mobile"></i>
						</span>
						<span>Tecnología</span>
					</a>
				</li>
			</ul>
		</nav>
		<br><br><br>
	</div>
</div>



<script>

//  The function to change the class
var changeClass = function (r,className1,className2) {

	var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");

	if( regex.test(r.className) ) {
		r.className = r.className.replace(regex,' '+className2+' ');
    }
    else{
		r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
    }
    return r.className;
};	

	//  Creating our button in JS for smaller screens
var menuElements = document.getElementById('menu');

menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

	//  Toggle the class on click to show / hide the menu
document.getElementById('menutoggle').onclick = function() {
	changeClass(this, 'navtoogle active', 'navtoogle');
}

	// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
document.onclick = function(e) {

	var mobileButton = document.getElementById('menutoggle'),

		buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

		if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
		changeClass(mobileButton, 'navtoogle active', 'navtoogle');
	}
}

</script>