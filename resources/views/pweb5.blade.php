<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function changeText() {
            var span = document.getElementById("output"); //mendapatkan objek tulisan
            var textbox = document.getElementById("textbox"); //mendapatkan objek textbox

            textbox.style.color = "red"; //mengubah DOM CSS, color text diubah menjadi merah
            span.innerHTML = textbox.value; //membaca isi text box dan mengubah tulisan non input
        }
    </script>
</head>

<body>
    <h1>Pada week 5 ini terdapat dua file html lain yang bernama "pweb5-1", dan "pweb5-2</h1>
    <h2><a href="pweb5-1.html">pweb5-1</a></h2>
    <h2><a href="pweb5-2.html">pweb5-2</a></h2>
    <div class="container">
        <script>
            function showAlert() {
                alert("Selamat Anda mendapatkan 100 juta!");
            }
        </script>
        <button class="btn btn-primary" onclick="showAlert();">Klik di sini!</button>
        <br>
        <button onclick="changeText();" class="btn btn-warning">Click me!</button>
        <span id="output">replace me</span>
        <input id="textbox" type="text" class="form-control" />
    </div>
</body>

</html>
