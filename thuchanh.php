<?php
//Bài 1
function isPrime($n) {
    if ($n <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}
echo "Các số nguyên tố từ 1 đến 100 là: ";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
//Bài 2
// Tạo một mảng kết hợp chứa thông tin về sản phẩm
$products = array(
    array(
        'name' => 'Product 1',
        'price' => 10,
        'quantity' => 5
    ),
    array(
        'name' => 'Product 2',
        'price' => 15,
        'quantity' => 3
    ),
    array(
        'name' => 'Product 3',
        'price' => 20,
        'quantity' => 2
    )
);

// Hiển thị thông tin của tất cả sản phẩm trong mảng
echo "Thông tin sản phẩm:<br>";
foreach ($products as $product) {
    echo "Tên sản phẩm: " . $product['name'] . "<br>";
    echo "Giá: $" . $product['price'] . "<br>";
    echo "Số lượng: " . $product['quantity'] . "<br>";
    echo "<br>";
}

// Viết hàm để tính tổng giá trị của tất cả sản phẩm
function calculateTotalValue($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product['price'] * $product['quantity'];
    }
    echo "Tổng giá trị của tất cả sản phẩm: $totalValue";
}

// Tính tổng giá trị của tất cả sản phẩm
calculateTotalValue($products);
?>