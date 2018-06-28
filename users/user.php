<?php include '../header.php'; ?>
    <main class="app-main">
        <div class="wrapper">
            <div class="page">
                <div class="page-inner">
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
                    <header class="page-title-bar">
                        <h1 class="page-title mr-sm-auto">Користувач <?=$users[$_GET['id']]['name']?></h1>
                    </header>
                    <div class="page-section">
                        <div class="card card-fluid">
                            <div class="card-body">

                                <div class="form" id="form">
                                    <form id="user_form" method="post">
                                        <input id="form10" type="hidden" value="<?=$_GET['id']?>" name="ID">
                                        <div class="list-group list-group-flush list-group-bordered">
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Користувач:</span>
                                                <span><strong class="user-data-name"><?=$users[$_GET['id']]['name']?></strong> ( ID : <span class="user-data-ID"><?=$_GET['id']?></span> ) </span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Email:</span>
                                                <span><strong class="user-data-email"><?=$users[$_GET['id']]['email']?></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Дата регістрації</span>
                                                <span><strong class="user-data-register_time"><?=$users[$_GET['id']]['register_time']?></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Дата останнього візиту</span>
                                                <span><strong class="user-data-last_time_visit"><?=$users[$_GET['id']]['last_time_visit']?></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Статус</span>
                                                <span><strong class="user-data-status"><span class="oi oi-<?=$users[$_GET['id']]['status']?>"></span></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Вік:</span>
                                                <span><strong class="user-data-age"><?=$users[$_GET['id']]['age']?></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Місто:</span>
                                                <span><strong class="user-data-city"><?=$users[$_GET['id']]['city']?></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Країна</span>
                                                <span><strong class="user-data-country"><?=$users[$_GET['id']]['country']?></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <a href="" class="btn btn-dark">Документи</a>
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-success active"><input type="radio" name="approval_status" checked="" value="1" autocomplete="off">Approve</label>
                                                    <label class="btn btn-danger"><input type="radio" name="approval_status" value="0" autocomplete="off">Declime</label>
                                                </div>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Баланс:</span>
                                                <span><strong class="user-data-balance"><?=$users[$_GET['id']]['balance']?></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Всього завів:</span>
                                                <span><strong class="user-data-money_bring"><?=$users[$_GET['id']]['money_bring']?></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Всього вивів:</span>
                                                <span><strong class="user-data-money_bring_out"><?=$users[$_GET['id']]['money_bring_out']?></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Всього ігр:</span>
                                                <span><strong class="user-data-game_play"><?=$users[$_GET['id']]['game_play']?></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <span class="text-muted">Всього програно:</span>
                                                <span><strong class="user-data-game_lose"><?=$users[$_GET['id']]['game_lose']?></strong></span>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <a href="bet-history/<?=$_GET['id']?>" class="btn btn-dark link-user">Істрорія ставок</a>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <div class="form-group">
                                                    <label class="control-label" for="form6">Коментарій</label>
                                                    <textarea id="form6" name="comment" class="form-control user-data-comment"><?=$users[$_GET['id']]['comment']?></textarea>
                                                </div>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <a href="ban/<?=$_GET['id']?>" class="btn btn-secondary link-user">Забанити користувача</a>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <a href="delate/<?=$_GET['id']?>" class="btn btn-warning link-user">Видилати користувача</a>
                                            </div>
                                            <div class="list-group-item justify-content-between">
                                                <div class="form-group text-right">
                                                    <button type="submit" class="btn btn-success">Зберегти</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
        <footer class="app-footer"></footer>
    </main>
<?php include '../footer.php'; ?>