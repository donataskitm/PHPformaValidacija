<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forma</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
<section>
    <?php if(isset($_POST['send'])): ?>
    <?php validate($_POST);?>
    <?php if(empty($validation)){
            storeData();
        }?>
    <?php endif ?>
</section>
<?php
if(isset($validation)){
    foreach($validation as $error){
        echo $error;
            }
}

    ?>
<h1>Registracijos forma</h1>
<form name="regforma" action="#" method="post" id="regforma">
    <table align="center" border="0" >

        <tr>
            <td><lable for="username">Vardas:<span class="zv">*<span></lable></td>
            <td><input type="text" name="username" id="username" size="30" required></td>
        </tr>
        <tr>
            <td><lable for="usersurname">Pavardė:<span class="zv">*<span></lable></td>
            <td><input type="text" name="usersurname" id="usersurname" size="30" required>
            </td>
        </tr>
        <tr>
            <td><lable for="email">El. pašto adresas:<span class="zv">*<span></lable></td>
            <td><input type="email" name="email" id="email" size="30" required></td>
        </tr>

        <tr>
            <td>Padalinys:<span class="zv">*<span></td>
            <td>
                <select name="departments" id="departments" size="1" required>
                    <option value="default" selected>--- Pasirinkti  ---</option>
                        <?php for ($i = 0; $i<count($departments); $i++):?>
                        <option value="<?=$departments[$i];?>"><?=ucfirst($departments[$i]);?></option>
                        <?php endfor; ?>
                </select>
            </td>
        </tr>

        <tr>
            <td  class="lygl" height="25" valign="top">
                <label for="message">Žinutė:</label>
            </td>
            <td><textarea id="message" name="message" rows="4" cols="32"></textarea>
            </td>
        </tr>


        <tr>
            <td colspan="2" class="myg">
                <input value="Siųsti" type="submit" form="regforma" name="send" >
            </td>
        </tr>

            <?php
            foreach(showData() as $message):?>
        <tr>
            <td><?=$message;?></td>
        </tr>
            <?php endforeach; ?>


    </table>
</form>
</body>
</html>
