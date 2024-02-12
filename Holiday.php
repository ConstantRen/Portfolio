<?php 
$cdate = date("F d, Y");
$ctime = date("h:i:s A");
$holidays = array(
    "Jan 1" => "New Year's Day (Regular Holiday)",
    "Feb 25" => "EDSA People Power Day (Special non-working Day)",
    "Apr 9" => "Araw ng Kagitingan (Regular Holiday)",
    "Apr 18" => "Maundy Thursday (Regular Holiday)",
    "Apr 19" => "Good Friday (Regular Holiday)",
    "May 1" => "Labor Day (Regular Holiday)",
    "Jun 12" => "Independence Day (Regular Holiday)",
    "Aug 21" => "Ninoy Aquino Day (Special non-working Day)",
    "Aug 26" => "National Heroes Day (Regular Holiday)",
    "Nov 1" => "All Saints' Day (Special non-working Day)",
    "Nov 30" => "Bonifacio Day (Regular Holiday)",
    "Dec 24" => "Christmas Eve (Special non-working Day)",
    "Dec 25" => "Christmas Day (Regular Holiday)",
    "Dec 30" => "Rizal Day (Regular Holiday)",
    "Dec 31" => "New Year's Eve (Special non-working Day)"
);
$tz_LDN=new DateTimeZone("Europe/London");
$tz_TYO=new DateTimeZone("Asia/Tokyo");
$tz_CBR=new DateTimeZone("Australia/Canberra");

$LDN = new DateTime("now",$tz_LDN);
$TYO = new DateTime("now",$tz_TYO);
$CBR = new DateTime("now",$tz_CBR);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Philippine Holidays 2024</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>PHILIPPINE HOLIDAYS 2024</h1>
    <div class="datetime">
        <p>Current Date & Time: <?php echo date("Y-m-d H:i:s"); ?></p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Holiday</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($holidays as $date_str => $holiday) {
                $date = date("F d", strtotime("$date_str " . date("Y")));
                echo "<tr>";
                echo "<td>$date</td>";
                echo "<td>$holiday</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<footer>
<p> London Time: <?= $LDN->format("g:i A") ?> Tokyo Time: <?= $TYO->format("g:i A")?> Canberra Time: <?= $CBR->format("g:i A") ?></p>
<p>Renell M. Constantino</p>

</footer?>

</body>
</html>
