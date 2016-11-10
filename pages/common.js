$(document).ready(function() {

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "post.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			$('#myModal').modal('show');
			$("#form").trigger("reset");
			function main() {
				window.location.href = "http://galantservice.local/";﻿
			}
			setTimeout(main, 5000);
		});
		return false;
	});
});