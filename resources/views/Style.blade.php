<html>
    <head>
<title>CSS</title>
<link rel="stylesheet" href="mystyle.css">
<style>
    body{

        color: lightcoral;
    }
    p {
            text-align: center;
        }
    .salam{
        font-size: larger;
        text-align: right;
        font-weight: bold;
        text-transform: uppercase;
    }

    .garisbawah{
        text-decoration: underline;
        color: rgb(105, 13, 13);
    }

</style>
    </head>
    <body>
        <!-- Inline CSS, digunakan hanya 1 bagian di 1 halaman yang berbeda-->
        Hallo <b style="color :red; text-decoration: underline;
        text-shadow: 2px 2px 5px rgb(0, 0, 0)">apa</b> kabar?
        <!-- Inpage CSS, digunakan jika yang berbeda hanya di 1 halaman-->
        <div class="garisbawah salam">Hallo apa kabar?</div>
        <!-- External File, digunakan untuk global 1 situs-->
        <span class="sembunyi">Hallo apa kabar?</span>
        <p>Hallo apa kabar?</p>
    </body>
</html>
