<br>
        Total:
        <br>
        <p id="calc"></p>
        
        <br>
        Credit Card Type:
        <br>
        
        <div>
            <input type = "radio" id = "visa">
            Visa
            <br>

            <input type = "radio" id = "mastercard">
            MasterCard
            <br>

            <input type = "radio" id = "amexpress">
            American Express
            <br>
        </div>
        
        CC Number: 
        <input type = "text" id = "ccn" placeholder = "xxxx xxxx xxxx xxxx" size="16" maxlength="20" onchange="isCCNvalid()">
        <br>
        <span id="validccn" style='color:red' hidden="hidden">Invalid credit card number
        <br></span>
        
        CC Expiration: 
        <input type = "text" id = "expm" placeholder = "mm" size="2" maxlength="2"> / 
        <input type = "text" id = "expyr" placeholder = "yyyy" size="4" maxlength="4">
        
        <br>
        <input type = "reset" value = "Reset" onreset="default">
        <br>
        
        <br>
        <input type = "submit" value = "Submit" onsubmit = "confirmation.php" >
        <br>
        
        <br>