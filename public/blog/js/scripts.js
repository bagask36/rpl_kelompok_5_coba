/*!
 * Start Bootstrap - Modern Business v5.0.7 (https://startbootstrap.com/template-overviews/modern-business)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-modern-business/blob/master/LICENSE)
 */
// This file is intentionally blank
// Use this file to add JavaScript to your project
ScrollReveal().reveal(".bg-light", {
    delay: 100,
    distance: "50px",
    origin: "top",
    duration: 1000,
    easing: "ease-out",
    interval: 200,
});

ScrollReveal().reveal(".bg-white", {
    delay: 100,
    distance: "50px",
    origin: "bottom",
    duration: 1000,
    easing: "ease-out",
    interval: 200,
});

ScrollReveal().reveal(".card", {
    delay: 100, 
    distance: "50px",
    origin: "bottom",
    duration: 1000,
    easing: "ease-out",
    interval: 200,
});

ScrollReveal().reveal(".bg-dark", {
    delay: 100,
    distance: "50px",
    origin: "bottom",
    duration: 1000,
    easing: "ease-out",
    interval: 200,
});

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3000); // Ubah 3000 menjadi nilai timeout yang sesuai untuk kecepatan slideshow Anda
}
function formatNumber(input) {
    // Remove all non-digit characters, except for the decimal point
    let value = input.value.replace(/\D/g, "");

    // Format the number with periods as thousand separators
    value = new Intl.NumberFormat("id-ID").format(value);

    input.value = value;
}

function parseNumber(value) {
    // Remove all non-digit characters and parse as float
    return parseFloat(value.replace(/\./g, ""));
}

function calculateTax() {
    const brutoIncomeElement = document.getElementById("brutoIncome");

    // Validasi input Penghasilan Bruto
    if (brutoIncomeElement.value.trim() === "") {
        brutoIncomeElement.classList.add("is-invalid");
        return;
    } else {
        brutoIncomeElement.classList.remove("is-invalid");
    }
    const brutoIncome = parseNumber(brutoIncomeElement.value);

    const ptkp = parseFloat(document.getElementById("ptkp").value);

    const yearlyIncome = brutoIncome * 12;
    const jobCost = yearlyIncome * 0.05; // Biaya Jabatan 5%
    const netIncome = yearlyIncome - jobCost;
    const taxableIncome = Math.max(netIncome - ptkp, 0);

    let yearlyTax = 0;
    if (taxableIncome <= 0) {
        yearlyTax = 0;
    } else if (taxableIncome <= 60000000) {
        yearlyTax = taxableIncome * 0.05;
    } else if (taxableIncome <= 250000000) {
        yearlyTax = 60000000 * 0.05 + (taxableIncome - 60000000) * 0.15;
    } else if (taxableIncome <= 500000000) {
        yearlyTax =
            60000000 * 0.05 +
            190000000 * 0.15 +
            (taxableIncome - 250000000) * 0.25;
    } else if (taxableIncome <= 5000000000) {
        yearlyTax =
            60000000 * 0.05 +
            190000000 * 0.15 +
            250000000 * 0.25 +
            (taxableIncome - 500000000) * 0.3;
    } else {
        yearlyTax =
            60000000 * 0.05 +
            190000000 * 0.15 +
            250000000 * 0.25 +
            4500000000 * 0.3 +
            (taxableIncome - 5000000000) * 0.35;
    }

    const monthlyTax = yearlyTax / 12;

    const brutoIncomeFormatted = brutoIncome.toLocaleString("id-ID");
    const taxableIncomeFormatted = taxableIncome.toLocaleString("id-ID");
    const tarif =
        taxableIncome <= 60000000
            ? "5%"
            : taxableIncome <= 250000000
            ? "15%"
            : taxableIncome <= 500000000
            ? "25%"
            : taxableIncome <= 5000000000
            ? "30%"
            : "35%";
    const monthlyTaxFormatted = monthlyTax.toLocaleString("id-ID");

    document.getElementById("dpp").value = `${taxableIncomeFormatted}`;
    document.getElementById("tarif").value = tarif;
    document.getElementById("pph21").value = `${monthlyTaxFormatted}`;

    document.getElementById("brutoIncomeFormatted").value =
        brutoIncomeFormatted;
    document.getElementById("taxableIncomeFormatted").value =
        taxableIncomeFormatted;
    document.getElementById("tarifValue").value = tarif;
    document.getElementById("monthlyTaxFormatted").value = monthlyTaxFormatted;
}

