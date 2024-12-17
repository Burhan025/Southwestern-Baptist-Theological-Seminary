 // Added view event button on events

jQuery('.event-cln-col .owl-stage .owl-item').each(function(){
    var eventLink = jQuery('.mec-event-carousel-title a', this).attr('href');
    jQuery(".mec-event-article", this).append(`<a class="view-event-btn" href="${eventLink}">View Event </a>`);
});

// jQuery(document).on('click', '.blog-tabs .pp-post-filters .pp-filter-active', function(){
//     console.log(jQuery(this).attr('data-term'));
// });

jQuery(document).ready(function() {
	if(jQuery('#authorRename .fl-rich-text p').length > 0){
		var authorRename = jQuery('#authorRename .fl-rich-text p').text();
		if(authorRename != ''){jQuery('.fl-post-info-author').html('<b>'+authorRename+'<b/>');}
	}
	jQuery('.degre-main-display .pp-post-filters li:nth-of-type(2)').addClass('pp-filter-active');
	
    jQuery('[data-location-id]').click(function(e) {
        e.preventDefault();
        filterServices(this);
        return false;
    });
    jQuery('.clear-filters').click(function () {
        jQuery('.pp-content-post-grid').click();
        jQuery('.location-filter[data-location-id=all-degrees]').click();
    });
    jQuery('.location-filter, .pp-post-filter').click(function() {
        jQuery('.no-degree-for-school').hide();
        setTimeout(function(){
            noDegreeCheck();
        }, 250);
    });
    function noDegreeCheck() {
        if (jQuery('.tab-pane .degree-tile:visible').length === 0){
            jQuery('.no-degree-for-school').show();
        }
    }
    var activeFilters = [];
    var filterServices = function(elm){
        var theFilter = jQuery(elm).data('location-id');
        if(theFilter !== "all-degrees")
        {
            if(activeFilters.indexOf(theFilter) !== -1){
//                 if(activeFilters.includes(theFilter)){
                var filter_index = activeFilters.indexOf(theFilter);
                activeFilters.splice(filter_index,1);
            }
            else{
                activeFilters.push(theFilter);
            }
            if(activeFilters.length > 0){
                jQuery('[data-location-id="all-degrees"]').removeClass("active");
            }
            else{
                jQuery('[data-location-id="all-degrees"]').addClass("active");
            }
            jQuery(elm).toggleClass('active');
        }
        else {
            activeFilters = [];
            jQuery('[data-location-id]').removeClass('active');
            jQuery(elm).addClass('active');
        }
        updateDisplay();
    };
    var updateDisplay = function(){
        // console.log(activeFilters.length);
        if(activeFilters.length === 0){
            jQuery('.pp-content-post').show();
//             var filId=jQuery('.pp-filter-active').attr('data-filter');
// 			console.log(filId);
			var termId = jQuery('.pp-filter-active').attr('data-term');
				jQuery(' .blog-tabs .pp-content-posts .pp-content-post-grid .pp-content-post').each(function(){
					if(jQuery(this).hasClass('degree_type-'+termId) ){
						   jQuery(this).show();	
						}
				})
        } else{
            jQuery('.pp-content-post').hide();
            activeFilters.forEach(function (val) {
// 				console.log(val);
				var termId = jQuery('.pp-filter-active').attr('data-term');
				jQuery(' .blog-tabs .pp-content-posts .pp-content-post-grid .pp-content-post').each(function(){
					if(jQuery(this).hasClass('programs-'+val) ){
						if(jQuery(this).hasClass('degree_type-'+termId)){
						   jQuery(this).show();	
						}
					}
				});
                jQuery('.programs-'+val).show();
            });
            jQuery(this).addClass('active');
        }
    };

});

// if(jQuery('.faq_listing').length > 0){
    jQuery(document).on('click', '.faq_listing .card-header', function(e){
        e.preventDefault();
        var obj = jQuery(this).closest('.accordion');
        jQuery('.collapse', obj).slideToggle();
        jQuery(obj).toggleClass('active');
    });
// }
document.addEventListener("DOMContentLoaded", function(){
    //....
    let searchParams = new URLSearchParams(window.location.search);
    let param = searchParams.get('type');
    if(searchParams.has('type')){
        jQuery('.pp-post-filters li[data-term="'+param+'"]').trigger('click');
    }
});

jQuery(document).on('click', '.owl-next',function(){
	setTimeout(function(){
		jQuery('.owl-item.active .pp-content-post').hover();
		console.log('clicked')},
		1000)});


/* Beaver Builder: Automated Clickable Columns */

jQuery(document).ready(function( $ ) {
	$('body:not(.fl-builder-edit)').find('.column-click a').closest('.fl-col-content').click(function(){
		var link = $(this).find('a').attr('href');
		$(location).attr('href', link);
	});
	
	/* This script using for hide blog inline img */
var featuredImgSrc = jQuery('#news-content .fl-row-content-wrap .fl-photo .fl-photo-content img').attr('src');
var firstImgSrc = jQuery('#news-content .fl-row-content-wrap .fl-row-content .fl-col-group:nth-child(2) img:first-of-type').first().attr('src');
(featuredImgSrc === firstImgSrc ? jQuery('#news-content .fl-row-content-wrap .fl-row-content .fl-col-group:nth-child(2) img:first-of-type').first().remove() : jQuery('#news-content .fl-row-content-wrap .fl-row-content .fl-col-group:nth-child(2) img:first-of-type').first().show());
jQuery('#news-content .fl-row-content-wrap .fl-row-content .fl-col-group:nth-child(2) img:first-of-type').show();
});