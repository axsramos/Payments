<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Página com Cards</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Projetos com Integração de Pagamentos</h1>
        <hr>
        <?php
        if (isset($data['Projects'])) {
            $column_card = 0;
            foreach ($data['Projects'] as $data_item) {
                $column_card = $column_card + 1;
                if ($column_card == 1) {
                    echo '<div class="row">';
                }

                echo '
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">' . $data_item['title'] . '</h5>
                            <p class="card-text">' . $data_item['description'] . '</p>
                        </div>
                    </div>
                </div>
                ';

                if ($column_card == 4) {
                    echo '</div>'; // end-row //
                    $column_card = 0;
                }
            }
            if ($column_card > 0) {
                echo '</div>'; // end-row //
            }
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>