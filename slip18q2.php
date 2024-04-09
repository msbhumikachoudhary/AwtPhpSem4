<!--  Write a AJAX program to print Teacher information from postgreSQL table Teacher.
Teacher (Tno, Name, Subject, Research area)  -->
<!DOCTYPE html>
<html>
<head>
<title>Teacher Information</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<h2>Teacher Information</h2>
<button id="loadBtn">Load Teacher Information</button>
<div id="teacherInfo"></div>
<script>
        $(document).ready(function() {
            $("#loadBtn").click(function() {
                $.ajax({
                    url: "get_teacher_info.php",
                    type: "GET",
                    dataType: "html",
                    success: function(response) {
                        // Display the teacher information in the designated div
                        $("#teacherInfo").html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log("AJAX Request Error:", error);
                    }
                });
            });
        });
</script>
</body>
</html>
