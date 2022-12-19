<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $pageData['title']; ?></title>

    <!-- Bootstrap -->
    <link href="/public/css/bootstrap.css" rel="stylesheet" />


    <link rel="stylesheet" href="/public/css/datatablestab.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/public/js/datatablestab.min.js"></script>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-list__item"></li>
                <li class="nav-list__item"></li>
                <li class="nav-list__item"></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <!-- Таб панель -->
            <div>
                <div role="tabpanel" class="tab-pane fade in active" id="example2-tab1">
                    <table id="example2-tab1-dt" class="table table-striped table-bordered table-condensed" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Фамилия</th>
                                <th>Сайт</th>
                                <th>Телефон</th>
                                <th>Страна</th>
                                <th>Статус</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pageData['data'] as $key => $value) {
                                echo "<tr>";
                                echo "<td>" . $value['surname'] . "</td>";
                                echo "<td>" . $value['site'] . "</td>";
                                echo "<td>" . $value['phone'] . "</td>";
                                echo "<td>" . $value['country'] . "</td>";
                                echo "<td>" . $value['status'] . "</td>";


                                echo "</tr>";
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#example2-tab1-dt").DataTable({
                responsive: true,
            });
            $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
                $($.fn.dataTable.tables(true))
                    .DataTable()
                    .columns.adjust()
                    .responsive.recalc();
            });
        });
    </script>
</body>

</html>