<?php

sleep(60);
$message = "This is an alert message";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Alert Example</title>
</head>

<body>
    <script>
        alert("<?php echo $message; ?>");
    </script>
</body>

</html>