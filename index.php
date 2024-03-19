<!DOCTYPE html>
<html>
<body>

<form action="process.php" method="post">
  <div style="display: table-row;">
    <div style="display: table-cell; vertical-align: middle;">ФИО:</div>
    <div style="display: table-cell; vertical-align: middle;"><input type="text" name="name"></div>
  </div>
  <div style="display: table-row;">
    <div style="display: table-cell; vertical-align: middle;">E-mail:</div>
    <div style="display: table-cell; vertical-align: middle;"><input type="text" name="email"></div>
  </div>
  <div style="display: table-row;">
    <div style="display: table-cell; vertical-align: middle;">Телефон:&nbsp</div>
    <div style="display: table-cell; vertical-align: middle;"><input type="text" name="phone"></div>
  </div>
  <input type="submit" style="margin-top: 8px">
</form>
<br>

<form action="process.php" method="post">
  <div style="display: table-row;">
    <div style="display: table-cell; vertical-align: middle;">Количество строк:</div>
    <div style="display: table-cell; vertical-align: middle;"><input type="text" name="rows"></div>
  </div>
  <div style="display: table-row;">
    <div style="display: table-cell; vertical-align: middle;">Количество столбцов:&nbsp</div>
    <div style="display: table-cell; vertical-align: middle;"><input type="text" name="cols"></div>
  </div>
  <input type="submit"style="margin-top: 8px">
</form>

</body>
</html>
