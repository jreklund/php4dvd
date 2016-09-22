$(document).ready(function() {
	// Load parameters from cookie
	if(Cookies.get("search")) {
		$("#q").val(Cookies.get("search"));
	}
	if(Cookies.get("category")) {
		$("#category").val(Cookies.get("category"));
	}
	if(Cookies.get("sort")) {
		$("#sort").val(Cookies.get("sort"));
	}
	if(Cookies.get("page")) {
		$("#p").val(Cookies.get("page"));
	}
	if(Cookies.get("results")) {
		$("#n").val(Cookies.get("results"));
	}
	
	// Set parameters from url when the page is loaded
	var parameters = getQueryStringParameters();
	if(typeof parameters["search"] === 'string') {
		$("#q").val(parameters["search"]);
	}
	if(typeof parameters["category"] === 'string') {
		$("#category").val(parameters["category"]);
	}
	if(typeof parameters["sort"] === 'string') {
		$("#sort").val(parameters["sort"]);
	}
	if(typeof parameters["page"] === 'string') {
		$("#p").val(parameters["page"]);
	}
	if(typeof parameters["results"] === 'string') {
		$("#n").val(parameters["results"]);
	}
	
	// Search handling
	$("#q").keypress(function(event) {
		if ( event.which == 13 ) {
			search();
		}
	});

	// Search by default
	search();
	
	$(document).ajaxComplete(function() {
		// Get scroll position from url or position from cookie if set
		if(typeof parameters["scroll"] === 'string') {
		} else if(Cookies.get("scroll") !== null) {
			$(window).scrollTop( Cookies.get("scroll") );
		}

		// Set cookie to remember scroll position
		$(window).on("scroll", function() {
			Cookies.set("scroll", $(window).scrollTop() );
		});
	});
});