$(document).ready(function() {
    $("#submit-input").click(function(e) {
        e.preventDefault();
        var author = $("#author").val();
        var email = $("#email").val();
        // var img = $("#img").val();
        //var gender = $("input[type=radio]:checked").val();
        var content = $("#content").val();


// Returns successful data submission message when the entered information is stored in database.
            /* var dataString = 'param='+author+'&param1'+email+'&param3'+content;
            $.ajax('insert.php', {
                type: 'POST',
                data: dataString,
                success: function() {
                    alert('Your data has been saved.');
                }
            }); */


            $.post("../insert.php", {
                author: author,
                email: email,
                // img: img,
                // gender1: gender,
                content: content
            }, function(data) {
                alert(data);
                // $('#form')[0].reset(); // To reset form fields
            });
    });
});