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
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
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
                textarea: <textarea name="textarea" id="textarea" placeholder="Content"></textarea>
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

            <div>
                <input type="submit" value="Submit">
            </div>
        </fieldset>

    </form>
</body>

</html>