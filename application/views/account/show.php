<?php $this->load->helper('url');?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<form method="POST" action=<?=base_url("account/updatepage/?id=$id")?>>
<fieldset>
<div class="row">
<div class="col-xs-1  col-sm-5 col-md-5"></div>
<div class="col-xs-1 col-sm-4 col-md-4">
    <table style="text-align: left; width: 100px;" border="1"
    cellpadding="2" cellspacing="2" class="text-center">    
        <tbody>
            <tr>
                <td style="vertical-align: top;">id</td>
                <td style="vertical-align: top;">Account</td>
                <td style="vertical-align: top;">Country</td>
            </tr>
            <?php foreach ($data as $l1 ): ?>           
                <tr>
                <td><?=$l1['id']?></td>
                <td><?=$l1['account']?></td>
                <td><?=$l1['Country']?></td>
                </tr>
            <?php endforeach ?>           
        </tbody>
    </table>
    <button type="submit" name="submit"  class="btn">Update</button>
    <button type="submit" onClick=action="<?=base_url('account')?>" class=btn>List</button>
    </div>
</div>
    
    
</fieldset>
</form>
<sc
</html>