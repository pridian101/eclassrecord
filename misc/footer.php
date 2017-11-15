                </div>
            </div>            
        </div> <!-- /container -->

            <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
