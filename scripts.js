jQuery(document).ready(function(){
	console.log('loading scripts');
	jQuery('.fpc-container.fpc-marketing').addClass('container');
	var searchTxt = '<button type="submit" id="searchsubmit">SEARCH <i class="fa fa-caret-right"></i></button>';
	jQuery('#searchsubmit').replaceWith(searchTxt);
	var searchForum = '<button type="submit" id="bbp_search_submit">SEARCH <i class="fa fa-caret-right"></i></button>';
	jQuery('#bbp_search_submit').replaceWith(searchForum);
	var arrow = '&nbsp; <i class="fa fa-caret-right"></i>';
	jQuery(arrow).appendTo('button.submit');
	jQuery(arrow).appendTo('.partnerList .fpc-widget-front p > a');

});