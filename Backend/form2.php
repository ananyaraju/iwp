<!DOCTYPE html>
<html>
    <head>
        <style>
            .page {
                margin: 30px;
            }
            .header {
                display: flex;
                justify-content: space-around;
                margin-top: 30px;
            }
            .footer {
                display: flex;
                justify-content: space-between;
            }
            .photo {
                width: 65px;
                border: 1px solid black;
                padding: 40px;
                margin: 20px;
            }
            .headings {
                text-align: center
            }
            .main {
                margin: 50px;
            }
            label {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php 
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
        <div class="page">
            <div class="header">
                <div class="headings">
                    <h2>BHARAT SANCHAR NIGAM LIMITED</h2>
                    <h4>www.bharatsanchar.com</h4>
                    <h3>FORM FOR FIBER BASED SERVICES<br>NEW CONNECTION</h3>
                </div>
                <div class="photo">Affix self signed passport size photograph</div>
            </div>
            <form action="form2data.php" method="post">
                <div class="main">
                    <input type="radio" id="type" name="type" value="Company/Organizations">Company/Organizations
                    <input type="radio" id="type" name="type" value="Individuals">Individuals
                </div>
                (Please read the instructions before filling the form)<br><br>
                Whether existing customer of BSNL
                    <input type="radio" id="existing" name="existing" value="Yes">Yes
                    <input type="radio" id="existing" name="existing" value="No">No
                <br>
                If yes, please provide Account number:
                <input type="text" id="accno" name="accno">
                <br><br>
                <ol>
                    <li>A. Title/Name of Customer/Company/Film/Organization:<input type="text" id="name" name="name"><br>
                        B. Name of the joint application, if any: <input type="text" id="jointapplicant" name="jointapplicant">
                    </li>
                    <li>Name of Father/Husband/Group/Proprietor/Partner(s): <input type="text" id="father" name="father"></li>
                    <li>Nominee Name: <input type="text" id="nominee" name="nominee"><br></li>
                    <li>PAN/GIR No: <input type="text" id="pangir" name="pangir"><br></li>
                    <li>Contact Number, if any: 
                        <ul>
                            <li>Home: <input type="text" id="homeno" name="homeno"></li>
                            <li>Business: <input type="text" id="businessno" name="businessno"></li>
                            <li>Mobile: <input type="text" id="mobileno" name="mobileno"></li>
                        </ul>
                    </li>
                    <li>Complete address where service(s) is/are required:
                        <ul>
                            <li>House No: <input type="text" id="houseno" name="houseno"></li>
                            <li>Street/Road/Village: <input type="text" id="street" name="street"></li>
                            <li>Building/Apartment: <input type="text" id="building" name="building"></li>
                            <li>Area/Locality/Tehsil: <input type="text" id="area" name="area"></li>
                            <li>City/District: <input type="text" id="city" name="city"></li>
                            <li>Pin: <input type="text" id="pin" name="pin"></li>
                        </ul>
                    </li>
                    <li>Billing/Correspondence Address (if different from 5 above)<br>
                        <textarea name="correspondence" rows="5" cols="40"></textarea>
                    </li>
                    <li>E-mail address (if any): <input type="text" id="mail1" name="mail1">
                                                    @<input type="text" id="mail2" name="mail2"></li>
                    <li>Gender: <input type="radio" id="gender" value="Male" name="gender">Male
                                <input type="radio" id="gender" value="Female" name="gender">Female
                    <li>Date of Birth: <input type="text" id="dob" name="dob"></li>
                    <li>Whether the applicant is a retired or working employee of Govt/PSU/CPSU:
                        <input type="radio" id="retired" name="retired" value="Govt">Govt
                        <input type="radio" id="retired" name="retired" value="PSU">PSU
                        <input type="radio" id="retired" name="retired" value="CPSU">CPSU
                    </li>
                    <li>Purpose:
                        <input type="radio" id="purpose" name="purpose" value="Residence">Residence
                        <input type="radio" id="purpose" name="purpose" value="Business">Business
                        <input type="radio" id="purpose" name="purpose" value="Govt">Govt
                        <input type="radio" id="purpose" name="purpose" value="PSU">PSU
                    </li>
                    <li>Service Type:
                        <input type="radio" id="servicetype" name="servicetype" value="Broadband">Broadband
                        <input type="radio" id="servicetype" name="servicetype" value="IPTV/CABLE TV">IPTV/CABLE TV
                        <input type="radio" id="servicetype" name="servicetype" value="Telephone">Telephone
                        <input type="radio" id="servicetype" name="servicetype" value="Video">Video
                    </li>
                    <li>Number of connections required: <input type="text" id="connections" name="connections"></li>
                    <li>
                        A. Facilities required on telephones<br>
                        (tick whichever is required) (please affix photograph for ISD facility):
                            <br><input type="checkbox" id="facilities1" name="facilities1" value="STD">STD
                            <br><input type="checkbox" id="facilities1" name="facilities1" value="ISD">ISD
                            <br><input type="checkbox" id="facilities1" name="facilities1" value="CLI">CLI
                            <br><input type="checkbox" id="facilities1" name="facilities1" value="Hotline">Hotline
                            <br><input type="checkbox" id="facilities1" name="facilities1" value="Conferencing">Conferencing
                            <br><input type="checkbox" id="facilities1" name="facilities1" value="Call Forwarding">Call forwarding
                            <br><input type="checkbox" id="facilities1" name="facilities1" value="Hunting Facility">Hunting facility
                            <br><input type="checkbox" id="facilities1" name="facilities1" value="Abbreviated Dialing">Abbreviated dialing
                            <br>
                            B. Facilities required on video
                            (tick whichever is required) (please affix photograph for ISD facility):
                            <br><input type="checkbox" id="facilities2" name="facilities2" value="Video Conferencing">Video Conferencing
                            <br><input type="checkbox" id="facilities2" name="facilities2" value="Video Calls">Video Calls
                            <br><input type="checkbox" id="facilities2" name="facilities2" value="Others">Others
                            <br>
                    </li>
                    <li>Whether telephone instrument is required:
                        <input type="radio" id="instrument" name="instrument" value="Yes">Yes
                        <input type="radio" id="instrument" name="instrument" value="No">No
                    </li>
                    <li>
                        Whether STB is required: 
                        <input type="radio" id="stb" name="stb" value="Yes">Yes
                        <input type="radio" id="stb" name="stb" value="No">No
                    </li>
                    <li>Type of ONT:
                        <input type="radio" id="ont" name="ont" value="TypeA">Type A
                        <input type="radio" id="ont" name="ont" value="TypeB">Type B
                    </li>
                    <li>
                        A. Mention a tariff package required for
                        <ul>
                            <li>Broadband <input type="text" name="broadbandtariff" id="broadbandtariff"></li>
                            <li>IPTV <input type="text" name="IPTVtariff" id="IPTVtariff"></li>
                            <li>Telephone <input type="text" name="telephonetariff" id="telephonetariff"></li>
                        </ul>
                        B. Bill frequency
                        <input type="radio" id="frequency" name="frequency" value="Monthly">Monthly
                        <input type="radio" id="frequency" name="frequency" value="Yearly">Yearly
                        <input type="radio" id="frequency" name="frequency" value="Five Yearly">Five Yearly
                    </li>
                    <li>Payment Mode:
                        <input type="radio" id="paymode" name="paymode" value="Cash">Cash
                        <input type="radio" id="paymode" name="paymode" value="Demand Draft">Demand Draft
                    </li>
                    <li>Payment Details:
                        <br>Amount: <input type="text" name="amount" id="amount">
                        <br>DD No: <input type="text" name="ddno" id="ddno">
                        <br>Dated: <input type="text" name="dated" id="dated">
                        <br>Drawn on: <input type="text" name="drawnon" id="drawnon">
                        <br>Bank: <input type="text" name="bank" id="bank">
                        <br>Branch: <input type="text" name="branch" id="branch">
                    </li>
                </ol>
                <br>
                <p>I hereby declare that the information given above is true 
                    to the best of my knowledge and I will abide by the prevailing 
                    Telegraph Act/Rules framed thereunder & Tariffs as amended from 
                    time to time. I am not a defaulter on account of non-payment of 
                    bills for any telecom services provided by any service provider. 
                    In the event of any dispute concerning any telecom line, apparatus 
                    or appliance, bill etc., between me/us and BSNL, the matter will be 
                    referred to the sole Arbitrator, appointed by a nomincated authority 
                    in BSNL and shall be governed by the provisions of the Arbitration 
                    and Conciliation Act, 1996.
                </p>
                <div class="footer">
                    <div>
                        <br>
                        <h3>Signature of Customer/Authorized Signatory</h3>
                        <p>Signed On: </p>
                        <input type="text" name="signedon" id="signedon">
                    </div>
                    <div>
                        <br>
                        <h3>Signature of Customer/Authorized Signatory</h3>
                        <p>Date: </p>
                        <input type="text" name="date" id="date">
                    </div>
                </div>
                <br><br>
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </body>
</html>