<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>银行审批</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{--    vue--}}
    {{--    <script src="https://cdn.staticfile.org/vue/2.2.2/vue.min.js"></script>--}}
    {{--    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}
</head>
<body>
<div>
    <div>
        <img src="/imgs/jiagou.png" alt="" width="100%" height="100%">
    </div>
    <div id="p">
        <form action="{{route('lot.add')}}" method="post">
            @csrf
            <input type="hidden" name="name" value="{{$lot['name']}}">
            <input type="hidden" name="id" value="{{$lot['id']}}">
            <input type="hidden" name="jia" value="{{$lot['jia']}}">
            <button type="submit" class="btn btn-danger">支付</button>
        </form>

    </div>
    <div>
        <img src="/imgs/jiagou1.png" alt="" width="100%" height="100%">
    </div>
</div>
</body>
</html>
<style>
    #p{
        width: 100%;
        height: 80px;
        /*background: #8D8D8D;*/
        text-align: center;
        padding-top: 10px;
    }
</style>
{{--<script>--}}
{{--    $('#kot').click(function () {--}}
{{--        $.ajax({--}}
{{--            type: "GET",--}}
{{--            url: "{{route('lot.add')}}",--}}
{{--            data: "",--}}
{{--            success: function(msg){--}}

{{--            }--}}
{{--        });--}}
{{--    })--}}
{{--</script>--}}
