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

    <script src="pweb5-1&5-2"></script>
    <script>
        function validateForm() {
            console.log("Ini baris 15");
            return false; //dimana pun ketemu return, akan exit function
            //perintah bawahnya tidak dijalankan
            console.log("Ini baris 17");
            return true; //dalam satu function, bisa ada lebih dari ada satu return
            console.log("Ini baris 19");
        }

        function validate() {
            var bil1 = document.getElementById("bil1");
            var bil2 = document.getElementById("bil2");

            if (bil1.value == "" && bil2.value == "") { //isiannya lupa gak diisi
                alert("Bilangan 1 dan 2 harus diisi");
                return false;
            }
            if (bil1.value == "") { //isiannya lupa gak diisi
                alert("Bilangan 1 harus diisi");
                bil1.focus();
                bil1.placeholder = "Mohon diisi angka";
                return false;
            }
            if (bil2.value == "") { //isiannya lupa gak diisi
                alert("Bilangan 2 harus diisi");
                bil2.focus();
                bil2.placeholder = "Mohon diisi angka";
                return false;
            }
        }

        function validateNRP() {
            var nrp = document.getElementById("nrp");

            if (nrp.value == "") {
                alert("NRP harus diisi!");
                nrp.focus();
                nrp.placeholder = "Mohon diisi dengan NRP yang tepat!"
                return false;
            }
            if (nrp.value.length == 10) {
                return true;
            } else {
                alert("NRP harus 10 digit!");
                nrp.focus();
                return false;
            }
            if (isNaN(nrp)) {
                alert("NRP harus berupa angka!")
                nrp.focus();
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <form action="http://www.detik.com" method="get" target="_blank" onsubmit="return validateNRP();">
            <div class="form-group">
                <label for="nrp">NRP:</label>
                <input type="text" id="nrp" class="form-control">
            </div>
            <input type="submit" value="Kirim" class="btn btn-primary">
        </form>
    </div>

    <h2>Week 6 sama dengan week5</h2>
</body>

</html>
