<?php include '../header.php'; ?>
    <main class="app-main">
        <div class="wrapper">
            <div class="page">
                <div class="page-inner">
                    <header class="page-title-bar">
                        <div class="d-md-flex align-items-md-start">
                            <h1 class="page-title mr-sm-auto">
                                <?php
                                    $langs_list = array('ua','ru','en');
                                    $location = '../test-files/news.txt';
                                    $file = file_get_contents($location, false);
                                    if ($file) {
                                        $news = json_decode($file,true);
                                    }
                                ?>
                                <?php if ($news[$_GET['id']]) { ?>
                                    Редагувати новину
                                <?php } else { ?>
                                    Добати новину
                                <?php }  ?>
                            </h1>
                        </div>
                    </header>
                    <div class="page-section">
                        <div class="card card-fluid">
                            <div class="card-body">
                                <div class="form">
                                    <?php
                                        if ($_POST) {
                                            ksort($news);
                                            $keys = array_keys($news);
                                            if ($_POST['ID'] == 0) {
                                                $ID = intval(end($keys)) + 1;
                                                $views = 0;
                                            } else {
                                                if (in_array($_POST['ID'],$keys)) {
                                                    $ID = intval(end($keys)) + 1;
                                                    $views = 0;
                                                } else {
                                                    $ID = $_POST['ID'];
                                                }

                                            }
                                            if (!$_POST['date']) {
                                                $date = date('d-m-y');
                                            } else {
                                                $date = $_POST['date'];
                                            }
                                            $news[$ID] = array(
                                                'date' => $date,
                                                'time' => $_POST['time'],
                                                'meta_title' => $_POST['meta_title'],
                                                'meta_decription' => $_POST['meta_decription'],
                                                'meta_keywords' => $_POST['meta_keywords'],
                                            );
                                            foreach ($langs_list as $lg) {
                                                $news[$ID]['title_'.$lg] = $_POST['title_'.$lg];
                                                $news[$ID]['content_'.$lg] = $_POST['content_'.$lg];
                                            }
                                            if ($views == 0) {
                                                $news[$ID]['views'] = $views;
                                            }
                                            if ($file) {
                                                $content = json_encode($news);
                                                file_put_contents($location, $content);
                                            }
                                        }
                                    ?>
                                    <form id="edit_add_form" method="post">
                                        <?php
                                            foreach ($langs_list as $lg) {
                                                echo $item['title_'.$lg].'<br>';
                                                ?>
                                                <div class="form-group">
                                                    <label class="control-label" for="title_<?=$lg?>">Заголовок (<?=$lg?>)<span class="badge badge-danger">Required</span></label>
                                                    <input id="title_<?=$lg?>" type="text" value="<?=$news[$_GET['id']]['title_'.$lg]?>" name="title_<?=$lg?>" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="content_<?=$lg?>">Контент (<?=$lg?>)</label>
                                                    <textarea id="content_<?=$lg?>" name="content_<?=$lg?>" class="form-control"><?=$news[$_GET['id']]['title_'.$lg]?></textarea>
                                                </div>
                                                <?php
                                            }
                                        ?>
                                        <div class="form-group">
                                            <label for="form3">Зображення</label>
                                            <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input" id="form3" multiple="">
                                                <label class="custom-file-label" for="form3">Виберіть файл</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="form7">Title</label>
                                            <input id="form7" name="meta_title" value="<?=$news[$_GET['id']]['meta_title']?>" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="form8">Meta (decription)</label>
                                            <input id="form8" name="meta_decription" value="<?=$news[$_GET['id']]['meta_decription']?>" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="form9">Meta (keywords)</label>
                                            <input id="form9" name="meta_keywords" value="<?=$news[$_GET['id']]['meta_keywords']?>" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="form4">Дата</label>
                                            <input id="form4" type="text" name="date" value="<?=$news[$_GET['id']]['date']?>" class="form-control flatpickr-input" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="form5">Час</label>
                                            <input id="form5" type="text" name="time" value="<?=$news[$_GET['id']]['time']?>" class="form-control flatpickr-input" readonly="readonly">
                                        </div>
                                        <input id="form10" type="hidden" name="ID" value="<?=$_GET['id']?>">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-success">Опублікувати</button>
                                        </div>
                                    </form>
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