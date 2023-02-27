<html>
    <body>
        Please find below your entered details:<br>
        Type: <?php echo $_POST["type"]; ?><br>
        Existing customer? <?php echo $_POST["existing"]; ?><br>
        Account Number: <?php echo $_POST["accno"]; ?><br>
        Name: <?php echo $_POST["name"]; ?><br>
        Joint applicant: <?php echo $_POST["jointapplicant"]; ?><br>
        Father/Proprietor: <?php echo $_POST["father"]; ?><br>
        Nominee Name: <?php echo $_POST["nominee"]; ?><br>
        PAN/GIR No: <?php echo $_POST["pangir"]; ?><br>
        Contact numbers: <br>
        a. Home <?php echo $_POST["homeno"]; ?><br>
        b. Business <?php echo $_POST["businessno"]; ?><br>
        c. Mobile <?php echo $_POST["mobileno"]; ?><br>
        Address:
            <?php echo $_POST["houseno"]; ?>
            <?php echo $_POST["street"]; ?>
            <?php echo $_POST["building"];?>
            <?php echo $_POST["area"]; ?>
            <?php echo $_POST["city"]; ?>
            <?php echo $_POST["pin"]; ?><br>
        Billing Address: <?php echo $_POST["correspondence"]; ?><br>
        E-mail: <?php echo $_POST["mail1"]; ?>@<?php echo $_POST["mail2"]; ?><br>
        Gender: <?php echo $_POST["gender"]; ?><br>
        Date of Birth: <?php echo $_POST["dob"]; ?><br>
        Retired employee of: <?php echo $_POST["retired"]; ?><br>
        Purpose: <?php echo $_POST["purpose"]; ?><br>
        Service Type: <?php echo $_POST["servicetype"]; ?><br>
        Number of connections required: <?php echo $_POST["connections"]; ?><br>
        Telephone facilities: <?php echo $_POST["facilities1"]; ?><br>
        Video facilities: <?php echo $_POST["facilities2"]; ?><br>
        Telephone instrument required? <?php echo $_POST["instrument"]; ?><br>
        STB required? <?php echo $_POST["stb"]; ?><br>
        Type of ONT: <?php echo $_POST["ont"]; ?><br>
        Tariff package required: <br>
        a. Broadband <?php echo $_POST["broadbandtariff"]; ?><br>
        b. IPTV <?php echo $_POST["IPTVtariff"]; ?><br>
        c. Telephone <?php echo $_POST["telephonetariff"]; ?><br>
        Bill frequency: <?php echo $_POST["frequency"]; ?><br>
        Payment Mode: <?php echo $_POST["paymode"]; ?><br>
        Payment Details: <br>
        a. Amount <?php echo $_POST["amount"]; ?><br>
        b. DD No <?php echo $_POST["ddno"]; ?><br>
        c. Dated <?php echo $_POST["dated"]; ?><br>
        d. Drawn on <?php echo $_POST["drawnon"]; ?><br>
        e. Bank <?php echo $_POST["bank"]; ?><br>
        f. Branch <?php echo $_POST["branch"]; ?><br>
        <br>
        Signed On: <?php echo $_POST["signedon"]; ?><br>
        Date: <?php echo $_POST["date"]; ?><br>
    </body>
</html>