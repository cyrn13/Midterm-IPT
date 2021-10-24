@extends('base')

@section('content')

<!-- @include('nav') -->

    <div class="landing">


        <div class="page-content">
            <h1>CheapTalk.com</h1>
            <p>
           

            </p>
            <a href="#">Welcome</a>
            
        </div>
    </div>

    <!-- <div class="text">
    Producing evidence-based journalism comes at a cost. At a time when Australian media is in crisis, <br>
    The Conversation produces trusted news coverage written by experts and we rely on donors to keep our lights on. <br>
    If you value us, please show us by becoming a monthly donor.
    </div> -->


<style>

    *{
        margin: 0;
        padding: 0;
        font-family: "monserrat", sans-serif;
    }

    .landing-page {
        width: 100%;
        height: 100vh;
        background: #000;
        position: relative;
        overflow: hidden;
    }

    .landing-page::after{
        content:"";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: url(/image/message.jpg) no-repeat;
        background-size: cover;
        opacity: .3;
        animation: anim 25s linear infinite;
    }
    @keyframes anim{
        50% {
            transform: scale(2);
        }
        100%{
            transform: scale(1);
        }
    }

    .page-content{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        width: 100%;
        max-width: 800px;
        text-align: center;
        padding: 0 40px;
        box-sizing: border-box;
    }

    .page-content h1{
        color: #ff7979;
        text-transform: uppercase;
        font-size: 50px;
        font-weight: 900;
        margin-bottom: 20px;
    }

    .page-content p{
        color: #fff;
        margin-bottom: 20px;
    }

    .page-content a{
        display: inline-block;
        text-decoration: none;
        color: #ff7979;
        border: 2px solid #ff7979;
        text-transform: uppercase;
        padding: 10px 20px;
        transition: 0.4s linear;
    }

    .page-content a:hover{
        color: #fff;
        background: #ff7979;
    }

    .text{
        padding: 10px;
        text-align: justify;
    }

    .text div{
        margin-bottom: 6px;

    }
</style>