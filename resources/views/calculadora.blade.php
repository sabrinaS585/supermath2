<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/calculadora.css') }}" />
    <link rel="icon" type="images icon" href="{{ asset('img/imgs/icon.ico') }}">
    <title>Calculadora</title>
</head>
<body>
    <div class="fundo">
        <h1>Calculadora Auxiliar</h1>
        
        <div class="calculadora">
            <input type="text" id="resultado">
            <table>
                <tr>
                    <td><button class="botao" onclick="clean()">C</button></td>
                    <td><button class="botao" onclick="back()"><</button></td>
                    <td><button class="botao" onclick="insert('/')">/</button></td>
                    <td><button class="botao" onclick="insert('*')">*</button></td>
                </tr>
                <tr>
                    <td><button class="botao" onclick="insert('7')">7</button></td>
                    <td><button class="botao" onclick="insert('8')">8</button></td>
                    <td><button class="botao" onclick="insert('9')">9</button></td>
                    <td><button class="botao" onclick="insert('-')">-</button></td>
                </tr>
                <tr>
                    <td><button class="botao" onclick="insert('4')">4</button></td>
                    <td><button class="botao" onclick="insert('5')">5</button></td>
                    <td><button class="botao" onclick="insert('6')">6</button></td>
                    <td><button class="botao" onclick="insert('+')">+</button></td>
                </tr>
                <tr>
                    <td><button class="botao" onclick="insert('1')">1</button></td>
                    <td><button class="botao" onclick="insert('2')">2</button></td>
                    <td><button class="botao" onclick="insert('3')">3</button></td>
                    <td rowspan="2"><button class="botao" style="height: 106px;" onclick="calcular()">=</button></td>
                </tr>
                <tr>
                    <td colspan="2"><button class="botao" onclick="insert('0')" style="width:106px;">0</button></td>
                    <td><button class="botao" onclick="insert('.')">.</button></td>
                </tr>
            </table>
        </div>
    </div>
    <script>
        function insert(num) {
            document.getElementById("resultado").value += num;
        }
        function clean() {
            document.getElementById('resultado').value = "";
        }
        function back() {
            var resultado = document.getElementById('resultado').value;
            document.getElementById('resultado').value = resultado.substring(0, resultado.length - 1);
        }
        function calcular() {
            var resultado = document.getElementById('resultado').value;
            if (resultado) {
                document.getElementById('resultado').value = eval(resultado);
            } else {
                document.getElementById('resultado').value = "ERRO";
            }
        }
    </script>
</body>
</html>
