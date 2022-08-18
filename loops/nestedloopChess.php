<html> 
  <body> 
 
   <table width="300px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php
            for( $rows = 0; $rows < 8; $rows++) {
                echo "<tr>";
                for( $cols = 0; $cols < 8; $cols++) {
                    echo "<td height=30px width=30px bgcolor=black></td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
  </body>
  </html>