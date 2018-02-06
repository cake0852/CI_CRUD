<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<form method="POST" action="/test/account/insert">
<fieldset>
    <legend>申請資料</legend>
    <label for="account">Account</label> 
    <input type="text"  name="account" /><br />

    <label for="country">Country</label> 
    <input type="text"  name="country" /><br />

    <br />

    <button type="submit" name="submit"  class="btn">Apply</button>
    <button type="submit" onClick=action="<?=base_url('account')?> class="btn"">List</button>
</fieldset>
</form>
</html>