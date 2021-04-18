<html>
<head>
    <title>Cara Menggunakan Datatables</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>

<body>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>nim</th>
                <th>nama</th>
            </tr>
        </thead>
    </table>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable({
        "ajax": "read_data.php",
        "columns": [
            { "data": "nim" },
            { "data": "nama" }
        ]
    });

} );
</script>
</html>
