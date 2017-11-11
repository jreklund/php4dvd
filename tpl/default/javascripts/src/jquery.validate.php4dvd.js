/* Validate username */
jQuery.validator.addMethod("username", function(value, element) {
	return this.optional( element )	|| /^(?!\.)[a-z0-9.]{5,50}(?<!\.)$/iu.test( value );
}, "Please enter a valid username. (A–Z, 0–9, .)<br/>Between 5-50 characters.");
/* Change error placement */
jQuery.validator.setDefaults({
	errorClass: "has-error",
	errorPlacement: function(e, r) {
		r.closest("div").before(e), r.parents(".has-feedback").addClass("has-error")
	},
	success: function(e) {
		e.parent(".has-feedback").removeClass("has-error"), e.remove()
	}
});
