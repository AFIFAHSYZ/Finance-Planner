const descInput = document.getElementById('descInput');
const amountInput = document.getElementById('amountInput');
const typeInput = document.getElementById('typeInput');
const addBtn = document.getElementById('addBtn');
const transactionList = document.getElementById('transactionList');
const balanceEl = document.getElementById('balance');

// Load transactions from localStorage
let transactions = JSON.parse(localStorage.getItem('transactions')) || [];
transactions.forEach(trx => addTransactionToDOM(trx));

updateBalance();

// Add transaction
addBtn.addEventListener('click', () => {
  const desc = descInput.value.trim();
  const amount = parseFloat(amountInput.value);
  const type = typeInput.value;

  if (!desc || isNaN(amount)) return;

  const trx = { desc, amount, type };
  transactions.push(trx);
  addTransactionToDOM(trx);
  updateLocalStorage();
  updateBalance();

  descInput.value = '';
  amountInput.value = '';
});

// Add transaction to DOM
function addTransactionToDOM(trx) {
  const li = document.createElement('li');
  li.classList.add(trx.type);
  li.innerHTML = `
    ${trx.desc}: $${trx.amount.toFixed(2)}
    <button>Delete</button>
  `;

  li.querySelector('button').addEventListener('click', () => {
    transactions = transactions.filter(t => t !== trx);
    li.remove();
    updateLocalStorage();
    updateBalance();
  });

  transactionList.appendChild(li);
}

// Update balance
function updateBalance() {
  const balance = transactions.reduce((acc, trx) => {
    return trx.type === 'income' ? acc + trx.amount : acc - trx.amount;
  }, 0);
  balanceEl.textContent = balance.toFixed(2);
}

// Save to localStorage
function updateLocalStorage() {
  localStorage.setItem('transactions', JSON.stringify(transactions));
}
