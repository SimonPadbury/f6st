/*jslint browser: true*/
/*global $, jQuery*/

$(document).foundation();

(function ($) {

	"use strict";

	$(document).ready(function () {

    // Add Foundation 6 classes to widget lists
    //$('.site-sidebar ul, .site-footer ul').addClass('menu vertical');
    //$('.site-sidebar ul ul, .site-footer ul ul').addClass('nested');
    
		// Comments
		$(".commentlist li").addClass("card");
		$(".comment-reply-link").addClass("btn btn-secondary");

		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('button');

		// You can put your own code in here

	});

}(jQuery));