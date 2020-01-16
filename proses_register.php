<?php
include 'koneksi.php';

date_default_timezone_set('Asia/Jakarta');

if(!empty($_GET['action'])){
    
    //proses kategori
    if($_GET['action']=='register'){
            //simpan
        if(!empty($_POST['submit'])){ //jika GET_act maka masok 
            if($_POST['submit'] == 'Simpan'){ 
            //jika submit bernilai simpan maka masok
                $SQL =mysql_query("
                    INSERT INTO 
                        tb_user (username,password,nama,alamat,no_hp,level,daerah)
                    VALUES 
                        ('$_POST[username]','$_POST[password]','$_POST[nama]','$_POST[alamat]','$_POST[no_hp]','user','$_POST[daerah]')
                "); //sql untuk menyimpan data kategori
                if ($SQL) { //jika simpan berhasil maka menampilkan alert dan kembali 
                    $reg =mysql_query("
                    INSERT INTO 
                        tb_pengguna (username,password,nama,level)
                    VALUES 
                        ('$_POST[username]','$_POST[password]','$_POST[nama]','user')
                    ");
                    echo" <script language='JavaScript'>
                        alert('Anda Berhasil Mendaftar, Silahkan Login');
                        window.location='login.php';
                        </script>";
                }
            }
            //UBAH
            elseif($_POST['submit'] == 'Ubah'){ 
            //jika submit bernilai ubah maka masok
                $SQL =mysql_query("
                    UPDATE 
                        user
                    SET 
                        username = '$_POST[username]',
                        password = '$_POST[password]',
                        mana     = '$_POST[nama]',
                        alamat   = '$_POST[alamat]'
                        no_hp    = '$_POST[no_hp]'
                        level    = '$_POST[level]'
                        daerah   = '$_POST[daerahh]'
                    WHERE 
                        id = '$_POST[id]'
                "); //sql untuk merubah data kategori
                if ($SQL) { //jika ubah berhasil maka menampilkan alert dan kembali 
                    echo" <script language='JavaScript'>
                        alert('Data Penyakit Berhasil diubah!');
                        window.location='../../home.php?page=user';
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
                mysql_query("DELETE FROM user WHERE id='".$_GET['del']."'"); //pokoke proses delete
                echo" <script language='JavaScript'>
                        alert('Data Penyakit Berhasil dihapus!');
                        window.location='../../home.php?page=user';
                        </script>"; // balik maning
        }
        else{ 
            echo '<script>window.location=history.go(-1)</script>'; //jika tidak act dan del maka balik
        }
    }
}


?>