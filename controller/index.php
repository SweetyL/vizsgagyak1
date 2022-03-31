<?php
    include "view/index.php";
    if(isset($_SESSION["id"])){
        echo"<table>
        <tr>
          <th>Rajtszám</th>
          <th>Név</th>
          <th>E-mail cím</th>
          <th>Nem</th>
        </tr>";
        if ($idk) {
            foreach($idk as $row) {
                $jelent->set_jelentkezo($row, $conn);
                if($jelent->get_nem()=="F"){
                    $nem = "Férfi";
                }else{
                    $nem = "Nő";
                }
                if($jelent->get_id()){
                    echo "<tr>";
                    echo '<td>'.$jelent->get_id().'</td>';
                    echo '<td>'.$jelent->get_nev().'</td>';
                    echo '<td>'.$jelent->get_email().'</td>';
                    echo '<td>'.$nem.'</td>';
                    echo "</tr>";
                }
                }
        }
        echo  "</table>";
    }
?>
