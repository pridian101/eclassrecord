<?php

//	var_dump(session_status());
// 	if (!isset($_SESSION['teacher_id'])) {
// 		header("Location: login.php");
// 	} 
	
	include 'misc/header.php';

?>

	<div class="alert alert-danger" id="alert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<h6>Welcome to your dashboard.</h6>
		<p>To start adding your students, you first  need to create grade levels and their respective sections</p>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="profileModalLabel">Personal Profile</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="table">
						<tbody>
							<tr>
								<td><p style="font-weight: bold">First name: </p></td>
								<td id="fname"></td>
							</tr>
							<tr>
								<td><p style="font-weight: bold">Last name: </p></td>
								<td id="lname"></td>
							</tr>
							<tr>
								<td><p style="font-weight: bold">Region: </p></td>
								<td id="region"></td>
							</tr>
							<tr>
								<td><p style="font-weight: bold">Division: </p></td>
								<td id="division"></td>
							</tr>
							<tr>
								<td><p style="font-weight: bold">District: </p></td>
								<td id="district"></td>
							</tr>	
							<tr>
								<td><p style="font-weight: bold">School name: </p></td>
								<td id="school"></td>
							</tr>
							<tr>
								<td><p style="font-weight: bold">First name: </p></td>
								<td id="sid"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function(){
			$('#profileModal').on('show.bs.modal', function (event) {
			var content = $(event.relatedTarget) // Button that triggered the modal			
			var fname = content.data('fname')
            var lname = content.data('lname')
            var region = content.data('region')
            var division = content.data('division')
            var district = content.data('district')
            var school = content.data('school')
            var sid = content.data('sid')		
			var modal = $(this)
			modal.find('.modal-body #fname').text(fname)
			modal.find('.modal-body #lname').text(lname)
			modal.find('.modal-body #region').text(region)
			modal.find('.modal-body #division').text(division)
			modal.find('.modal-body #district').text(district)
			modal.find('.modal-body #school').text(school)
			modal.find('.modal-body #sid').text(sid)
			});
		});
	</script>
<?php include 'misc/footer.php' ?>
