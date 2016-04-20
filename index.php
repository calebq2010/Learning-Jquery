<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	First Javascript Practice page</title>
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
	<style>
		.karen{
			width:200px;
			height: 200px;
			background: #222;

		}

		.color{
			background: green !important;
		}

		.ani {
			height: 100px;
			width: 100px;
			position: absolute;
			background: yellow
		}

		.panel, .flip{
				padding: 5px;
				font-size: 18px;
				text-align: center;
				background-color: #555;
				color: white;
				border: solid 1px #666;
				border-radius: 3px;
		}

		.panel {
			padding: 50px;
			display: none;
		}
	
	</style>
</head>
<body>
	
	<h1>	
		Testing
		
	</h1>
	<div class="cool-something">
		<input type="button" class='add-name' value="Add Name">
		<ul>
			<li class="names">Bob</li>
			<li class="names">Larry</li>
			<li class="names">Edward</li>
			<li class="names">Jeff</li>
			<li class="names">Jeff</li>
			<li class="names">Jeff</li>
			<li class="names">Jeff</li>
			<li class="names">Walter</li>
		</ul>
	</div>
	<input class="stop" type="button" value="Stop sliding">

	<div class="flip">Click to slide down panel</div>
	<div class="panel">hello world!</div>

	<input class="button" type="button" value="This is what its going to say">

	<input class="buttonoff" type="button" value="This is what its going to do off">

	<input class="animation" type="button" value ="Animation">

	<div class="karen"></div>

	<div class="ani"></div>



<script>


$('.add-name').on('click', function() {
	var li = $('<li>').text('Sarah');
	$('.cool-something ul').append(li);
})

// $('.cool-something').children().children().eq(Math.floor($('.names').length / 2)).css('background-color', 'black');	

/// next lesson is to learn more about treversing the dom. I have bookmarked jquery site in chrome to look over this
/// 

	$(document).ready(function(){
		$(".animation").click(function(){
			console.log('clicked');
			var div = $(".ani");
			div.animate({height: '300px', opacity: '0.4'}, "slow");
			 div.animate({width: '300px', opacity: '0.8'}, "fast");
			 div.animate({height: '100px', opacity: '0.4'}, "slow");
			 div.animate({width: '100px', opacity: '0.8'}, "fast");
		});
	});
	
	$(".button").on("click", function(){
		$(".karen").css({
			width:200,
			height:200,
			background: "green"
		});
	});

	$(".buttonoff").on("click", function(){
			$(".karen").css({
				width:400,
				height:400,
				background: "purple"
			});
	});

	$(".karen").on("mouseover", function(){
			$(this).addClass("color");
	}).on("mouseout", function(){
			$(this).removeClass("color");
	});


	$(".flip").on("click", function(){
			$(".panel").slideDown(3000);
	});
	$(".stop").click(function(){
			$(".panel").stop();
	});

</script>
</body>
</html>