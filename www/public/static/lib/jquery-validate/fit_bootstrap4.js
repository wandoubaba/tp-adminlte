$(function() {
	$.validator.setDefaults({
		errorElement: "em",
		errorPlacement: function ( error, element ) {
			// Add the `text-danger` class to the error element
			error.addClass( "text-danger" );

			// Add `has-feedback` class to the parent div.form-group
			// in order to add icons to inputs
			// element.parents( ".input-group" ).find(".form-control").addClass( "has-feedback" );

			if ( element.prop( "type" ) === "checkbox" ) {
				error.insertAfter( element.parent( "label" ) );
			} else {
				// alert(element.parents(".input-group").length);
				if (element.parents(".input-group").length > 0) {
					error.insertBefore( element.parents( ".input-group" ) );
				} else {
					error.insertAfter(element);
				}
				// alert(element.attr("id"));
				// error.insertBefore( element.parents( ".input-group,.form-group" ) );
			}

			// Add the span element, if doesn't exists, and apply the icon classes to it.
			if ( !element.next( "span" )[ 0 ] ) {
				$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
			}
		},
		success: function ( label, element ) {
			// Add the span element, if doesn't exists, and apply the icon classes to it.
			if ( !$( element ).next( "span" )[ 0 ] ) {
				$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
			}
		},
		highlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".input-group,.form-group" ).find(".form-control").addClass( "is-invalid" ).removeClass( "is-valid" );
			$( element ).parents( ".input-group,.form-group" ).addClass( "text-danger" ).removeClass( "text-success" );
			$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
		},
		unhighlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".input-group,.form-group" ).find(".form-control").addClass( "is-valid" ).removeClass( "is-invalid" );
			$( element ).parents( ".input-group,.form-group" ).addClass( "text-success" ).removeClass( "text-danger" );
			$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
		}
	});
});