<!--файл src/Template/Layout/Email/html/send_email.ctp-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <title><?= $this->fetch('title') ?></title>
    <style type="text/css">
        h1{
            margin: 0;
        }
    </style>
</head>
<body>
    <?= $this->fetch('content') ?>
</body>
</html>