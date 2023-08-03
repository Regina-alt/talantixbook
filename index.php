<?php
include 'php\conf\db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="add_contacts">
        <p>Добавить контакт</p>
        <hr>
        <form action="php\scripts\add_contacts.php" method="POST">
            <input type="text" name="name" placeholder="Имя" required>
            <input type="text" name="phone_number" placeholder="Телефон" required>
            <button type="submit">Добавить</button>
        </form>
    </div>
    <div class="contacts">
        <p class="title_contacts">Список контактов</p>
        <hr>
        <?php
        $sql = "SELECT * FROM `contacts`";

        $res_data = mysqli_query($connect, $sql);


        foreach ($res_data as $contact) {
            ?>
            <div class="contact">
                <h4>
                    <?= $contact['name'] ?>
                    <a href='php\scripts\delete_contact.php?id=<?= $contact['id_contact'] ?>'>×</a>
                </h4>
                <p>
                    <?= $contact['phone_number'] ?>
                </p>

            </div>
            <?php
        }

        ?>
    </div>
</body>

</html>