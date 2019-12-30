<style>#table{background: white;}</style>
<table id="table">
  <tr>
    <th>OPERADORA</th>
    <th>TIPO</th>
    <th>DOWNLOAD</th>
  </tr>
  <tr>
    <td>Vivo</td>
    <td>Ehi</td>

    <?php
    $arquivovivo = "/arquivos/VivoBRA.ehi";
    if (file_exists("/var/www$arquivovivo")) {
    echo '<td class="cell100 column4"> <a href="'.$arquivovivo.'"><b style="color: #1a7d8a;">Download</b></a> </td>';
    } else {
    echo '<td class="cell100 column4"> <a>S/ arquivo</a> </td>'; }
    ?>

  </tr>
  <tr>
    <td>Vivo 2</td>
    <td>Ehi</td>

    <?php
    $arquivovivo1 = "/arquivos/VivoBRA1.ehi";
    if (file_exists("/var/www$arquivovivo1")) {
    echo '<td class="cell100 column4"> <a href="'.$arquivovivo1.'"><b style="color: #1a7d8a;">Download</b></a> </td>';
    } else {
    echo '<td class="cell100 column4"> <a>S/ arquivo</a> </td>'; }
    ?>

  </tr>
  <tr>
    <td>Claro</td>
    <td>Ehi</td>

        <?php
        $arquivoclaro = "/arquivos/ClaroBRA.ehi";
        if (file_exists("/var/www$arquivoclaro")) {
        echo '<td class="cell100 column4"> <a href="'.$arquivoclaro.'"><b style="color: #1a7d8a;">Download</b></a> </td>';
        } else {
        echo '<td class="cell100 column4"> <a>S/ arquivo</a> </td>'; }
        ?>

  </tr>
  <tr>
    <td>Tim</td>
    <td>Ehi</td>

        <?php
        $arquivotim = "/arquivos/TimBRA.ehi";
        if (file_exists("/var/www$arquivotim")) {
        echo '<td class="cell100 column4"> <a href="'.$arquivotim.'"><b style="color: #1a7d8a;">Download</b></a> </td>';
        } else {
        echo '<td class="cell100 column4"> <a>S/ arquivo</a> </td>'; }
        ?>

  </tr>
  <tr>
    <td>Oi</td>
    <td>Ehi</td>

        <?php
        $arquivooi = "/arquivos/OiBRA.ehi";
        if (file_exists("/var/www$arquivooi")) {
        echo '<td class="cell100 column4"> <a href="'.$arquivooi.'"><b style="color: #1a7d8a;">Download</b></a> </td>';
        } else {
        echo '<td class="cell100 column4"> <a>S/ arquivo</a> </td>'; }
        ?>

  </tr>
</table>
