@extends('layouts.app')

@section('content')
    <div class="container-timeline clearfix">
        <ul>
            <li class="event birth"><span>Geboorte: ma 10 dec. 2019</span></li>
            <li class="event marriage"><span>Huwelijk: ma 10 dec. 2019</span></li>
            <li class="event new"><span>Eerste contact: ma 10 dec. 2019</span></li>
            <li class="client">
                <header>
                    <img src="../img/person.png" alt="">
                    <section>
                        <small>ma 10 dec. 2019</small>
                        <p>
                            Erik Delen
                        </p>
                    </section>
                </header>
                <main>
                    <div class="filler">
                        <p>Tevredenheid: ma 10dec. 2019</p>
                        <span class="fill"></span>
                    </div>
                </main>
            </li>
            <li class="client">
                <header>
                    <img src="../img/person.png" alt="">
                    <section>
                        <small>ma 10 dec. 2019</small>
                        <p>
                            Erik Delen
                        </p>
                    </section>
                </header>
                <main>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorem est magnam perferendis placeat recusandae similique. Amet architecto, consequatur, earum enim eos fuga impedit maiores nemo, possimus quia quod temporibus.</p>
                </main>
            </li>
            <li class="event appointment"><span>Afspraak: ma 10 dec. 2019</span></li>
            <li class="account">
                <header>
                    <img src="../img/person.png" alt="">
                    <section>
                        <small>ma 10 dec. 2019</small>
                        <p>Erik Delen</p>
                    </section>
                </header>
                <main>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorem est magnam perferendis placeat recusandae similique. Amet architecto, consequatur, earum enim eos fuga impedit maiores nemo, possimus quia quod temporibus.</p>
                </main>
            </li>
        </ul>
        <aside>
            <!-- IF CLIENT -->
            @include("client_add_remark")
            @include("client_hapiness")
        </aside>
        <aside>
            <!-- IF ACCOUNT -->
            @include("account_add_remark")
        </aside>
    </div>
@endsection
