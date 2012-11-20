<form method="POST" action="<?php echo URL ?>user/create">
    Username <input type="text" name="username"/><br/>
    Password <input type="password" name="pass"/><br/>
    User level <select name="role">
        <option value="default">Default</option>
        <option value="admin">Admin</option>
    </select><br/><br/>
    <input type="submit" />
</form>
<br/>
<?php
    foreach($this->userList as $user){
        echo $user['username'];
        echo " <a href='".URL."user/edit/".$user['id']."'>Edit</a> 
            <a href='".URL."user/delete/".$user['id']."'>Delete</a><br/>";
    }
?>
