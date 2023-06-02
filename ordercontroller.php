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
