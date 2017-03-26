$(document).ready(function() {
    $("#submit-input").click(function(e) {
        e.preventDefault();
        var author = $("#author").val();
        var email = $("#email").val();
        // var img = $("#img").val();
        var content = $("#content").val();

        $.post("insert.php", {
            author: author,
            email: email,
            // img: img,
            content: content
        }, function(data) {
            alert(data);
            // $('#form')[0].reset(); // To reset form fields
        });
    });
});