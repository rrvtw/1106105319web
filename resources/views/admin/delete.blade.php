@extends('app')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/affect.js') }}"></script>

<style>

    a {
        color: rgba(0, 0, 0, 0);
    }

    #one {
        width: 100vw;
        height: 100vh;
        padding: 3em;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        width: 80%;
        height: 100%;
        flex: 1;
        display: flex;
        flex-direction: row;
    }

    #left {
        flex: 2;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #issue-container {
        flex: 1;
        display: flex;
        flex-direction: column;

        height: 100%;
        overflow-y: auto;

        margin-top: 3em;
        margin-right: 2em;
        padding: 1em;
    }
    
    .row {
        height: 2em;
        margin: 2px;
        border-radius: 5px;
        display: block;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .row > h5 {
        line-height: 2em;
        width: 60px;
        display: inline-block;
    }

    .row > p {
        width: calc(100% - 70px);
        display: inline-block;
        color: white;
        line-height: 2em;
        padding: 0;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .checked {
        background-color: rgba(255, 255, 255, 0.4);
    }



    #right {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #function-bar {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        height: 90%;
    }

    #search-form {
        display: flex;
        flex-direction: column;
    }

    #new-one > h4 {
        display: inline-block;
        width: 60%;
    }

    #new-one > a {
        display: inline-block;
        width: 38%;
        text-decoration: none;
        color: white;
    }

    @media screen and (max-width: 500px){
        #one {
            padding: 0;
            padding-top: 3em;
        }

        .container {
            flex-direction: column-reverse;
        }

        #search {
            margin-top: 20px;
        }

        #search > h1 {
            display: none;
        }
    }
</style>

<form action="{{ route('delete_issue') }}" method="POST">
@csrf
<section id="one">

    <div class="container">

        <div id="left">

            <div id="issue-container">
                @php
                    $counter = 1;
                @endphp
                <!-- repeat field -->
                @foreach($issues as $issue)
                    <div class="row">
                        <h5>{{ $counter }}</h5>
                        <p>{{ $issue->title }}</p>
                        <input type="checkbox" class="ckbox" value="{{ $issue->id }}" name="ch[]" hidden>
                    </div>
                    @php
                        $counter++;
                    @endphp
                @endforeach
            </div>
        </div>

        <div id="right">
            <div id="function-bar">
                <h4>議題管理</h4>

                <div id="search">
                    <h1>刪除</h1>
                    <input type="submit" value="刪除">
                </div>

                <div id="new-one">
                    <h4>Add new issue</h4>
                    <a href="/issue/add" class="button">new</a>
                </div>
            </div>
        </div>

    </div>

</section>
</form>

@endsection