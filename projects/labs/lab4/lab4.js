function pop() {
	$.ajax({
		type:"GET", //Get request
		url:"lab4.json", // From this JSON file
		dataType: "json",

		success: function(data) {
			document.getElementById("site").style.display="none"; 

			var _name_ = "<ul class='grid'><li class='header'>Name</li>";
			var _artist_ = "<ul class='grid'><li class='header'>Artist</li>";
			var _album_ = "<ul class='grid'><li class='header'>Album Name</li>";
			var _art_ = "<ul class='grid'><li class='header'>Art</li>";
			var _date_ = "<ul class='grid'><li class='header'>Date</li>";
			var _genre_ = "<li class='header'>Genre</li>";
			
			$.each(data.dank_tunes, function(i, item) {

				_name_ += "<li>" + item.name + "</li>";
				_artist_ += "<li><a href=" + item.link + " >" + item.artist + "</li>";
				_album_ += "<li>" + item.album + "</li>";
				_date_ += "<li>" + item.date + "</li>";
				_genre_ += "<li>" + item.genre + "</li>";
				_art_ += "<li><img src=" + item.art + " alt='album art' height='128' width='128'></li>";
			});

			_name_ += "</ul>";
			_artist_ += "</ul>";
			_album_ += "</ul>";
			_art_ += "</ul>";
			_date_ += "</ul>";
			$("#name").html(_name_);
			$("#artist").html(_artist_);
			$("#album").html(_album_);
			$("#date").html(_date_);
			$("#genre").html(_genre_);
			$("#art").html(_art_);
		}});
}