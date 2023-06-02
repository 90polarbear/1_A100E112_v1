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
      var soyMilkQuantity = parseInt(document.getElementById("soyMilkQuantity").value);
      var milkTeaQuantity = parseInt(document.getElementById("milkTeaQuantity").value);
      
      // 計算費用
      var soyMilkTotal = soyMilkPrice * soyMilkQuantity;
      var milkTeaTotal = (milkTeaPrice + pearlPrice) * milkTeaQuantity;
      var total = soyMilkTotal + milkTeaTotal;
      
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
    
    <label for="soyMilkQuantity">豆漿（NT$20）數量：</label>
    <input type="number" id="soyMilkQuantity" name="soyMilkQuantity" min="0" value="0"><br><br>
    
    <label for="milkTeaQuantity">奶茶（NT$25）數量：</label>
    <input type="number" id="milkTeaQuantity" name="milkTeaQuantity" min="0" value="0"><input type="加珍珠5元"><br><br>
    
    <input type="button" value="計算費用" onclick="calculateTotal()">
  </form>
  
  <h2>費用試算結果：</h2>
  
  <p>總費用：<span id="total">0</span></p>
</body>
</html>
