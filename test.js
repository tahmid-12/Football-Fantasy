/*Home Team Logo Input*/
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(30)
                    .height(30);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
/*Away Team Logo Input*/
function readAwayURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah1')
                    .attr('src', e.target.result)
                    .width(30)
                    .height(30);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }