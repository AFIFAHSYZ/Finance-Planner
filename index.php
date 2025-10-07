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
    <!-- Header Section -->
    <header>FINANCIAL PLANNER</header>

    <!-- Month Buttons Section -->
    <div class="months"> 
      <!-- TODO: Add month buttons dynamically (e.g., Jan, Feb, Mar...) -->
    </div>

    <!-- Top Section: Balance and Spending Overview -->
    <div class="top-section">
      
      <!-- Current Balance Display -->
      <div class="balance">
        Balance: MYR <span id="balance">0</span>
      </div>
      
      <!-- Spending Chart / Visualization -->
      <div class="spend_meter">
        <!-- TODO: Add chart for total spending (Pie/Bar chart) -->
      </div>
    </div>

    <!-- Input Section: Add Transactions -->
    <div class="input-section">
      <!-- Transaction Description Input -->
      <input type="text" id="descInput" placeholder="Description">
      
      <!-- Transaction Amount Input -->
      <input type="number" id="amountInput" placeholder="Amount">
      
      <!-- Transaction Type Selector -->
      <select id="typeInput">
        <option value="income">Income</option>
        <option value="expense">Expense</option>
      </select>
      
      <!-- Add Transaction Button -->
      <button id="addBtn">Add</button>
    </div>

    <!-- Transaction List -->
    <ul id="transactionList"></ul>
  </div>

  <!-- External Script File -->
  <script src="script.js"></script>
</body>
</html>
