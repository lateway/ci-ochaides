//----------------------------left slide menu left sidebar on topbar @oci_tz-----------------------------------
const bars = document.getElementsByClassName("bars");
//---------------------------------left_toggle menu right topbar @oci_tz----------------------------------------
const tbsetting = document.getElementsByClassName('more');
const ellips = document.querySelector('.morebtn');
const tbmore = document.querySelector('.more_content');
const morevert = document.getElementById("morevert");

ellips.addEventListener('click', function navMore(e) {
	tbmore.classList.toggle('hide');
});
morevert.addEventListener('click', function () {
	if (morevert.getAttribute("data-text-swap") == morevert.innerHTML) {
		morevert.innerHTML = morevert.getAttribute("data-text-original");
		ellips.style.color = 'white';
	} else {
		morevert.setAttribute("data-text-original", morevert.innerHTML);
		morevert.innerHTML = morevert.getAttribute("data-text-swap");
		ellips.style.color = 'red';
	}
}, false);

//--------------------------------- NONE ----------------------------------------
