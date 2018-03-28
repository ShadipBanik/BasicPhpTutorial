<!--===============================================================================================-->
	<script src="../resources/login_resource/vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->
	<script src="../resources/login_resource/vendor/bootstrap/js/popper.js"></script>
	<script src="../resources/login_resource/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../resources/login_resource/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../resources/login_resource/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
		
		$(document).ready(function(){
				$('#submit').click(function(){

					$.post("../user_management/add_role.php",
								{roleinput1:$('#addrole').val()},

								function(data){
										$('#form').html(data);

								},
							);

				});

		});
	</script>

<!--===============================================================================================-->
	<script src="../resources/login_resource/js/main.js"></script>

</body>
</html>
