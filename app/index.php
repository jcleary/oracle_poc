<?php

echo "Proof of concent; PHP/Apache and Oracle XE";
echo "<br>";
echo "<br>";

require_once('db.php');

$stid = oci_parse($conn, "select id, name from users");
oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

