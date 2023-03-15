<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
</head>

<body class="body">
    <form action="process_form.php">
        <fieldset>
            <legend>Personal Information</legend>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
	        <div>
		        <label for="postcode">Postcode</label>
		        <input type="text" name="postcode" id="postcode" required pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}"
		        title="Please enter a valid postcode"
		        >
	        </div>
            <div>
                <label for="telephone">Telephone</label>
                <input type="tel" name="telephone" id="telephone">
            </div>
            <div>
                <label for="date">Date</label>
                <input type="date" name="date" id="date">
            </div>
            <div>
                <label for="time">Time</label>
                <input type="time" name="time" id="time">
            </div>
        </fieldset>
        <fieldset>
            <legend>Description of yourself</legend>
            <div>
                <input type="hidden" name="hidden" value="hidden">
            </div>

            <div>
                <p>Text area</p>
	            <textarea name="textarea" id="textarea" placeholder="Content"></textarea>
            </div>

            <div>
                <label>
                    <input type="checkbox" name="checkbox" id="checkbox" value="yes"> I agree to the terms and
                    conditions
                </label>

            </div>
        </fieldset>
        <fieldset>
            <legend>Which colours whould you like?</legend>
            <div>
                <label>
                    <input type="Radio" name="colours[]" id="red" value="red"> Red
                </label>
                <br>

                <input type="Radio" name="colours[]" id="blue" value="blue">
                <label for="blue">Blue</label>
                <br>

                <input type="Radio" name="colours[]" id="green" value="green">
                <label for="green">Green</label>
            </div>

        </fieldset>
	    <fieldset>
		    <legend>
			    Select a country
		    </legend>
		    <div>
			    <label for="country">Country</label>
			    <select name="country" id="country">
				    <option value="uk">United Kingdom</option>
				    <option value="us">United States</option>
				    <option value="ca">Canada</option>
			    </select>
		    </div>
	    </fieldset>

	    <div>
		    <input type="submit" value="Submit">
	    </div>

    </form>
</body>

</html>