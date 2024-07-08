<html>
    <head>
        <title></title>
        <style>
            table {
  font-family: Arial, Helvetica, sans-serif;
  color: blue;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: crimson 1px solid;
}
        table td {
            padding: 5px 10px;
            border-top: 1px solid #ffffff;
            border-bottom: 1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;
            background: #fafafa;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
            background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
        }
</style>
</head>
<body>
    <h1>Entry Nilai Web Programming</h1>
<form method="POST">
    <table border ="1">
        <tr>
            <th>No</th>
            <th align="center">NIM</th>
            <th align="center">Nama</th>
            <th align="center">Tugas</th>
            <th align="center">UTS</th>
            <th align="center">UAS</th>
        </tr>
        
        <?php

        $no = 3;
        for ($i = 1; $i <= $no; $i++) {
            echo " 
            <tr>
                <td>$i</td>
                <td><input type='text' name='nim[]'></td>
                <td><input type='text' name='nama[]'></td>
                <td><input type='text' name='tugas[]'></td>
                <td><input type='text' name='uts[]'></td>
                <td><input type='text' name='uas[]'></td>
            </tr>";
        }
        echo "<tr>
    <td colspan='6' align='center'><input type='submit' name='cetak' value='Cetak'></td>
    </tr>" ; 
    
        if (isset($_POST['cetak'])) {

         
            echo"<table border ='1'>
            <tr>
            <th align='left'>No</th>
            <th align='left'>NIM</th>
            <th align='left'>Nama</th>
            <th align='left'>Tugas</th>
            <th align='left'>UTS</th>
            <th align='left'>UAS</th>
            <th align='left'>Akhir</th>
            <th align='left'>Grade</th>
            </tr> </br>";

            $y = 0;
            for ($i = 0; $i < $no; $i++) {
                $x = ($_POST['tugas'][$i]) * 0.3 + ($_POST['uts'][$i]) * 0.3 + ($_POST['uas'][$i]) * 0.4;
                $y += $x;
               
                if ($x >= 90) {
                    $grade = "A";
                }else if ($x >= 85 && $x < 90){
                    $grade = "A-";
                }else if ($x >= 80 && $x < 85){
                    $grade = "B+";
                }else if ($x >= 75 && $x < 80){
                    $grade = "B";
                }else if ($x >= 70 && $x < 75){
                    $grade = "B-";
                }else if ($x >= 65 && $x < 70){
                    $grade = "C+";
                }else if ($x >= 60 && $x < 65){
                    $grade = "C-";
                }else if ($x >= 50 && $x < 60){
                    $grade = "D";
                }else if ($x >= 40 && $x < 50){
                    $grade = "E";
                }else if ($x >= 0 && $x < 40){
                    $grade = "T";
                }
        ?>
                
                <tr>
                    <td><?php echo $i + 1 ?></td>
                    <td><?php echo $_POST['nim'][$i] ?></td>
                    <td><?php echo $_POST['nama'][$i] ?></td>
                    <td><?php echo $_POST['tugas'][$i] ?></td>
                    <td><?php echo $_POST['uts'][$i] ?></td>
                    <td><?php echo $_POST['uas'][$i] ?></td>
                    <td><?php echo $x ?> </td>
                    <td><?php echo $grade ?> </td>
                </tr>
            <?php }
            echo"<h1>Nilai Web Programming</h1>";
            $rerata = $y / $i;
            echo "
            <tr>
            <td colspan ='8'>
            Total Nilai: $y <br>
            Rata-rata kelas: $rerata
            </td>
            </tr>";
            echo"</table>";
            ?>
        <?php }
        ?>

    </table>
</form>
            </body>
            </html>