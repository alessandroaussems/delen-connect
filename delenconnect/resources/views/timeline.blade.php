@if (!empty(Auth::user()))
    {{$customer->role ?: '' }}
    <br>
    {{$customer->name}}
    <br>
    {{$customer->email}}
    <br>
@endif
@extends('layouts.app')

@section('content')
    <div class="container-timeline">
        <ul>
            <li class="client">
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
@endsection