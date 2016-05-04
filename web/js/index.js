jQuery(document).ready(function($) {
	// 头条中的tab切换功能
	var tab = $(".nav2 ul li");
	var tabLen = tab.length;
	var headLine = $(".headline");

	$(tab).each(function(index, el) {
		$(this).on('click', function(event) {
			for(var i=0; i<headLine.length; i++){
				$(headLine[i]).addClass('hide');
			}
			$(headLine[index]).removeClass('hide');
		});
	});
});