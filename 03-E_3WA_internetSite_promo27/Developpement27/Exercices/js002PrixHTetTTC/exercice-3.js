const TVA = 20.0;
var fHTPrice = prompt('HT price ?');
var fVoucher = 0;

if (confirm('Add a voucher ?')) {
    fVoucher = prompt('Voucher (%) ?');
}

var fHTTotal = fHTPrice - (fHTPrice * fVoucher / 100);
var fTTCTotal = fHTTotal * (1 + TVA / 100);

document.write('<dl><dt>Price (HT)</dt><dd>' + fHTPrice + '</dd></dl>');
document.write('<dl><dt>Voucher</dt><dd>' + fVoucher + '%</dd></dl>');
document.write('<dl><dt>Total (HT)</dt><dd>' + fHTTotal + '</dd></dl>');
document.write('<dl><dt>Total (TTC)</dt><dd>' + fTTCTotal + '%</dd></dl>');
