        <?php            
            if (isset($_POST['proses'])) {
                $nama = $_POST['nama_lengkap'];
                $mata_kuliah = $_POST['mata_kuliah'];
                $nilai_uts = $_POST['nilai_uts'];
                $nilai_uas = $_POST['nilai_uas'];
                $nilai_tugas = $_POST['nilai_tugas'];

                $persentase_uts = 0.3 * $nilai_uts;
                $persentase_uts = (30 * $nilai_uts) / 100;
                $persentase_uas = 0.35* $nilai_uas;
                $persentase_uas = (35 * $nilai_uas) / 100;
                $persentase_tugas = 0.35* $nilai_uas;
                $persentase_tugas = (35 * $nilai_uas) / 100;
                $nilai_total = $persentase_uts + $persentase_uts + $persentase_tugas + 5;

                    echo '<br/>Nama : '. $nama;
                    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
                    echo '<br/>Nilai UTS : ' . $nilai_uts;
                    echo '<br/>Nilai UAS : ' . $nilai_uas;
                    echo '<br/>Nilai Tugas : ' . $nilai_tugas;
                    echo '<br/>Nilai Total : ' . $nilai_total;
                
                    $grade_uts ='';
                    if ($nilai_uts >= 55) {
                        $grade_uts = 'A';
                        echo "<br />Nilai UTS anda Bagus!!!";
                    } else{
                        $grade_uts = 'B';
                        echo "<br/>Maaf Nilai UTS anda perlu diperbaiki :(";
                    }

                    $grade_uas ='';
                    if ($nilai_uas >= 55) {
                        $grade_uas = 'A';
                        echo "<br />Nilai UAS anda Bagus!!!";
                    } else{
                        $grade_uas = 'B';
                        echo "<br/>Maaf Nilai UAS anda perlu diperbaiki :(";
                    }

                    $grade_tugas ='';
                    if ($nilai_tugas >= 55) {
                        $grade_tugas = 'A';
                        echo "<br />Nilai Tugas anda Bagus!!!";
                    } else{
                        $grade_uts = 'B';
                        echo "<br/>Maaf Nilai Tugas anda perlu diperbaiki :(";
                    }
                    
                    echo "<br />Grade Nilai UTS anda : " . $grade_uts;
                    echo "<br />Grade Nilai UAS anda : " . $grade_uas;
                    echo "<br />Grade Nilai Tugas anda : " . $grade_tugas;

                    switch ($grade_uts) {
                        case 'A':
                            echo '<br />Predikat nilai : Sangat Memuaskan';
                            break;

                        default:
                            echo '<br />Predikat nilai : Memuaskan';
                            break;
                    }

                    switch ($grade_uas) {
                        case 'A':
                            echo '<br />Predikat nilai : Sangat Memuaskan';
                            break;

                        default:
                            echo '<br />Predikat nilai : Memuaskan';
                            break;
                    }

                    switch ($grade_tugas) {
                        case 'A':
                            echo '<br />Predikat nilai : Sangat Memuaskan';
                            break;

                        default:
                            echo '<br />Predikat nilai : Memuaskan';
                            break;
                    }

                } else {
                    echo 'Form belum disubmit';
                }
        ?>