<div id="info">
    <div id="date"><p>TIME: <span id="time"></span> | DATE: <span id="date_dmy"></span></p></div>
    <a href="./includes/logout.php" id="logout-btn"><div><p>LOGOUT</p></div></a>
    <p id="ofc-info">LOGGED IN AS: <span> <?php echo $_SESSION['user']; ?></span> [<span>Assistant Chief</span>]</p>
</div>

<!-- <?php date_default_timezone_set("Europe/Bucharest"); echo date("H:i"); ?> -->
<!-- <?php echo date("d/m/Y"); ?> -->

<script>
    var timer = setInterval(showDate, 1);
    function showDate() {
        var h = new Date().getHours();
        var m = new Date().getMinutes();
        h = (h<10) ? '0' + h : h;
        m = (m<10) ? '0' + m : m;
        document.getElementById('time').innerHTML = h + ":" + m;

        var timestamp = new Date().getTime();
        var d = new Date(timestamp).toLocaleDateString('en-GB');
        document.getElementById('date_dmy').innerHTML = d;
    }
</script>