<html>
    <head>
        <title>Validasi Form</title>
    </head>
    <body>
        <form action="proses.php">
            <div style="margin: top 10px;">
                <label>Nama (Harus input nama)</label><br>
                <input type="text" name="nama">
            </div>
            <div style="margin: top 10px;">
                <label>Username (Harus input @)</label><br>
                <input type="text" name="email">
            </div>
            <div style="margin: top 10px;">
                <label>Username (Tidak boleh regex)</label><br>
                <input type="text" name="username">
            </div>
            <div style="margin: top 10px;">
                <label>Usia (Harus angka)</label><br>
                <input type="text" name="usia">
            </div>
            <div>
                <button>Submit</button>
            </div>
        </form>
    </body>
</html>