<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Financial Planner</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">
        <header>FINANCIAL PLANNER</header>
<div class= "months"> </div>
    <div class="balance">
      Balance: MYR<span id="balance">0</span>
    </div>

    <div class="input-section">
      <input type="text" id="descInput" placeholder="Description">
      <input type="number" id="amountInput" placeholder="Amount">
      <select id="typeInput">
        <option value="income">Income</option>
        <option value="expense">Expense</option>
      </select>
      <button id="addBtn">Add</button>
    </div>

    <ul id="transactionList"></ul>
  </div>

  <script src="script.js"></script>
</body>
</html>
