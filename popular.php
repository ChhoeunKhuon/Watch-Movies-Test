<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Movies</title>
</head>
<body>
<table style="width:100%">
        <tr>
            <td colspan="1">
                <?php include('includeFiles/Head.php'); ?>
            </td>
        </tr>
        <tr>
            <td style="width:100%; vertical-align: top">
              <?php include('includeFiles/movieslist.php') ?>
            </td>
        </tr>
        <tr>
            <td style="width:100%;">
              <?php include('includeFiles/footer.php') ?>
            </td>
        </tr>
    </table>
</body>
</html>