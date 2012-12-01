Edit User

<form method="POST" action="<?php echo URL ?>user/editSave/<?php echo $this->user[0]['id']?>">
    Username <input type="text" name="username" value="<?php echo $this->user[0]['username']?>"/><br/>
    Password <input type="password" name="pass" /><br/>
    User level <select name="role">
        <option value="default" <?php if($this->user[0]['role'] == 'default') echo 'selected'?>>Default</option>
        <option value="admin" <?php if($this->user[0]['role'] == 'admin') echo 'selected'?>>Admin</option>
    </select><br/><br/>
    <input type="submit" />
</form>