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

slideshow

var view = document.getElementsByClassName("lesson-section");
var arr = [...view];

arr.forEach(element => {

	element.addEventListener("click", ()=> {
		var info = element.children[1];
		info.classList.toggle("view-info");
	}); 
});

master

