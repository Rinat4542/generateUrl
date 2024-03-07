<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <script src="{{asset('assets/js/bootstrap.min.js')}}" defer></script>
    <title>Url</title>
</head>
<body>

    <div class="w-25 p-3 m-4">
    <h3>Генератор ссылок</h3>
    <form action="{{ route('url.create') }}" method="post" id="upload">
        @csrf
        <div class="mb-2" >
            <input placeholder="Введите ссылку" type="text" name="url" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    <hr>
    <h4>Сгенерированные ссылки:</h4>
    <div class="w-25 p-3 m-4">
        @foreach ($url as $link)
            <tr>
                <td>{{$link->id}}</td>
                <td>{{$link->url}}</td>
                <td><a target="_blank" href="{{route('url.shortUrl', $link->short)}}">{{route('url.shortUrl', $link->short)}}</a></td>
            </tr>    
        @endforeach
    </div>
    </div>
</div>

    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function()
    {
        $('#upload').on('submit', function(event)
        {
            event.preventDefault();
            var data = new FormData(this)
            jQuery.ajax({
                url: "{{ url('/') }}",
                data: jQuery('#upload').serialize(),
                type:"post",

                success: function(data){
                    console.log(data)
                },
                error:function(data){
                }
            })
        })
    });
</script>
</html>