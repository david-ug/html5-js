<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function(){
            $('#db_table').DataTable({
                "columnDefs": [{ "targets": [2], "orderable": false}],
                "order": [[ 0, "desc" ]]
            });
        });
    </script>

</head>

<body>

<table id="db_table" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody>

    <?php

        require_once '../db.php';
        $get_data = "SELECT * FROM `contact_form`";

        $db = getConnection();
        $stmt = $db->prepare($get_data);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $row_data){
            $name= $row_data['name'];
            $email= $row_data['email'];
            $phone= $row_data['phone'];
            $country= $row_data['country'];

            echo "
                    <tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$phone</td>
                        <td>$country</td>
                    </tr>
                    ";
        }
        ?>
    </tbody>
</table>

</body>


