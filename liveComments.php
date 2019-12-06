<!DOCTYPE html>
<html>
  <head>
    <title>your title here</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
   </head>
        
    <script>
        $(document).ready(function(){

            var comments;
            var promise = [];
            promise.push (
	        $.ajax({
		            url: "retrieveComments.php",
		            success: function(data){
			        comments = data;
		        },
		       datatype: "json"
	        })
        );
	
        $.when.apply($, promise).then(function(){
	    $.each(comments, function(i, item) {
		$("#comments").append("<div class=\"comment\">"+item.comment+"</div>");
	});
});
        
            var newComment;
            $("#submitButton").click(function(){
            newComment = $("#newComment").val();

            var dataString = "com="+newComment;
                $.ajax({
	                url: "insertNew.php",
	                type: "POST",
	                data: dataString,
	                success: function(data){
		        console.log('success');
	            }			
            });

            $("#comments").append("<div class=\"comment\">"+newComment+"</div>");
        });
      });
    </script>
  <body>
   <h1> Facebook </h1>
   <p> Freddy Fakename posted... </p>
   <p> I love co2714, it is the best module ever and Jonathan is awesome!! </p>
   <br>
    <div id="comments"></div>
   <textarea id = "newComment" rows = "6" cols = "50"></textarea>
   <button id = "submitButton">Click to submit</button>
  </body>
</html>
