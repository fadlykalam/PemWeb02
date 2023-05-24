<head>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body>
    <?php
        $ns1 = ['id'=>1,'Nama'=> 'Iqbal','nim'=>'011012356','uts'=>80,'uas'=>84,'tugas'=>78];
        $ns2 = ['id'=>2,'Nama'=> 'Hadi','nim'=>'011214453','uts'=>70,'uas'=>50,'tugas'=>68];
        $ns3 = ['id'=>3,'Nama'=> 'Dimas','nim'=>'011302365','uts'=>60,'uas'=>86,'tugas'=>70];
        $ns4 = ['id'=>4,'Nama'=> 'Fadly','nim'=>'011343478','uts'=>90,'uas'=>91,'tugas'=>82];
        $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
    ?>

    <h3 class="display-3" style="text-align: center;">Daftar Nilai Siswa</h3>
    <div class="p-3 mb-2 bg-primary text-white"></div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">STT TERPADU NURUL FIKRI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Profile</a>
          <a class="nav-link" href="#">Gallery</a>
          <a class="nav-link disabled">Graduate</a>
        </div>
      </div>
    </div>
  </nav>

    <table border="1" width="100%" class="table">
    <thead>
    <tr class="table-success">
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>Tugas</th>
    <th>Nilai Akhir</th>
    </tr>
    </thead>
    <tbody>

    <?php
        $nomor = 1;
        foreach($ar_nilai as $ns)
        {
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['Nama'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
        }
    ?>

    </tbody>
    </table>
    <br>
    <figure class="text-center">
  <blockquote class="blockquote">
    <p>“Pendidikan adalah senjata paling ampuh yang dapat Anda gunakan untuk mengubah dunia”</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    <cite title="Source Title">Nelson Mandela</cite>
  </figcaption>
</figure>
</body>