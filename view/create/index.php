<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo (constant('URL')); ?>main/save" method="post">
        <input type="text" name="username" id="username">
        <input type="password" name="pass" id="pasword">
        <button type="submit">Submit</button>
    </form>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Password</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($this->users as $user) {
            ?>
                <tr>
                    <td><?php echo $user->id ?></td>
                    <td><?php echo $user->username ?></td>
                    <td><?php echo $user->password ?></td>
                    <td><button><a href="<?php echo (constant('URL')); ?>update/index?id=<?php echo $user->id ?>" style="text-decoration:none;color:black;">Update</a></button></td>

                    <td><button class="delete" id="<?php echo $user->id ?>">Delete</button></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>