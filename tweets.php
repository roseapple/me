<!DOCTYPE html>

<html>
<head>
	
	<script src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
		
	<script>
		//http://search.twitter.com/search.json?q=obama%20-romney%20%3A%28&page=100&result_type=recent&rpp=100&until=2012-10-09
		
		$.ajax({
		
			url: 'http://search.twitter.com/search.json?q=obama%20-romney%20%3A%28&page=1&result_type=recent&rpp=100&until=2012-10-19&include_entities=true',
			
			dataType:'jsonp',
			
			success:function(response){
				
				$.each(response.results, function(i, tweet){
					console.log(response);
					
					var text = tweet['text'];
					
					$('#tweets').append('<div class="tweet"><li class="show">' + text + '</li></div>');
					
					$("<li></li>").hover(function(){
						$(this).css('background', 'blue');
					});
					
					
				});
				
			},			
			error: function(){
				console.log("damn. i'm sad");
			}
			
			
			
		});
			
			

	
	</script>

</head>

<style>

	.tweet {
		width:30px;
		height:1px;
		background-color:lightgreen;		
		}
		
	.tweet:hover{
		background-color:green;
		}
	.tweet li{
		display:none;
		margin-left:60px;
		width:400px;
		}
		
</style>

<body>
	<ul id="tweets"></ul>
</body>

</html>