<!DOCTYPE html>
<html>
<head>
    <title>Chat Application</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function fetchMessages() {
                $.get("get_messages.php", function(data) {
                    $("#chat").html(data);
                });
            }

            $("#send").click(function() {
                var message = $("#message").val();
                var username = $("#username").val();

                if (message !== "") {
                    $.post("send_message.php", { username: username, message: message }, function() {
                        $("#message").val("");
                        fetchMessages();
                    });
                }
            });

            fetchMessages();
        });
    </script>
</head>
<body>
    <div id="chat"></div>
    <input type="text" id="username" placeholder="Your Username">
    <input type="text" id="message" placeholder="Enter your message">
    <button id="send">Send</button>
</body>
</html>
