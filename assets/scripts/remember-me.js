( function() {

	var checkbox = document.getElementById( 'rememberme' );
	var audio    = document.getElementById( 'remembermeaudio' );

	checkbox.addEventListener( 'change', function() {
		if ( this.checked ) {
			audio.play();
		} else {
			audio.pause();
			audio.currentTime = 0
		}
	});

} )();
