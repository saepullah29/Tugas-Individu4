<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    echo "<p>Hello, $name! Welcome to the Simple PHP Web App!</p>";
}
?>
<?php
// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple_php_web_app";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tangani data formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);

    // Simpan data ke database
    $sql = "INSERT INTO users (name) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Hello, $name! Welcome to the Simple PHP Web App! Your data has been saved to the database.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
?>
