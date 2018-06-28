<?php include '../header.php'; ?>
    <main class="app-main">
        <div class="wrapper">
            <div class="page">
                <div class="page-inner">
                    <header class="page-title-bar">
                        <a class="btn btn-success btn-floated add-button" href="/news/news.php?id=0">
                            <span class="fa fa-plus"></span>
                        </a>
                        <div class="d-md-flex align-items-md-start">
                            <h1 class="page-title mr-sm-auto">Новини</h1>
                        </div>
                    </header>
                    <div class="page-section">
                        <div class="card card-fluid">
                            <div class="card-body">
                                <div id="myTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="table-responsive">
                                        <?php
                                            $langs_list = array('ua','ru','en');
                                            $location = '../test-files/news.txt';
                                            $file = file_get_contents($location, false);
                                            if ($file) {
                                                $news = json_decode($file,true);
                                            }
                                        ?>
                                        <table id="myTable" class="table dataTable no-footer" aria-describedby="myTable_info" role="grid">
                                            <thead>
                                            <tr role="row">
                                                <th class="align-middle">№</th>
                                                <th class="align-middle">ID</th>
                                                <th class="align-middle">Дата публікації</th>
                                                <th class="align-middle">Заголовоки</th>
                                                <th class="align-middle">Мови</th>
                                                <th class="align-middle">Перегляди</th>
                                                <th сlass="align-middle" style="width:100px; min-width:100px;"> &nbsp; </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $count = 1;
                                                foreach ($news as $id => $item) {
                                                    if ($count % 2 == 0) {
                                                        $class = 'even';
                                                    } else {
                                                        $class = 'odd';
                                                    }
                                                    ?>
                                                    <tr role="row" class="<?php echo $class; ?>">
                                                        <td class="align-middle"><?php echo $count; ?></td>
                                                        <td class="align-middle"><?php echo $id; ?></td>
                                                        <td class="align-middle"><?php echo $item['date']; ?></br><?php echo $item['time']; ?></td>
                                                        <td class="align-middle">
                                                            <?php
                                                                foreach ($langs_list as $lg) {
                                                                    echo $item['title_'.$lg].'<br>';
                                                                }
                                                            ?>
                                                        </td>
                                                        <td class="align-middle">
                                                            <?php
                                                                foreach ($langs_list as $lg) {
                                                                    echo $lg.'<br>';
                                                                }
                                                            ?>
                                                        </td>
                                                        <td class="align-middle"><?php echo $item['views']; ?></td>
                                                        <td class="align-middle text-right">
                                                            <a class="btn btn-sm btn-secondary" href="/news/news.php?id=<?php echo $id; ?>" >
                                                                <i class="fa fa-pencil-alt"></i>
                                                            </a>
                                                            <a class="btn btn-sm btn-secondary" href="/delite/<?php echo $id; ?>">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $count++;
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php
                                    $pagination = array(
                                        '1' => '#firts',
                                        '2' => '#second',
                                        '3' => '#third',
                                        '4' => '#four',
                                        '5' => '#five',
                                        '...' => '#',
                                        '100' => '#one_handred',
                                    );
                                    ?>
                                    <div class="mt-4">
                                        <div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate">
                                            <ul class="pagination justify-content-center">
                                                <li class="paginate_button page-item previous disabled" id="myTable_previous">
                                                    <a href="#" aria-controls="myTable" data-dt-idx="0" tabindex="0" class="page-link">
                                                        <i class="fa fa-lg fa-angle-left"></i>
                                                    </a>
                                                </li>
                                                <?php
                                                foreach ($pagination as $key => $link) {
                                                    if ($key == 1) {
                                                        $active = 'active';
                                                    } else {
                                                        $active = '';
                                                    }
                                                    ?>
                                                    <li class="paginate_button page-item <?php echo $active;?>">
                                                        <a href="<?php echo $link; ?>" aria-controls="myTable" data-dt-idx="<?php echo $link; ?>" tabindex="0" class="page-link"><?php echo $key; ?></a>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                                <li class="paginate_button page-item next" id="myTable_next">
                                                    <a href="#" aria-controls="myTable" data-dt-idx="8" tabindex="0" class="page-link">
                                                        <i class="fa fa-lg fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="app-footer"></footer>
    </main>
<?php include '../footer.php'; ?>