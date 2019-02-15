<?php $__env->startSection('content'); ?>
    <div class="container-timeline">
        <ul>
            <li class="client">
                <header>
                    <img src="../img/person.png" alt="">
                    <section>
                        <small>ma 10 dec. 2019</small>
                        <p>
                            Alexandre Delen
                        </p>
                    </section>
                </header>
                <main>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorem est magnam perferendis placeat recusandae similique. Amet architecto, consequatur, earum enim eos fuga impedit maiores nemo, possimus quia quod temporibus.</p>
                </main>
            </li>
            <li class="event"><span>Afspraak: ma 10 dec. 2019</span></li>
            <li class="account">
                <header>
                    <img src="../img/person.png" alt="">
                    <section>
                        <small>ma 10 dec. 2019</small>
                        <p>Alexandre Delen</p>
                    </section>
                </header>
                <main>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorem est magnam perferendis placeat recusandae similique. Amet architecto, consequatur, earum enim eos fuga impedit maiores nemo, possimus quia quod temporibus.</p>
                </main>
            </li>
        </ul>
        <aside>
        </aside>
        <aside>
        </aside>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>