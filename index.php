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

<!--myModal-winner-->
<div class="modal fade" id="myModal-winner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered home__modal__dialog-winner">
        <div class="modal-content">
            <button type="button" class="close position-absolute home__modal__dialog-entergame__btnclose" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="home__modal__dialog-list__header">
                <span>CONGRATULATIONs!</span>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="w-100 text-center home__modal__dialog-winner__box">
                    <div>
                        <div class="home__modal__dialog-winner__txt1">You have won the game!</div>
                    </div>
                    <div>
                        <div class="position-relative text-left">
                            <img class="position-relative" style="z-index: 99" src="images/characterframeswin1.png" alt="">
                            <div class="home__modal__dialog-winner__box1 d-flex align-items-center justify-content-center text-center">
                                <div>
                                    <div class="home__modal__dialog-winner__tx1">Mosquitoes killed</div>
                                    <div class="home__modal__dialog-winner__tx2">410</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="home__modal__dialog-winner__txt2">You are now <span>FULLY PROTECTED</span> <br>
                            for 3 years</div>
                    </div>
                </div>
            </div>
            <div class="home__modal__dialog-winner__footer">
                <a href="" class="home__modal__dialog-winner__footer__icon home__modal__dialog-winner__footer__icon--home"></a>
                <a href="" class="home__modal__dialog-winner__footer__icon home__modal__dialog-winner__footer__icon--cup"></a>
                <a href="" class="home__modal__dialog-winner__footer__icon home__modal__dialog-winner__footer__icon--reload"></a>
            </div>
        </div>
    </div>
</div>
<!--/myModal-winner-->

<!--myModal-losing-->
<div class="modal fade" id="myModal-losing" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered home__modal__dialog-winner">
        <div class="modal-content">
            <button type="button" class="close position-absolute home__modal__dialog-entergame__btnclose" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="home__modal__dialog-list__header">
                <span>GAME OVER</span>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="w-100 text-center home__modal__dialog-winner__box">
                    <div>
                        <div class="home__modal__dialog-winner__txt2">
                            You've failed to eliminate at least 50 mosquitoes within 1 minute.
                        </div>
                    </div>
                    <div>
                        <div class="position-relative text-left">
                            <img class="position-relative" style="z-index: 99" src="images/characterframes1.png" alt="">
                            <div style="padding-left: 150px;padding-right: 25px" class="home__modal__dialog-winner__box1 d-flex align-items-center justify-content-center text-center">
                                <div>
                                    <div class="home__modal__dialog-winner__t1">Justyn is now affected by Dengue Virus and needs to be hospitalized!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home__modal__dialog-winner__footer">
                <a href="" class="home__modal__dialog-winner__footer__icon home__modal__dialog-winner__footer__icon--home"></a>
                <a href="" class="home__modal__dialog-winner__footer__icon home__modal__dialog-winner__footer__icon--cup"></a>
                <a href="" class="home__modal__dialog-winner__footer__icon home__modal__dialog-winner__footer__icon--reload"></a>
            </div>
        </div>
    </div>
</div>
<!--/myModal-losing-->

<!--myModal-keymessages-->
<div class="modal fade" id="myModal-keymessages" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered home__modal__dialog-keymessages">
        <div class="modal-content">
            <button type="button" class="close position-absolute home__modal__dialog-entergame__btnclose" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="home__modal__dialog-list__header">
                <span>Why this game?</span>
            </div>
            <div class="modal-body">
                <div class="home__modal__dialog-keymessages__box1">
                    <article>
                        <p>Current prevention methods that largely rely on vector control are not enough to address the impact of dengue. Advances in dengue prevention e.g. vaccines are urgently needed to help protect people living in and traveling to endemic regions as the spread and risk of dengue grows.</p>
                        <p>TAKEDA is developing our very own dengue vaccine candidate, TAK-003, with the potential to change dengue prevention globally and locally in Malaysia. TAK-003 has demonstrated overall protection against dengue, including against hospitalization both in people, who have or have not previously been exposed to the disease.</p>
                        <p>Smallrig là một hãng phụ kiện chuyên làm các phụ kiện dành cho máy ảnh, máy quay, các phụ kiện sử dụng trên các set máy lớn, cho nên bộ tool này cũng có nhiều công năng phục vụ chính cho anh em làm nghề quay chụp.</p>
                        <p>Các loại ốc chân máy thường sẽ có một cái rãnh dài tầm 10mm để vặn, anh em cũng thường sử dụng đồng xu hoặc đầu vít dẹp để vặn. Nhưng mà đầu vít dẹp và đồng xu đều có phần tiếp xúc rất ít, không đủ lực và nếu con ốc hơi dỏm một tí thì dễ bị hư và kẹt luôn máy ảnh. Đầu dẹp trên bộ tool này được thiết kế có bản rộng vừa với ốc, cho diện tích tiếp xúc lớn, mình vặn rất chắc tay, và ốc cứng hơn so với vặn bằng các tool khác.</p>
                        <p>Mặt dưới cũng có các đường sọc caro chéo, nhưng còn có thêm các lỗ ốc để chứa ốc dự phòng, và mình nhận ra được 2 lỗ có kích cỡ ốc ¼" mà anh em thường sử dụng. Các lỗ ốc này mình thấy cho đẹp thôi vì vặn vào dự phòng vừa vướng và chỉ để được các loại ốc có kích thước rất ngắn, không có tính ứng dụng nhiều.
                        </p>
                    </article>
                </div>
                <div class="home__modal__dialog-keymessages__box2 text-center">
                    <a href="" class="home__modal__dialog-entergame__btn1 btn btn-secondary">BACK</a>
                    <a href="" class="home__modal__dialog-entergame__btn2 btn btn-secondary">NEXT</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/myModal-keymessages-->
<script>
    $('#myModal-keymessages').modal('show');
</script>
<?php require "template-parts/layouts/footer.php"; ?>