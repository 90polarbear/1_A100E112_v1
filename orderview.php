<!DOCTYPE html>
<html>
<head>
  <title>早餐費用試算</title>
  <script>
    function calculateTotal() {
      var soyMilkPrice = 20;
      var milkTeaPrice = 25;
      var pearlPrice = 5;
      
      // 取得填寫的數量
      var soyMilkQuantity = 0;
      var milkTeaQuantity = 0;
      var pearlSelected = document.getElementById("pearlCheckbox").checked;
      
      if (document.getElementById("soyMilkRadio").checked) {
        soyMilkQuantity = parseInt(document.getElementById("soyMilkQuantity").value);
      } else if (document.getElementById("milkTeaRadio").checked) {
        milkTeaQuantity = parseInt(document.getElementById("milkTeaQuantity").value);
      }
      
      // 計算費用
      var total = 0;
      
      if (soyMilkQuantity > 0) {
        total = soyMilkPrice * soyMilkQuantity;
      } else if (milkTeaQuantity > 0) {
        total = milkTeaPrice * milkTeaQuantity;
        if (pearlSelected) {
          total += pearlPrice * milkTeaQuantity;
        }
      }
      
      // 顯示費用結果
      document.getElementById("total").innerText = total;
    }
  </script>
</head>
<body>
  <h1>早餐費用試算</h1>
  
  <form>
    <label for="name">訂購者：</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <input type="radio" id="soyMilkRadio" name="drink" value="soyMilk" onchange="calculateTotal()" checked>
    <label for="soyMilkRadio">豆漿（NT$20）數量：</label>
    <input type="number" id="soyMilkQuantity" name="soyMilkQuantity" min="0" value="0"><br><br>
    
    <input type="radio" id="milkTeaRadio" name="drink" value="milkTea" onchange="calculateTotal()">
    <label for="milkTeaRadio">奶茶（NT$25）數量：</label>
    <input type="number" id="milkTeaQuantity" name="milkTeaQuantity" min="0" value="0">
    <label for="pearlCheckbox">珍珠（NT$5）</label>
    <input type="checkbox" id="pearlCheckbox" name="pearlCheckbox" onchange="calculateTotal()"><br><br>
    
    <input type="button" value="計算費用" onclick="calculateTotal()">
  </form>
  
  <h2>費用試算結果：</h2>
  
  <p>總費用：<span id="total">0</span></p>
</body>
</html>
