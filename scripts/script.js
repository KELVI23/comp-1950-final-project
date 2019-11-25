(function() {

	var hamburger = {
		navToggle: document.querySelector('.nav-toggle'),
		nav: document.querySelector('.nav'),

		doToggle: function(e) {
			e.preventDefault();
			this.navToggle.classList.toggle('expanded');
			this.nav.classList.toggle('expanded');
		}
	};

	hamburger.navToggle.addEventListener('click', function(e) { hamburger.doToggle(e); });

}());

var view = document.getElementsByTagName("h2");
var arr = [...view];

arr.forEach(element => {
	element.addEventListener("click", ()=> {

		element.classList.toggle("toggle-lesson");
	}); 
});

