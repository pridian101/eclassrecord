<button onclick="addGradeSection()">Add Grade and Section</button>
<div id="formGradeSection" style="display:none;">
	<form id="gradeForm">
		<div class="form-group">
			<input type="hidden" id="teacher-id" value=<?php echo $_SESSION['teacher_id']; ?>
			<label for="grade" class="form-control-label">Grade:</label>
			<select name="grade" class="selectpicker" id="grade">
			  	<option value="4">Grade 4</option>
			  	<option value="5">Grade 5</option>
			  	<option value="6">Grade 6</option>
			</select>
		</div>
		<div class="form-group">
			<label for="section" class="form-control-label">Section:</label>
			<input type="text" class="form-control" id="section">
		</div>
		<div class="form-group">
			<button type="submit" id="addGrade">Add</button>
		</div>
	</form>
</div>
<br><br>
    <form id="studentForm">
		<input type="text" name="lrn" id="lrn" placeholder="Student LRN"/>
		<input type="text" name="first_name" id="first_name" placeholder="First Name"/>
		<input type="text" name="middle_name" id="middle_name" placeholder="Middle Name"/>
		<input type="text" name="last_name" id="last_name" placeholder="Last Name"/>
		<button type="submit" id="saveStudent">Add student</button>
	</form>


<script>
$(document).ready(function() {
  $("#saveStudent").click(function(){
    var lrn = $("#lrn").val();
    var first_name = $("#first_name").val();
    var middle_name = $("#middle_name").val();
    var last_name = $("#last_name").val();

    var student= {};
    student.create=true;
    student.section=1;
    student.lrn = lrn;
    student.first_name = first_name;
    student.middle_name = middle_name;
    student.last_name = last_name;

    console.log(JSON.stringify(student));


    $.ajax
    ({
      type: "POST",
      dataType : 'json',
      async: true,
      url: 'student_records.php',
      data: student,
      success: function () {console.log("Thanks!"); },
      failure: function() {console.log("Error!");}
    });
  });
}); 
</script>
<script>
$(document).ready(function() {
  $("#addGrade").click(function(){
    var teacher_id = $("#teacher-id").val();
    var gr = $("#grade").val();
    var section = $("#section").val();

    var grade= {};
    grade.create="grade";
    grade.teacher_id=teacher_id;
    grade.grade=gr;
    grade.section = section;

    console.log(JSON.stringify(grade));

    $.ajax
    ({
      type: "POST",
      dataType : 'json',
      async: true,
      url: 'student_records.php',
      data: grade,
      success: function () {console.log("Thanks!"); },
      failure: function() {console.log("Error!");}
    });
  });
}); 
</script>
<script>

	function addGradeSection() {
	    var x = document.getElementById("formGradeSection");
	    if (x.style.display === "none") {
	        x.style.display = "block";
	    } else {
	        x.style.display = "none";
	    }
	}

</script>
