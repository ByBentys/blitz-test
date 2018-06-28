<?php include '../header.php'; ?>
    <main class="app-main">
        <div class="wrapper">
            <div class="page">
                <div class="page-inner">
                    <header class="page-title-bar">
                        <div class="d-md-flex align-items-md-center">
                            <div class="user-title mr-sm-auto d-md-flex align-items-md-center">
                                <h1 class="page-title mr-sm-auto">Фіннаси</h1>
                            </div>
                            <div class="filter-buttons d-flex align-items-center justify-content-start">
                                <form method="post">
                                    <input id="filter_deposit" type="hidden" value="deposit" name="filter">
                                    <button type="submit" class="btn btn-info">Deposit</button>
                                </form>
                                <form method="post">
                                    <input id="filter_withdrawal" type="hidden" value="withdrawal" name="filter">
                                    <button type="submit" class="btn btn-info">Withdrawal</button>
                                </form>
                                <form method="post">
                                    <input id="filter_all" type="hidden" value="all" name="filter">
                                    <button type="submit" class="btn btn-info">All</button>
                                </form>
                            </div>
                            <div class="search-side">
                                <div class="input-group input-group-alt">
                                    <form method="post" class="input-group">
                                        <button type="submit" class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="oi oi-magnifying-glass"></span>
                                            </span>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Email/Id">
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
                                            $bets = array(
                                                '1' => array(
                                                    'name' => 'Віталій',
                                                    'type' => 'Deposit',
                                                    'date_create' => '20-07-15 17:10',
                                                    'date_update' => '21-07-15 12:11',
                                                    'id_transaction' => 'wasdaserweqw3',
                                                    'sum_wis_tax' => '1200',
                                                    'sum_without_tax' => '1000',
                                                    'sum_tax' => '200',
                                                    'status' => 'Appruved',
                                                    'comment' => '',
                                                ),
                                                '2' => array(
                                                    'name' => 'Ольга',
                                                    'type' => 'Withdrawal',
                                                    'date_create' => '12-03-16 11:11',
                                                    'date_update' => '24-05-16 15:15',
                                                    'id_transaction' => 'dasdasdasdsar',
                                                    'sum_wis_tax' => '200',
                                                    'sum_without_tax' => '180',
                                                    'sum_tax' => '20',
                                                    'status' => 'Pending',
                                                    'comment' => '',
                                                )
                                            );
                                        ?>
                                        <table id="myTable" class="table dataTable no-footer" aria-describedby="myTable_info" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="align-middle">ID</th>
                                                    <th class="align-middle">Імя користувача</th>
                                                    <th class="align-middle">Тип</th>
                                                    <th class="align-middle">Дата створення</th>
                                                    <th class="align-middle">Дата внесення змін</th>
                                                    <th class="align-middle">ID транзакції</th>
                                                    <th class="align-middle text-center">Сума з налогами</th>
                                                    <th class="align-middle text-center">Сума без налогів</th>
                                                    <th class="align-middle text-center">Сума налогу</th>
                                                    <th class="align-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            Статус <div class="btn btn-dark" data-toggle="modal" data-target="#set_limit_form">Set limits</div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $count = 1;
                                                    foreach ($bets as $id => $item) {
                                                        if ($count % 2 == 0) {
                                                            $class = 'even';
                                                        } else {
                                                            $class = 'odd';
                                                        }
                                                    ?>
                                                    <tr role="row" class="<?php echo $class; ?>">
                                                        <td class="align-middle"><?php echo $id; ?></td>
                                                        <td class="align-middle"><?php echo $item['name']; ?></td>
                                                        <td class="align-middle"><?php echo $item['type']; ?></td>
                                                        <td class="align-middle"><?php echo $item['date_create']; ?></td>
                                                        <td class="align-middle"><?php echo $item['date_update']; ?></td>
                                                        <td class="align-middle"><?php echo $item['id_transaction']; ?></td>
                                                        <td class="align-middle text-center"><?php echo $item['sum_wis_tax']; ?></td>
                                                        <td class="align-middle text-center"><?php echo $item['sum_without_tax']; ?></td>
                                                        <td class="align-middle text-center"><?php echo $item['sum_tax']; ?></td>
                                                        <td class="align-middle text-left">
                                                            <?php if ($item['status'] == 'Pending') {?>
                                                                <form id="bet_form" method="post">
                                                                    <input id="form10" type="hidden" name="ID" value="<?=$id?>">
                                                                    <div class="form-group text-right">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="status"><?=$item['status']?></div>
                                                                            <div class="btn-group btn-group-toggle d-flex align-items-center" data-toggle="buttons">
                                                                                <label class="btn btn-success" onclick="window.bet_form.submit();"><input type="radio" name="status" value="Appruved" autocomplete="off">Approve</label>
                                                                                <label class="btn btn-danger" data-toggle="modal" data-target="#comment-form"><input type="radio" name="status" value="Reject" autocomplete="off">Declime</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal fade has-shown" id="comment-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Вкажіть причину відмови</h5>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <textarea id="form6" name="comment" class="form-control user-data-comment"></textarea>
                                                                                </div>
                                                                                <div class="modal-footer justify-content-center">
                                                                                    <button type="submit" class="btn btn-success">Ok</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            <?php } else { ?>
                                                                <?=$item['status']?>
                                                            <?php } ?>
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
        <div class="modal fade has-shown" id="set_limit_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <form class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Встановіть ліміти</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label" for="deposit_limit">Deposit limit</label>
                            <input id="deposit_limit" type="text" name="deposit_limit" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="withdrawal_limit">Withdrawal limit</label>
                            <input id="withdrawal_limit" type="text" name="withdrawal_limit" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-success">Ok</button>
                    </div>
                </div>
            </form>
        </div>
        <footer class="app-footer"></footer>
    </main>
<?php include '../footer.php'; ?>
