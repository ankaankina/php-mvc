$(document).ready(function() {
    var prevAuthor = $("#the-author");
    var prevEmail = $("#the-email");
    var prevText = $("#the-text");

    $("#preview-input").on("click", function (e) {
        e.preventDefault();
        $(".the-post").show();
        prevAuthor.html($("#author").val());
        prevEmail.html($("#email").val());
        prevText.html($("#content").val());

    });

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