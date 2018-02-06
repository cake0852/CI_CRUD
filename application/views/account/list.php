<?php 
    $this->load->helper('url');
    $accountController = 'account';
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<form method="GET" action=<?=base_url("account/insertpage/")?>>
<head>
<title>List</title>
</head>
<body>
    <table style="text-align: left; width: 100px;" border="1"
        cellpadding="2" cellspacing="2">
        <tbody>
            <tr>
                <td style="vertical-align: top;">id</td>
            </tr>
            
            <?php foreach ($data as $l1 ):  ?>
                <tr>                
                    <td><?=$l1['id']?></td>
                    <td><a href="<?=base_url("/{$accountController}/updatepage/?id=".$l1['id'])?>">Update</a></td>
                    <td><a href="<?=base_url("/{$accountController}/showpage/?id=".$l1['id'])?>">Show</a></td>
                    <td><a href="<?=base_url("/{$accountController}/delete/?id=".$l1['id'])?>">Delete</a></td></td>               
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button type="submit" name="submit"  class="btn">Insert</button>


</body>
</form>
</html>