<!DOCTYPE html>
<html>
<head>
	<title>Module</title>
</head>
<body>
	<div id="result"></div>

   <form method="post" id="send">
   	  <label>Name</label>
   	  <input type="text" name="name">
   	  <label>Age</label>
   	  <input type="number" name="age">
   	  <button type="submit">Add Client </button>
   </form>



   <script src="jquery-3.3.1.min.js"></script>
   <script>
   	   $(document).ready(function () {
   	   	    //select button 
   	   	    $('button').click(function(event){

   	   	    	event.preventDefault();
   	   	    	//select all data (write form)using serialize
   	   	    	var data =$('#send').serialize();
                //request 
                $.post('test.php', data ,function(response){
                   //result
                   $('#result').html(response);
                });
   	   	    });
   	   });
   </script>
</body>
</html>