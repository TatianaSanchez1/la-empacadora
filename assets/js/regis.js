function eMsg(params) {
    alert("Error: L" + params + "+");
} //end eMsg

$(document).on('submit', '#form-login', function (event) {
    event.preventDefault();
    // Act on the event
    var un = $('#un').val();
    var up = $('#up').val();

    $.ajax({
        url: 'data/login_user.php',
        type: 'post',
        dataType: 'json',
        data: {
            un: un,
            up: up
        },
        success: function (data) {
            console.log(data);
            if (data.logged == true) {
                window.location = data.url;
            } else {
                alert(data.msg);
                $('#un').focus();
            }
        },
        error: function () {
            alert('Error: L17+');
        }
    });
});