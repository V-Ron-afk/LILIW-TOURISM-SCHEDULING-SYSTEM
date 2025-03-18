var btn_save = $(".save-profile"),
	btn_edit = $(".edit-profile"),
	img_object = $(".img-object"),
	overlay = $(".media-overlay"),
	media_input = $("#media-input");

btn_save.hide(0);
overlay.hide(0);

btn_edit.on("click", function() {
	$(this).hide(0);
	overlay.fadeIn(300);
	btn_save.fadeIn(300);
});
btn_save.on("click", function() {
	$(this).hide(0);
	overlay.fadeOut(300);
	btn_edit.fadeIn(300);
});

media_input.change(function() {
	if (this.files && this.files[0]) {
		var reader = new FileReader();
		
		reader.onload = function(e) {
			img_object.attr("src", e.target.result);
		};
		
		reader.readAsDataURL(this.files[0]);
	}
});
