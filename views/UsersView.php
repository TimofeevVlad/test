<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php ROOT?>/css/style.css">
    <title>Тестовое задание</title>
</head>
<body>
<header>
</header>

<section>

    <table>
        <tr>
            <th>Имя</th>
            <th>Возраст</th>
            <th>Город</th>
        </tr>
        <?php foreach ($data as $user ): ?>
        <tr>
            <td><?php echo $user->name ?></td>
            <td><?php echo $user->age ?></td>
            <td><?php echo $user->city ?></td>
        </tr>
        <?php endforeach;?>
    </table>
    <form method="POST" action="">
            <p><label for="name">Имя <em>*</em></label><input type="text" id="name"></p>
            <p><label for="age">Возраст</label><input type="number" min="1" max="99" id="age"></p>
            <p><label for="city">Город</label>
                <select id="city">
                <?php foreach($data2 as $option) : ?>
                    <option value="<?php echo $option->id; ?>"><?php echo $option->name; ?></option>
                <?php endforeach; ?>
                </select>
            </p>
        <p><input type="submit" value="Отправить" name="submit"></p>
    </form>
    <div>
        <p><?php echo $_REQUEST['name']?></p>
    </div>
</section>

<footer>

</footer>
</body>
</html>