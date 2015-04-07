<div id="menuButton" class="top-item"><img class="top-icon" src="img/menu.png" /></div>
<div id="newsButton" class="top-item"><img class="top-icon" src="img/news.png" /></div>
<div id="messageButton" class="top-item"><img class="top-icon" src="img/mail.png" /></div>
<div id="notificationButton" class="top-item"><img class="top-icon" src="img/notification.png" /></div>

<div id="menu" class="menu">
	<img src="img/logo.png" width="120" />
	<img src="img/logo-menu.png" class="menu-logo"/>
	<div class="close-menu" id="close"><img src="img/close.png"></div>
	<img src="img/user.png" class="avatar" />
	<div class="menu-item">GRUPOS</div>
	<div class="menu-item">CALENDARIO</div>
	<div class="menu-item">VECINOS</div>
</div>
<script>
	$("#menuButton, #close").click(function(){
		$("#menu").toggle( "slide", "{direction: right}", 300 );
		console.log("ok");
	});
	
	$("#newsButton").click(function(){
		$("#wall").show( "slide", "{direction: right}", 300 );
		$("#messages, #notifications").hide();
		console.log("news");
	});
	$("#messageButton").click(function(){
		$("#messages").show( "slide", "{direction: right}", 300 );
		$("#wall, #notifications").hide();
		console.log("message");
	});
	$("#notificationButton").click(function(){
		$("#notifications").show( "slide", "{direction: right}", 300 );
		$("#wall, #messages").hide();
		console.log("noti");
	});
</script>