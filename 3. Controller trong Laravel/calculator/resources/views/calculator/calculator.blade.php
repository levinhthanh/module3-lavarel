<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Máy tính đơn giản</title>
    <style>
        .form{
            padding: 2vw;
            border: solid 0.1vw darkgray;
            width: 31.5vw;
            margin: auto;
            margin-top: 3vw;
            background-color: whitesmoke
        }
        label{
            display: block;
            width: 95%;
            height: 1.2vw;
            margin: auto;
            border: solid 0.1vw darkgray;
            padding: 0.5vw;
            text-align: right;
            margin-bottom: 1vw;
            background-color: white
        }
        tr{
            width: 30vw;
        }
        td,form{
            width: 6vw;
            height: 5vw;
        }
        #btn_num{
            width: 100%;
            height: 100%;
            box-shadow: 0.1vw 0.1vw darkgrey
        }
        #btn_zero{
            width: 100%;
            height: 100%;
            box-shadow: 0.1vw 0.1vw darkgrey
        }
        #btn_result{
            width: 100%;
            height: 200%;
            box-shadow: 0.1vw 0.1vw darkgrey;
            margin-top: -2.5vw;
        }
        input:hover{
            cursor: pointer;
            color: white;
            background-color: darkorange
        }
    </style>
</head>
<body>
    <div class="form">
    <label id="label" style="display: {{$display1}}"></label>
    <label id="label" style="display: {{$display2}}">{{$res}}</label>
        <table>
            <tr>
                <td>
                    <input id="btn_num" type="submit" value="7" onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="8" onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="9" onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="/" onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="CE">
                </td>
            </tr>
            <tr>
                <td>
                    <input id="btn_num" type="submit" value="4" onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="5" onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="6" onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="*" onclick="inputValue(this.value)">
                </td>
                <td>
                    <form action="/" method="get">
                    <input id="btn_num" type="submit" value="C">
                </form>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="btn_num" type="submit" value="1" onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="2" onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="3" onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="-" onclick="inputValue(this.value)">
                </td>
                <td rowspan="2">
                <form action="{{route("calculator.result")}}" method="post">
                    @csrf
                    <input type="hidden"  id="calculation" name="calculation">
                    <input id="btn_result" type="submit" value="=">
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input id="btn_zero" type="submit" value="0" onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="." onclick="inputValue(this.value)">
                </td>
                <td>
                    <input id="btn_num" type="submit" value="+" onclick="inputValue(this.value)">
                </td>
            </tr>
        </table>
    </div>
    <script>
        function inputValue(value1){
            document.getElementById('calculation').value += value1;
            data = "";
            data += document.getElementById('calculation').value ;
            document.getElementById('label').innerHTML = data;
        }
    </script>
</body>
</html>
