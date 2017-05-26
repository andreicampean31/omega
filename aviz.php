<?php
  session_start();
  include 'dbh.php';
  $nr_aviz_print = $_GET['nr_aviz'];

  $sql_aviz_print = "SELECT firma FROM factura WHERE nr_aviz = '$nr_aviz_print'";
  $result_aviz_print = mysqli_query($conn, $sql_aviz_print);

  while($row_aviz_print = mysqli_fetch_array($result_aviz_print)){
    $firma_print = $row_aviz_print['firma'];
  }
  $sql_date_firma = "SELECT * FROM lista_firme WHERE firma = '$firma_print'";
  $result_date_firma = mysqli_query($conn, $sql_date_firma);

  while($row_date_firma = mysqli_fetch_array($result_date_firma)){
    $nr_inm_com = $row_date_firma['nr_inm_reg_com'];
    $CIF = $row_date_firma['cif'];
    $sediu = $row_date_firma['localitate'];
    $str = $row_date_firma['strada'];
    $nr = $row_date_firma['nr'];
    $jud = $row_date_firma['judet'];
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
    <link rel="stylesheet" href="css/aviz.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="img/Omega.png">
      </div>
      <div id="company">
        <div>Str. Poetului; Nr. 61/A; Bl. Z4; Sc. C; Ap.3; Arad; Romania;</div>
        <div>Tel. / Fax. 004 0257 359139; 004745314686</div>
        <div>Banca: ING Office Arad Aurel Vlaicu</div>
        <div>Cont RON: RO 38INGB0000999901524291</div>
        <div><a href="omegagroup96@gmail.com">omegagroup96@gmail.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">FURNIZOR:</div>
          <h2 class="name">S.C. OMEGA GROUP S.R.L.</h2>
          <div class="address">Nr. inm.reg.com/an: J 02/260/1996</div>
          <div class="address">C.U.I: 8444491</div>
          <div class="address">ARAD, Str. Poetului; Nr.61A; Bl. Z4; Sc. C; Ap.3</div>
          <div class="address">Judetul: ARAD</div>
        </div>
        <div id="client-right">
          <div class="to">CUMPARATOR:</div>
          <h2 class="name"><?php echo $firma_print; ?></h2>
          <div class="address">Nr. inm.reg.com/an: <?php echo $nr_inm_com; ?></div>
          <div class="address">Sediu: <?php echo $sediu?></div>
          <div class="address">Str. <?php echo $str;?>, Nr. <?php echo $nr; ?></div>
          <div class="address">Judetul: <?php echo $jud; ?></div>
        </div>

      </div>
      <div id="invoice">
        <h1>AVIZ DE INSOTIRE A MARFII</br> Nr: OG<?php echo $nr_aviz_print; ?></h1>
        <div class="date">Data: <?php echo date("d/m/Y"); ?></div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="unit">COD</br>PRODUS</th>
            <th class="desc">DESCRIERE</th>
            <th class="unit">U/M</th>
            <th class="qty">CANTITATE</br>LIVRATA</th>
            <th class="unit">PRET UNITAR</br>(fara TVA)</th>
            <th class="total">VALOARE</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $sql_tabel_aviz = "SELECT cod_produs, denumire_produs, mentiuni1, nr_comanda, U_M, cantitate FROM factura WHERE nr_aviz = '$nr_aviz_print'";
            $result_tabel_aviz = mysqli_query($conn, $sql_tabel_aviz);
            $i=1;
            while($row_tabel_aviz = mysqli_fetch_array($result_tabel_aviz)){
              echo '<tr>
                <td class="no">'.$i.'</td>
                <td class="unit">' .$row_tabel_aviz['cod_produs']. '</td>
                <td class="desc"><h3>' .$row_tabel_aviz['denumire_produs']. '</h3>' .$row_tabel_aviz['mentiuni1']. ' </br> Nr. comanda ' .$row_tabel_aviz['nr_comanda']. '</td>
                <td class="unit">' .$row_tabel_aviz['U_M']. '</td>
                <td class="qty">' .$row_tabel_aviz['cantitate']. '</td>
                <td class="unit"></td>
                <td class="total"></td>
              </tr>';
              $i=$i+1;
            }
           ?>

        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>$5,200.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 25%</td>
            <td>$1,300.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>$6,500.00</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>
