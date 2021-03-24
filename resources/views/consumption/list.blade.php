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
            <img src="/imgs/long.png" alt="" width="100%" height="100%">
            <img src="/imgs/bant.png" alt="" width="100%" height="100%">
        </div>
        <div id="lots">
            <div id="loot">
                <div id="lot" >
                    <a href="{{route('payment',['id'=>1])}}"><img src="/imgs/shou1.png" alt="" width="100%" height="100%"></a>
                </div>
                <div id="lot" >
                    <a href="{{route('payment',['id'=>2])}}"><img src="/imgs/shou.png" alt="" width="100%" height="100%"></a>
                </div>
                <div id="lot" >
                    <a href="{{route('payment',['id'=>3])}}"><img src="/imgs/shou1.png" alt="" width="100%" height="100%"></a>
                </div>
                <div id="lot" >
                    <a href="{{route('payment',['id'=>4])}}"><img src="/imgs/shou.png" alt="" width="100%" height="100%"></a>
                </div>
            </div>

        </div>
        <div>
            <img src="/imgs/di.png" alt="" width="100%" height="100%">
        </div>
    </div>
</body>
</html>
<style>
    #lots{
        width: 100%;
        height: 450px;
    }
    #loot{
        width: 80%;
        height: 450px;
        margin-left: 10%;
    }
    #lot{
        width: 250px;
        height: 400px;
        background: #00a2d4;
        margin: 0 25px;
        float: left;
    }
</style>
