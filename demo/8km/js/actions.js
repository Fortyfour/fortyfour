function handlePopupClick() {
	window.open(this.href,'','width=600, height=600, location=no, toolbar=no, menubar=no, scrollbars=yes, resizable=yes');
	return false;
};

window.onload = function() {
	var lnks = document.getElementsByTagName('A');
	for(var i = 0; i < lnks.length; i++){
		if(/\bpopup\b/.test(lnks[i].className)){
			lnks[i].onclick = handlePopupClick;
		};
	};
};

var options = { path: '/' };

function setLocale($locale){
	$.cookie('locale', $locale, options);
	document.location.href = '/';
}