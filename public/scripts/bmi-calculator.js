// BMI Calculator with Visual Meter
function calculateBMI() {
    const height = document.getElementById('height').value / 100;
    const weight = document.getElementById('weight').value;
    const result = document.getElementById('bmi-result');
    const meter = result.querySelector('.bmi-meter');
    const infoText = result.querySelector('.bmi-info-text');

    if (!height || !weight) {
        infoText.textContent = 'Please enter valid height and weight';
        infoText.style.color = 'var(--primary-color)';
        meter.style.width = '0%';
        return;
    }

    const bmi = weight / (height * height);
    let category = '';
    let color = '';
    let width = 0;

    if (bmi < 18.5) {
        category = 'Underweight';
        color = '#4ECDC4';
        width = '25%';
    } else if (bmi < 24.9) {
        category = 'Normal';
        color = '#2ecc71';
        width = '50%';
    } else if (bmi < 29.9) {
        category = 'Overweight';
        color = '#f1c40f';
        width = '75%';
    } else {
        category = 'Obese';
        color = '#e74c3c';
        width = '100%';
    }

    meter.style.width = width;
    meter.style.backgroundColor = color;
    infoText.innerHTML = `
        <h3>BMI: ${bmi.toFixed(1)}</h3>
        <p>Category: <strong style="color: ${color}">${category}</strong></p>
    `;
}