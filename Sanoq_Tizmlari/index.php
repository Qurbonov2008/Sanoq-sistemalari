<?php


// 10 lik sanoq sistemasidan 2 lik sanoq sistemasiga o'tish uchun quydagi kod yoziladi

function DecimalToBinary($decimal)
{
    return decbin($decimal);
}

// 2 likdan 10 likga o'tish uchun funksiya

function BinaryToDecimal($binary)
{
    return bindec($binary);
}



$decimal = 171; // bu joyga 10 likda istalgan soni yozing u sizga 2 likga o'tkazib beradi
$binary = 1111011; // bu joyga ham faqat 2 likda istalgancha raqam yozing

echo "$decimal soni 2 likda " . DecimalToBinary($decimal) . "\n";
echo "$binary soni 10 likda " . BinaryToDecimal($binary);

// Agar sizga keying mavzu qiziq bo'lsa Memiry_size.md ga kiring







