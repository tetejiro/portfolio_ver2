<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        .antialiased{
            -webkit-font-smoothing:antialiased;
            -moz-osx-font-smoothing:grayscale;
            margin:0%;
        }
        .flex {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }
        .border {
            border: 1px solid #e5e7eb;
            border-radius: 5%;
            width: 25%;
            margin: 2.5%;
            padding: 1%;
        }
        .image {
            width: 10%;
            height: 10%;
        }
        .center {
            text-align: center;
        }
        .del {
            margin: 0;
            background: burlywood;
        }
        h1 {
            margin: 0;
            padding-top: 5%;
        }
        @media (max-width:600px) {
            h2 {
                text-align: center;
                margin-top: 5%;
            }
            .border {
                border: 1px solid #e5e7eb;
                border-radius: 5%;
                width: 100%;
                margin: 2.5%;
                padding: 5%;
            }
            .image {
                width: 15%;
                height: 15%;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
</head>

    <body class="antialiased">
        {{-- ここから --}}
        <section class="del">
            <h1 class="center">
                <div>{{ $target_user[0]->name }}さんから</div>
                <div>報告・相談があります。</div>
            </h1>
            {{--  --}}
            @if ($request->rsvp)
                <h4 class="center">※返信をお願いします。</h4>
            @else
                <h4 class="center">※返信の必要はありません。</h4>
            @endif



            {{-- ここから中身のブロック --}}
            <div class="flex">
                <div class="border">
                    <div>
                        <div class="image">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-1 h-1" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2>件名</h2>
                        <p>{{ $request->title }}</p>
                    </div>
                </div>
                <div class="border">
                    <div>
                        <div class="image">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-1 h-1" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2>詳細</h2>
                        <p>{{ $request->detail }}</p>
                    </div>
                </div>
                <div class="border">
                    <div>
                        <div class="image">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-1 h-1" viewBox="0 0 24 24">
                                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                            </svg>
                        </div>
                        <h2>その他</h2>
                        <p>{{ $request->other }}</p>
                    </div>
                </div>
            </div>
            {{-- ここから中身のブロック --}}

        </section>
        {{-- ここまで --}}

        <div>お手すきの際に、対応していただけますと嬉しいです。</div>
        <div>※このメールは送信専用です。返信はできません。</div>
    </body>
</html>
