</html>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script id="bs-live-reload" data-sseport="53730" data-lastchange="1601302561494" src="/js/livereload.js"></script>

<script>
function compare()
{
    var startDt = document.getElementById("startDate").value;
    var endDt = document.getElementById("endDate").value;

    if( (new Date(startDt).getTime() < new Date(endDt).getTime()))
    {
        // Your code here
    }
}
</script>