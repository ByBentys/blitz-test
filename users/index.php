<?php include '../header.php'; ?>
    <main class="app-main">
        <div class="wrapper">
            <div class="page">
                <div class="page-inner">
                    <header class="page-title-bar">
                        <div class="d-md-flex align-items-md-center">
                            <div class="user-title mr-sm-auto d-md-flex align-items-md-center">
                                <h1 class="page-title mr-sm-auto">Користувачі</h1>
                                <div class="only_on_moderation_filter">
                                    <div class="col-checker">
                                        <form method="post"  class="custom-control custom-checkbox">
                                            <div class="d-flex align-items-center custom-checkbox-cor">
                                                <input type="checkbox" class="custom-control-input" name="only_on_moderation" id="only_on_moderation">
                                                <label class="custom-control-label" for="only_on_moderation"></label> Тільки ті, що на модераціЇ
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="search-side">
                                <div class="input-group input-group-alt">
                                    <form method="post" class="input-group">
                                        <button type="submit" class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="oi oi-magnifying-glass"></span>
                                            </span>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Пошук">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="page-section">
                        <div class="card card-fluid">
                            <div class="card-body">
                                <div id="myTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="table-responsive">
                                        <?php
                                            $users = array(
                                                '1' => array(
                                                    'name' => 'Віталій',
                                                    'email' => 'test@mail.ru',
                                                    'last_time_visit' => '26-05-18 17:40',
                                                    'register_time' => '05-05-18 17:40',
                                                    'status' => 'check',
                                                    'balance' => '1250UA',
                                                    'age' => '18',
                                                    'country' => 'Россія',
                                                    'city' => 'Мурманськ',
                                                    'game_play' => '100',
                                                    'game_lose' => '12',
                                                    'money_bring' => '1500UA',
                                                    'money_bring_out' => '100UA',
                                                    'comment' => 'test 1',
                                                ),
                                                '2' => array(
                                                    'name' => 'Ольга',
                                                    'email' => 'test1@mail.ru',
                                                    'last_time_visit' => '12-05-14 13:12',
                                                    'register_time' => '01-05-18 17:40',
                                                    'status' => 'warning',
                                                    'balance' => '150UA',
                                                    'age' => '26',
                                                    'country' => 'Україна',
                                                    'city' => 'Київ',
                                                    'game_play' => '12',
                                                    'game_lose' => '1',
                                                    'money_bring' => '150UA',
                                                    'money_bring_out' => '10UA',
                                                    'comment' => 'test',
                                                    'documents' => array(
                                                        '1' => ''
                                                    ),
                                                ),
                                            );
                                        ?>
                                        <table id="myTable" class="table dataTable no-footer" aria-describedby="myTable_info" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="align-middle">ID</th>
                                                    <th class="align-middle">Імя</th>
                                                    <th class="align-middle">Email</th>
                                                    <th class="align-middle">Останній візит</th>
                                                    <th class="align-middle">Баланс</th>
                                                    <th class="align-middle text-center">Стітус</th>
                                                    <th class="align-middle"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $count = 1;
                                                foreach ($users as $id => $user) {
                                                    if ($count % 2 == 0) {
                                                        $class = 'even';
                                                    } else {
                                                        $class = 'odd';
                                                    }
                                                    ?>
                                                    <tr role="row" class="<?php echo $class; ?>">
                                                        <td class="align-middle"><?php echo $id; ?></td>
                                                        <td class="align-middle"><?php echo $user['name']; ?></td>
                                                        <td class="align-middle"><?php echo $user['email']; ?></td>
                                                        <td class="align-middle"><?php echo $user['last_time_visit']; ?></td>
                                                        <td class="align-middle"><?php echo $user['balance']; ?></td>
                                                        <td class="align-middle text-center">
                                                            <div class="status-icon">
                                                                <span class="oi oi-<?php echo $user['status']; ?>"></span>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-right">
                                                            <a class="btn btn-sm btn-secondary" href="user.php?id=<?php echo $id; ?>">
                                                                <span class="oi oi-person"></span>  Деталі
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