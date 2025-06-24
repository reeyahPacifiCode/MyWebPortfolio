
//Mortage Calculator
function formatNumber(num) {
  return num.toLocaleString('en-PH', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
}

function parseFormattedNumber(value) {
  return parseFloat(value.replace(/,/g, '')) || 0;
}

function updateCalculator() {
  const purchasePrice = parseFormattedNumber(document.getElementById('purchasePrice').value);
  const downPercent = parseFloat(document.getElementById('downPayment').value);
  const annualTaxes = parseFloat(document.getElementById('annualTaxes').value);
  const interestRate = parseFloat(document.getElementById('interestRate').value);
  const years = parseInt(document.getElementById('term').value);

  const downPaymentAmount = (purchasePrice * downPercent) / 100;
  const loanAmount = purchasePrice - downPaymentAmount;
  const monthlyInterestRate = interestRate / 100 / 12;
  const numberOfPayments = years * 12;
  const monthlyTaxes = annualTaxes / 12;
  const taxPercent = purchasePrice > 0 ? (annualTaxes / purchasePrice) * 100 : 0;

  let monthlyPayment = 0;
  if (monthlyInterestRate > 0) {
    monthlyPayment = loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numberOfPayments) /
                     (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);
  } else {
    monthlyPayment = loanAmount / numberOfPayments;
  }

  const totalMonthly = monthlyPayment + monthlyTaxes;

  document.getElementById('downPaymentValue').innerText = formatNumber(downPaymentAmount);
  document.getElementById('downPercent').innerText = downPercent.toFixed(1) + '%';
  document.getElementById('annualTaxesValue').innerText = formatNumber(annualTaxes);
  document.getElementById('annualTaxesPercent').innerText = taxPercent.toFixed(2) + '%';
  document.getElementById('interestRateValue').innerText = interestRate.toFixed(1);
  document.getElementById('monthlyPayment').innerText = `₱${formatNumber(totalMonthly)}`;
  document.getElementById('principalInterest').innerText = `₱${formatNumber(monthlyPayment)}`;
  document.getElementById('monthlyTaxes').innerText = `₱${formatNumber(monthlyTaxes)}`;
}

['purchasePrice', 'downPayment', 'annualTaxes', 'interestRate', 'term'].forEach(id => {
  document.getElementById(id).addEventListener('input', updateCalculator);
});

document.getElementById('purchasePrice').addEventListener('input', function(e) {
  const value = e.target.value.replace(/[^\d]/g, '');
  e.target.value = parseFormattedNumber(value).toLocaleString('en-PH');
});

updateCalculator();




