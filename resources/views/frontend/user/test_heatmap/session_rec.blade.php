<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>CodePen - rrweb demo</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/rrweb-player@latest/dist/style.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<div id="wrapper" />
<!-- partial -->
<script src='https://cdn.jsdelivr.net/npm/rrweb-player@latest/dist/index.js'></script>
<script>
    var events = [{t}}];
</script>
<script>
    new rrwebPlayer({
        target: document.getElementById("wrapper"),
        data: {
            events,
            autoPlay: true
        }
    });
</script>

</body>
</html>
