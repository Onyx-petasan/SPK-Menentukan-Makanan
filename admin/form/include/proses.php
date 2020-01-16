<?php
include '../../../koneksi.php';

date_default_timezone_set('Asia/Jakarta');

if(!empty($_GET['action'])){
    //proses kategori
    if($_GET['action']=='penyakit'){
            //simpan
        if(!empty($_POST['submit'])){ //jika GET_act maka masok 
            if($_POST['submit'] == 'Simpan'){ 
            //jika submit bernilai simpan maka masok
                $SQL =mysql_query("
                    INSERT INTO 
                        tb_penyakit (kode_penyakit,nama_penyakit)
                    VALUES 
                        ('$_POST[kode_penyakit]','$_POST[nama_penyakit]')
                "); //sql untuk menyimpan data kategori
                if ($SQL) { //jika simpan berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Penyakit Berhasil diinput!');
                        window.location='../../home.php?page=penyakit';
                        </script>";
                }
            }
            //UBAH
            elseif($_POST['submit'] == 'Ubah'){ 
            //jika submit bernilai ubah maka masok
                $SQL =mysql_query("
                    UPDATE 
                        tb_penyakit
                    SET 
                        nama_penyakit = '$_POST[nama_penyakit]'
                    WHERE 
                        kode_penyakit = '$_POST[kode_penyakit]'
                "); //sql untuk merubah data kategori
                if ($SQL) { //jika ubah berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Penyakit Berhasil diubah!');
                        window.location='../../home.php?page=penyakit';
                        </script>";
                }
            }
            //Jika Gagal
            else{
                echo "Data Penyakit Gagal Disimpan, Silahkan diulangi!"; 
            } 
        }
        //DELETE 

        elseif(!empty($_GET['del'] OR $_GET['del']==0)){ //jika ada GET bernilai del atau del berisi nol maka masok proses hapus
                mysql_query("DELETE FROM tb_penyakit WHERE kode_penyakit='".$_GET['del']."'"); //pokoke proses delete
                echo" <script language='JavaScript'>
                        alert('Data Penyakit Berhasil dihapus!');
                        window.location='../../home.php?page=penyakit';
                        </script>"; // balik maning
        }
        else{ 
            echo '<script>window.location=history.go(-1)</script>'; //jika tidak act dan del maka balik
        }
    }
    //proes prodi mandeg

    //proses golongan darah
    if($_GET['action']=='golongandarah'){
            //simpan
        if(!empty($_POST['submit'])){ //jika GET_act maka masok 
            if($_POST['submit'] == 'Simpan'){ 
            //jika submit bernilai simpan maka masok
                $SQL =mysql_query("
                    INSERT INTO 
                        tb_golongandarah (kode_golongandarah,nama_golongandarah)
                    VALUES 
                        ('$_POST[kode_golongandarah]','$_POST[nama_golongandarah]')
                "); //sql untuk menyimpan data kategori
                if ($SQL) { //jika simpan berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Golongan Darah Berhasil diinput!');
                        window.location='../../home.php?page=golongandarah';
                        </script>";
                }
            }
            //UBAH
            elseif($_POST['submit'] == 'Ubah'){ 
            //jika submit bernilai ubah maka masok
                $SQL =mysql_query("
                    UPDATE 
                        tb_golongandarah
                    SET 
                        nama_golongandarah = '$_POST[nama_golongandarah]'
                    WHERE 
                        kode_golongandarah = '$_POST[kode_golongandarah]'
                "); //sql untuk merubah data kategori
                if ($SQL) { //jika ubah berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Golongan Darah Berhasil diubah!');
                        window.location='../../home.php?page=golongandarah';
                        </script>";
                }
            }
            //Jika Gagal
            else{
                echo "Data Golongan Darah Gagal Disimpan, Silahkan diulangi!"; 
            } 
        }
        //DELETE 

        elseif(!empty($_GET['del'] OR $_GET['del']==0)){ //jika ada GET bernilai del atau del berisi nol maka masok proses hapus
                mysql_query("DELETE FROM tb_golongandarah WHERE kode_golongandarah='".$_GET['del']."'"); //pokoke proses delete
                echo" <script language='JavaScript'>
                        alert('Data Golongan Darah Berhasil dihapus!');
                        window.location='../../home.php?page=golongandarah';
                        </script>"; // balik maning
        }
        else{ 
            echo '<script>window.location=history.go(-1)</script>'; //jika tidak act dan del maka balik
        }
    }
    //proes prodi mandeg

    //proses golongan darah
    if($_GET['action']=='makananpokok'){
            //simpan
        if(!empty($_POST['submit'])){ //jika GET_act maka masok 
            if($_POST['submit'] == 'Simpan'){ 
            //jika submit bernilai simpan maka masok
                $SQL =mysql_query("
                    INSERT INTO 
                        tb_makananpokok (kode_makananpokok,nama_makananpokok)
                    VALUES 
                        ('$_POST[kode_makananpokok]','$_POST[nama_makananpokok]')
                "); //sql untuk menyimpan data kategori
                if ($SQL) { //jika simpan berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Makanan Pokok Berhasil diinput!');
                        window.location='../../home.php?page=makananpokok';
                        </script>";
                }
            }
            //UBAH
            elseif($_POST['submit'] == 'Ubah'){ 
            //jika submit bernilai ubah maka masok
                $SQL =mysql_query("
                    UPDATE 
                        tb_makananpokok
                    SET 
                        nama_makananpokok = '$_POST[nama_makananpokok]'
                    WHERE 
                        kode_makananpokok = '$_POST[kode_makananpokok]'
                "); //sql untuk merubah data kategori
                if ($SQL) { //jika ubah berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Makanan Pokok Berhasil diubah!');
                        window.location='../../home.php?page=makananpokok';
                        </script>";
                }
            }
            //Jika Gagal
            else{
                echo "Data Golongan Darah Gagal Disimpan, Silahkan diulangi!"; 
            } 
        }
        //DELETE 

        elseif(!empty($_GET['del'] OR $_GET['del']==0)){ 
        //jika ada GET bernilai del atau del berisi nol maka masok proses hapus
                mysql_query("DELETE FROM tb_makananpokok WHERE kode_makananpokok='".$_GET['del']."'"); 
                //pokoke proses delete
                echo" <script language='JavaScript'>
                        alert('Data Makanan Pokok Berhasil dihapus!');
                        window.location='../../home.php?page=makananpokok';
                        </script>"; 
        // balik maning
        }
        else{ 
            echo '<script>window.location=history.go(-1)</script>'; 
            //jika tidak act dan del maka balik
        }
    }
    //proes prodi mandeg

     //proses golongan darah
    if($_GET['action']=='laukpauk'){
            //simpan
        if(!empty($_POST['submit'])){ //jika GET_act maka masok 
            if($_POST['submit'] == 'Simpan'){ 
            //jika submit bernilai simpan maka masok
                $SQL =mysql_query("
                    INSERT INTO 
                        tb_laukpauk (kode_laukpauk,nama_laukpauk)
                    VALUES 
                        ('$_POST[kode_laukpauk]','$_POST[nama_laukpauk]')
                "); //sql untuk menyimpan data kategori
                if ($SQL) { //jika simpan berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Lauk Pauk Berhasil diinput!');
                        window.location='../../home.php?page=laukpauk';
                        </script>";
                }
            }
            //UBAH
            elseif($_POST['submit'] == 'Ubah'){ 
            //jika submit bernilai ubah maka masok
                $SQL =mysql_query("
                    UPDATE 
                        tb_laukpauk
                    SET 
                        nama_laukpauk = '$_POST[nama_laukpauk]'
                    WHERE 
                        kode_laukpauk = '$_POST[kode_laukpauk]'
                "); //sql untuk merubah data kategori
                if ($SQL) { //jika ubah berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Lauk Pauk Berhasil diubah!');
                        window.location='../../home.php?page=laukpauk';
                        </script>";
                }
            }
            //Jika Gagal
            else{
                echo "Data Golongan Darah Gagal Disimpan, Silahkan diulangi!"; 
            } 
        }
        //DELETE 

        elseif(!empty($_GET['del'] OR $_GET['del']==0)){ //jika ada GET bernilai del atau del berisi nol maka masok proses hapus
                mysql_query("DELETE FROM tb_laukpauk WHERE kode_laukpauk='".$_GET['del']."'"); //pokoke proses delete
                echo" <script language='JavaScript'>
                        alert('Data Makanan Pokok Berhasil dihapus!');
                        window.location='../../home.php?page=laukpauk';
                        </script>"; // balik maning
        }
        else{ 
            echo '<script>window.location=history.go(-1)</script>'; //jika tidak act dan del maka balik
        }
    }
    //proes prodi mandeg

     //proses golongan darah
    if($_GET['action']=='sayuran'){
            //simpan
        if(!empty($_POST['submit'])){ //jika GET_act maka masok 
            if($_POST['submit'] == 'Simpan'){ 
            //jika submit bernilai simpan maka masok
                $SQL =mysql_query("
                    INSERT INTO 
                        tb_sayur (kode_sayur,nama_sayur)
                    VALUES 
                        ('$_POST[kode_sayur]','$_POST[nama_sayur]')
                "); //sql untuk menyimpan data kategori
                if ($SQL) { //jika simpan berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Sayuran Berhasil diinput!');
                        window.location='../../home.php?page=sayuran';
                        </script>";
                }
            }
            //UBAH
            elseif($_POST['submit'] == 'Ubah'){ 
            //jika submit bernilai ubah maka masok
                $SQL =mysql_query("
                    UPDATE 
                        tb_sayur
                    SET 
                        nama_sayur = '$_POST[nama_sayur]'
                    WHERE 
                        kode_sayur = '$_POST[kode_sayur]'
                "); //sql untuk merubah data kategori
                if ($SQL) { //jika ubah berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Sayuran Berhasil diubah!');
                        window.location='../../home.php?page=sayuran';
                        </script>";
                }
            }
            //Jika Gagal
            else{
                echo "Data Golongan Darah Gagal Disimpan, Silahkan diulangi!"; 
            } 
        }
        //DELETE 

        elseif(!empty($_GET['del'] OR $_GET['del']==0)){ //jika ada GET bernilai del atau del berisi nol maka masok proses hapus
                mysql_query("DELETE FROM tb_sayur WHERE kode_sayur='".$_GET['del']."'"); //pokoke proses delete
                echo" <script language='JavaScript'>
                        alert('Data Sayuran Berhasil dihapus!');
                        window.location='../../home.php?page=sayuran';
                        </script>"; // balik maning
        }
        else{ 
            echo '<script>window.location=history.go(-1)</script>'; //jika tidak act dan del maka balik
        }
    }
    //proes prodi mandeg

     //proses golongan darah
    if($_GET['action']=='buah'){
            //simpan
        if(!empty($_POST['submit'])){ //jika GET_act maka masok 
            if($_POST['submit'] == 'Simpan'){ 
            //jika submit bernilai simpan maka masok
                $SQL =mysql_query("
                    INSERT INTO 
                        tb_buah (kode_buah,nama_buah)
                    VALUES 
                        ('$_POST[kode_buah]','$_POST[nama_buah]')
                "); //sql untuk menyimpan data kategori
                if ($SQL) { //jika simpan berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Buah Berhasil diinput!');
                        window.location='../../home.php?page=buah';
                        </script>";
                }
            }
            //UBAH
            elseif($_POST['submit'] == 'Ubah'){ 
            //jika submit bernilai ubah maka masok
                $SQL =mysql_query("
                    UPDATE 
                        tb_buah
                    SET 
                        nama_buah = '$_POST[nama_buah]'
                    WHERE 
                        kode_buah = '$_POST[kode_buah]'
                "); //sql untuk merubah data kategori
                if ($SQL) { //jika ubah berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Buah Berhasil diubah!');
                        window.location='../../home.php?page=buah';
                        </script>";
                }
            }
            //Jika Gagal
            else{
                echo "Data Golongan Darah Gagal Disimpan, Silahkan diulangi!"; 
            } 
        }
        //DELETE 

        elseif(!empty($_GET['del'] OR $_GET['del']==0)){ //jika ada GET bernilai del atau del berisi nol maka masok proses hapus
                mysql_query("DELETE FROM tb_buah WHERE kode_buah='".$_GET['del']."'"); //pokoke proses delete
                echo" <script language='JavaScript'>
                        alert('Data Buah Berhasil dihapus!');
                        window.location='../../home.php?page=buah';
                        </script>"; // balik maning
        }
        else{ 
            echo '<script>window.location=history.go(-1)</script>'; //jika tidak act dan del maka balik
        }
    }
    //proes prodi mandeg

    //proses golongan darah
    if($_GET['action']=='rulls'){
            //simpan
        if(!empty($_POST['submit'])){ //jika GET_act maka masok 
            if($_POST['submit'] == 'Simpan'){ 
            //jika submit bernilai simpan maka masok
                $SQL =mysql_query("
                    INSERT INTO 
                        tb_rulls (kode_1,kode_2,maka1,maka2,maka3,maka4,maka5,maka6,maka7,maka8,maka9,maka10,maka11,maka12,solusi1,solusi2,solusi3,solusi4,solusi5,solusi6,solusi7,solusi8,solusi9,solusi10,solusi11,solusi12)
                    VALUES 
                        ('$_POST[kode_1]','$_POST[kode_2]','$_POST[maka1]','$_POST[maka2]','$_POST[maka3]','$_POST[maka4]','$_POST[maka5]','$_POST[maka6]','$_POST[maka7]','$_POST[maka8]','$_POST[maka9]','$_POST[maka10]','$_POST[maka11]','$_POST[maka12]','$_POST[solusi1]','$_POST[solusi2]','$_POST[solusi3]','$_POST[solusi4]','$_POST[solusi5]','$_POST[solusi6]','$_POST[solusi7]','$_POST[solusi8]','$_POST[solusi9]','$_POST[solusi10]','$_POST[solusi11]','$_POST[solusi12]')
                "); //sql untuk menyimpan data kategori
                if ($SQL) { //jika simpan berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        
                        window.location='../../home.php?page=rulls';
                        </script>";
                }
            }
            //UBAH
            elseif($_POST['submit'] == 'Ubah'){ 
            //jika submit bernilai ubah maka masok
                $SQL =mysql_query("
                    UPDATE 
                        tb_rulls
                    SET 
                        kode_1 = '$_POST[kode_1]',
                        kode_2 = '$_POST[kode_2]',
                        maka1 = '$_POST[maka1]',
                        maka2 = '$_POST[maka2]',
                        maka3 = '$_POST[maka3]',
                        maka4 = '$_POST[maka4]',
                        maka5 = '$_POST[maka5]',
                        maka6 = '$_POST[maka6]',
                        maka7 = '$_POST[maka7]',
                        maka8 = '$_POST[maka8]',
                        maka9 = '$_POST[maka9]',
                        maka10 = '$_POST[maka10]',
                        maka11 = '$_POST[maka11]',
                        maka12 = '$_POST[maka12]',
                        solusi1 = '$_POST[solusi1]',
                        solusi2 = '$_POST[solusi2]',
                        solusi3 = '$_POST[solusi3]',
                        solusi4 = '$_POST[solusi4]',
                        solusi5 = '$_POST[solusi5]',
                        solusi6 = '$_POST[solusi6]',
                        solusi7 = '$_POST[solusi7]',
                        solusi8 = '$_POST[solusi8]',
                        solusi9 = '$_POST[solusi9]',
                        solusi10 = '$_POST[solusi10]',
                        solusi11 = '$_POST[solusi11]',
                        solusi12 = '$_POST[solusi12]'
                        
                    WHERE 
                        id_rulls = '$_POST[id_rulls]'
                "); //sql untuk merubah data kategori
                if ($SQL) { //jika ubah berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data rulls Berhasil diubah!');
                        window.location='../../home.php?page=rulls';
                        </script>";
                }
            }
            //Jika Gagal
            else{
                echo "Data Golongan Darah Gagal Disimpan, Silahkan diulangi!"; 
            } 
        }
        //DELETE 

        elseif(!empty($_GET['del'] OR $_GET['del']==0)){ //jika ada GET bernilai del atau del berisi nol maka masok proses hapus
                mysql_query("DELETE FROM tb_rulls WHERE id_rulls='".$_GET['del']."'"); //pokoke proses delete
                echo" <script language='JavaScript'>
                        alert('Data Rulls Berhasil dihapus!');
                        window.location='../../home.php?page=rulls';
                        </script>"; // balik maning
        }
        else{ 
            echo '<script>window.location=history.go(-1)</script>'; //jika tidak act dan del maka balik
        }
    }
    //proes prodi mandeg
}


?>