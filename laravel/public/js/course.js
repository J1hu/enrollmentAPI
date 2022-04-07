$(function(){
    loadCourses();
    
    function loadCourses(){
        var request = $.ajax({
            url: "/api/courses",
            type: "GET",
          });

        request.done(function(response, textStatus, JqXHR){
            var data = response.data;
            console.log(data);
        });
        request.fail(function(jqXHR, textStatus, errorThrown){
            var errorJSON = jqXHR.responseJSON
            $('#errorMessage').html(errorJSON.error).removeClass('d-none');
        });

    };
// im here
    $('#saveChanges').on('click', function(){
        var course = $('#course').val();
        var years = $('#years').val();
        var description  = $('#description').val();

        if (!course || !years) {
            $('#testJehu').html('complete the fields').removeClass('d-none');
            $('#exampleModal').modal('hide');
        }

        var request = $.ajax({
            url: "/api/course",
            type: "POST",
            data: {
                course, years, description
            }
          });
    })

});