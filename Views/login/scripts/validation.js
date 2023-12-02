$(document).ready(
        function (){
            validateUsername();
    }
)

function validateUsername() {
    var username = $('#loginUsername').val();

    var regex = /^[\w]$/;
    var check = regex.test(username);
    console.log(check);
}