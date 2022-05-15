<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="game-navbar">
    <div class="game-navbar__left">
        <div class="game-navbar__item">
            <a href="" class="game-navbar__icon game-navbar__icon--cup">
                <div></div>
            </a>
        </div>
    </div>
    <div class="game-navbar__right">
        <div class="game-navbar__item">
            <a href="" class="game-navbar__icon game-navbar__icon--setup">
                <div></div>
            </a>
        </div>
    </div>
</nav>
<div class="home__desktop1 min-vh-100 d-flex align-items-center text-center">
    <div class="w-100 home__desktop1__section">
        <div class="container">
            <div class="item__68">
                <div><img src="images/logo31.png" alt=""></div>
                <div class="home__desktop1__box">
                    <div class="home__desktop1__boxTag">#JomHalauDenggi</div>
                </div>
            </div>
            <div class="item__68">
                <div class="item__9">
                    <div class="home__desktop1__txt">WELCOME JUSTIN</div>
                </div>
                <div class="item__9">
                    <a href="" class="home__desktop1__btn">START</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--myModal-entergame-->
<div class="modal fade" id="myModal-entergame" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered home__modal__dialog-entergame">
        <div class="modal-content">
            <button type="button" class="close position-absolute home__modal__dialog-entergame__btnclose" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body d-flex align-items-center text-center">
                <div class="w-100 home__modal__dialog-entergame__box">
                    <div class="home__modal__dialog-entergame__txt">ENTER YOUR NAME</div>
                    <div>
                        <input type="email" class="form-control home__modal__dialog-entergame__input" placeholder="|ENTER YOUR NAME" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div>
                        <a href="" class="home__modal__dialog-entergame__btn1 btn btn-secondary">YES</a>
                        <a href="" class="home__modal__dialog-entergame__btn2 btn btn-secondary">CANCEL</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/myModal-entergame-->

<!--myModal-list-->
<div class="modal fade" id="myModal-list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered home__modal__dialog-list">
        <div class="modal-content">
            <button type="button" class="close position-absolute home__modal__dialog-entergame__btnclose" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="home__modal__dialog-list__header">
                <span>LEADERBOARD</span>
            </div>
            <div class="modal-body">
                <?php
                $data = array(
                    array(
                        'txt' => 'uncanny',
                        'count' => '555',
                        'stt' => '',
                    ),
                    array(
                        'txt' => 'machiato',
                        'count' => '410',
                        'stt' => '',
                    ),
                    array(
                        'txt' => 'reaper',
                        'count' => '316',
                        'stt' => '',
                    ),
                    array(
                        'txt' => 'justin',
                        'count' => '212',
                        'stt' => '21',
                    ),
                    array(
                        'txt' => 'Spear',
                        'count' => '123',
                        'stt' => '22',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div class="home__modal__dialog-list__item" data-stt="<?=($k>2)?$v['stt']:''?>">
                    <div class="w-100">
                        <div class="row align-items-center">
                            <div class="col">
                                <span class="home__modal__dialog-list__txt"><?= $v['txt'] ?></span>
                            </div>
                            <div class="col-auto">
                                <span class="home__modal__dialog-list__count"><?= $v['count'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/myModal-list-->
<script>
    $('#myModal-list').modal('show');
</script>
<?php require "template-parts/layouts/footer.php"; ?>