<?php

include("dbconnection.php");

// buatkan function addStudent()
function addStudent()
{
    // variabel global
    global $conn;

    // Silakan buat variabel di bawah dengan data yang diambil dari form
    $student_NIM = $_POST ["stuid"];
    $student_name = $_POST ["stuname"];
    $student_jurusan = $_POST["stuclass"];
    $student_angkatan = $_POST["stuangkatan"];

    // Periksa apakah NIM sudah ada
    $ret = mysqli_query($conn, "SELECT student_NIM FROM tb_student WHERE NIM = $student_NIM");
    mysqli_query($conn, $query);

    if (mysqli_num_rows($ret) == 0) {
        // Masukkan data ke tabel tb_student
        $query = "INSERT INTO tb_student (studid, stuname, stuclass, stuangkatan)
        VALUES ('$student_NIM', '$student_name', '$student_jurusan', '$student_angkatan')";
        $result = mysqli_query($conn, $query);

        /**
         * Buatlah logika untuk Memeriksa hasil dari operasi penambahan data mahasiswa.
         * 
         * Jika operasi berhasil, menampilkan pesan bahwa mahasiswa telah ditambahkan
         * dan mengarahkan pengguna ke halaman 'add-students.php'.
         * Jika operasi gagal, menampilkan pesan kesalahan.
         * Jika NIM sudah ada, menampilkan pesan bahwa NIM sudah ada.
         */
    } else {
        echo "
        <script>
            alert('Data failed');
            document.location.href = tb_student.php;
        </script>
        ";
        exit;
    }
}

function editStudent($id) {
    global $conn;

    // Ambil input dari form dan simpan dalam variabel
    

    // Update data mahasiswa berdasarkan ID
    $query = "";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Student data has been updated.")</script>';
        echo "<script>window.location.href ='manage-students.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}
?>