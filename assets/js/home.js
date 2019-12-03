//------------------------------------------Topbar resize @oci_tz----------------------------------------------
// When the user scrolls down 50px from the top, resize the topbar's height
const tb = document.getElementById('tb');

window.addEventListener('scroll', function () {
	if (window.pageYOffset >= 72) {
		tb.classList.add("small");
	} else {
		tb.classList.remove("small");
	}
});



//----------------------------left slide menu left sidebar on topbar @oci_tz-----------------------------------
const
	bars = document.querySelector('.bars'),
	lb = document.querySelector('.hidelb');

bars.addEventListener('click', function navMenu() {
	// tb.classList.toggle('hidelb');
	// Tedious toggle
	if (lb.classList.contains('hidelb')) {
		lb.classList.remove('hidelb');
	} else {
		lb.classList.add('hidelb');
	}
});
//---------------------------------left_toggle menu right topbar @oci_tz----------------------------------------
const
	tbsetting = document.getElementsByClassName('more'),
	ellips = document.querySelector('.morebtn'),
	tbmore = document.querySelector('.more_content'),
	morevert = document.getElementById("morevert");

ellips.addEventListener('click', function navMore(e) {
	tbmore.classList.toggle('hide');
});

//manipulation css style
morevert.addEventListener('click', function () {
	if (morevert.getAttribute("data-text-swap") == morevert.innerHTML) {
		morevert.innerHTML = morevert.getAttribute("data-text-original");
		ellips.style.color = 'rgba(0, 0, 0, 0.5)';
	} else {
		morevert.setAttribute("data-text-original", morevert.innerHTML);
		morevert.innerHTML = morevert.getAttribute("data-text-swap");
		ellips.style.color = 'rgba(255, 99, 71, 0.973)';
	}
}, false);

//manipulation hover
[ellips, bars].forEach(e => {
	e.addEventListener('mouseenter', function () {
		e.style.color = 'rgba(255, 99, 71, 0.973)';
	}, false);
	e.addEventListener('mouseleave', function () {
		e.style.color = 'rgba(0, 0, 0, 0.5)';
	}, false);
});


//--------------------------------- NONE ----------------------------------------
