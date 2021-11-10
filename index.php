<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Data Mahasiswa</title>
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <h1>Data Mahasiswa</h1><br>
        <table style="width: 100%;">
            <thead>
                <th>NIM</th>
                <th>NAMA</th>
                <th>PRODI</th>
                <th>ANGKATAN</th>
                <th></th>
            </thead>
            <tbody id="brdata">
            
            </tbody>
        </table>
            <h2>Tambah data</h2>
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="NIM"/></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="Nama"/></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td><input type="text" name="Prodi"/></td>
                </tr>
                <tr>
                    <td>Angkatan</td>
                    <td><input type="text" name="Angkatan"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button id ="tomboltambah" onclick="tambahdata()">Tambah data</button></td>
                    <td></td>
                    <td><button id ="tombolupdate" onclick="updatedata()">Update data</button></td>
                </tr>
            </table>
                <p id="pesan"></p>


        <script type="text/javascript">
        onload();


            function updatedata(){
                var NIM = $ ("[name='NIM']").val();
                var Nama = $ ("[name='Nama']").val();
                var Prodi = $ ("[name='Prodi']").val();
                var Angkatan = $ ("[name='Angkatan']").val(); 

                $.ajax({
                    type: "POST",
                    data: "NIM="+NIM+"&Nama="+Nama+"&Prodi="+Prodi+"&Angkatan="+Angkatan,
                    url :'updatedata.php',
                    success : function(result){
                    var objResult=JSON.parse(result);
                    $("#pesan").html(objResult.pesan);

                    onload();
                    }
                })
            }



            function tambahdata(){
                var NIM = $ ("[name='NIM']").val();
                var Nama = $ ("[name='Nama']").val();
                var Prodi = $ ("[name='Prodi']").val();
                var Angkatan = $ ("[name='Angkatan']").val();

                $.ajax({
                    type: "POST",
                    data: "NIM="+NIM+"&Nama="+Nama+"&Prodi="+Prodi+"&Angkatan="+Angkatan,
                    url :'tambahdata.php',
                    success : function(result){
                    var objResult=JSON.parse(result);
                    $("#pesan").html(objResult.pesan);

                    onload();
                    }
                })
            }



            function pilihdata(NIMx){
                var NIM=NIMx;
                $.ajax({
                    type:"POST",
                    data :"NIM="+NIM,
                    url : "ambilNIM.php",
                    success : function(result){
                        var objResult=JSON.parse(result);
                        $("[name='NIM']").val(objResult.NIM);
                        $("[name='Nama']").val(objResult.Nama);
                        $("[name='Prodi']").val(objResult.Prodi);
                        $("[name='Angkatan']").val(objResult.Angkatan);
                        $("#tomboltambah").hide();
                        $("#tombolupdate").show();
                    }
                })
            }

            function hapusdata(NIM){
                $.ajax({
                    type:"POST",
                    data :"NIM="+NIM,
                    url : 'hapusdata.php',
                    success: function($result){
                        onload();
                    }
                })
            }

            function onload(){
                var dataHandler=$("#brdata");
                dataHandler.html("");
                $.ajax({
                type : "GET",
                data :"",
                url : 'ambildata.php',
                success : function(result){
                    var objResult=JSON.parse(result);
                    $.each(objResult,function(key,val){
                        var barisbaru=$("<tr>");
                        barisbaru.html("<td>"+val.NIM+"</td><td>"
                        +val.Nama+"</td><td>"+val.Prodi+"</td><td>"+val.Angkatan+"</td><td><button onclick='pilihdata("
                        +val.NIM+")'>Select</button><button onclick='hapusdata("+val.NIM+")'>Hapus</button></td>")
                        
                        dataHandler.append(barisbaru);
                        $("#tombolupdate").hide();
                        $("#tomboltambah").show();
                    })
                }
            })
            }

           
        </script>
    </body>
</html>