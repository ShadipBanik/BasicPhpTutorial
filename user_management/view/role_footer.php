<!--===============================================================================================-->
	<script src="../resources/js/jquery-1.11.1.min.js"></script>
	<script>
	$(document).ready(function(){
	    $('#submit').click(function(){

	      $.post("../user_management/system/role_submit.php",
	            {addrole:$('#addrole').val(),},

	            function(data){
	                $('#output').html(data);
	            },
	          );

	    });

	});
	</script>
</body>
</html>