document
    .getElementById("downloadPdfBtn")
    .addEventListener("click", async function () {
        const { PDFDocument } = PDFLib;

        const brutoIncomeFormatted = document.getElementById(
            "brutoIncomeFormatted"
        ).value;
        const taxableIncomeFormatted = document.getElementById(
            "taxableIncomeFormatted"
        ).value;
        const tarifValue = document.getElementById("tarifValue").value;
        const monthlyTaxFormatted = document.getElementById(
            "monthlyTaxFormatted"
        ).value;

        // Fetch the existing PDF
        const existingPdfBytes = await fetch(
            "/blog/assets/pdf/pph21format.pdf"
        ).then((res) => res.arrayBuffer());

        // Load a PDFDocument from the existing PDF bytes
        const pdfDoc = await PDFDocument.load(existingPdfBytes);

        // Get the first page of the document
        const pages = pdfDoc.getPages();
        const firstPage = pages[0];

        const fontSize = 11; // Ukuran font yang diinginkan, bisa disesuaikan

        firstPage.drawText(`Rp ${brutoIncomeFormatted}`, {
            x: 240,
            y: 604, // Sudah sesuai
            size: fontSize,
        });

        firstPage.drawText(`Rp ${taxableIncomeFormatted}`, {
            x: 240,
            y: 583, // Sudah sesuai
            size: fontSize,
        });

        firstPage.drawText(`${tarifValue}`, {
            x: 240,
            y: 562, // Sudah sesuai
            size: fontSize,
        });

        firstPage.drawText(`Rp ${monthlyTaxFormatted} (Per Bulan)`, {
            x: 240,
            y: 541, // Sesuaikan y menjadi 40
            size: fontSize,
        });

        // Serialize the PDFDocument to bytes (a Uint8Array)
        const pdfBytes = await pdfDoc.save();

        // Trigger the download
        const blob = new Blob([pdfBytes], { type: "application/pdf" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = "pph21_calculation.pdf";
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    });

function laporPPh21() {
    // Ambil nilai dari form kalkulator dan hapus pemisah ribuan
    const brutoIncomeFormatted = document
        .getElementById("brutoIncomeFormatted")
        .value.replace(/\./g, "");
    const taxableIncomeFormatted = document
        .getElementById("taxableIncomeFormatted")
        .value.replace(/\./g, "");
    const tarifValue = document.getElementById("tarifValue").value;
    const monthlyTaxFormatted = document
        .getElementById("monthlyTaxFormatted")
        .value.replace(/\./g, "");

    // Redirect ke halaman pelaporan dengan parameter query
    const url = new URL("http://127.0.0.1:8000/user/pelaporan-pajak/create");
    url.searchParams.set("brutoIncome", brutoIncomeFormatted);
    url.searchParams.set("ptkp", document.getElementById("ptkp").value);
    url.searchParams.set("tarif", tarifValue);
    url.searchParams.set("pph21", monthlyTaxFormatted);

    window.location.href = url.toString();
}

function formatNumber(input) {
    let value = input.value.replace(/\D/g, ""); // Hanya angka yang diperbolehkan
    value = new Intl.NumberFormat("id-ID").format(value); // Format dengan pemisah ribuan
    input.value = value;
}

// Extract query parameters and set form values
function formatNumber(input) {
    // Menghapus semua karakter non-digit
    let value = input.value.replace(/[^0-9]/g, "");

    // Format angka dengan pemisah ribuan
    value = new Intl.NumberFormat("id-ID").format(value);

    // Update nilai input
    input.value = value;
}

function parseNumber(value) {
    // Menghapus semua karakter non-digit untuk mengonversi ke angka
    return parseFloat(value.replace(/\./g, ""));
}

// Menambahkan event listener pada semua input text
document.querySelectorAll('input[type="text"]').forEach((input) => {
    input.addEventListener("input", () => formatNumber(input));
});
