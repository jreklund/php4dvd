$(document).ready(function(){
	// Open a confirmation
	var modalUrl = '';
	$('#confirmation').on('show.bs.modal', function (e) {
		var button	= $(e.relatedTarget),
			type	= button.data('type'),
			title	= button.parent().data('title'),
			id		= button.parent().data('id'),
			modal	= $(this);
			
		// Populate modal with text
		modal.find('.modal-title').text(title);
		modal.find('.modal-body').html(modal.find('.text-' + type).html());
		
		// Generate url
		if(type === 'logout') {
			modalUrl = './?logout';
		} else {
			modalUrl = './?go=' + type;
			if(id) {
				modalUrl += '&id=' + id;
			}
		}
	});
	// Save confirmation
	$('#confirmation .modal-save').on('click', function(e) {
		$.ajax({
			url: modalUrl,
			dataType: "html",
			success: function(data) {
				if(data) {
					window.location.replace(data);
				} else {
					window.location.replace(window.location.origin+window.location.pathname);
				}
			}
		});
	});
});
