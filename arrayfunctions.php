<?php

$products = array(
    ['name' => 'Laptop', 'price' => 1200, 'quantity' => 5],
    ['name' => 'Smartphone', 'price' => 800, 'quantity' => 10],
    ['name' => 'Headphones', 'price' => 100, 'quantity' => 20],
    ['name' => 'Mouse', 'price' => 20, 'quantity' => 30],
    ['name' => 'Keyboard', 'price' => 50, 'quantity' => 15]
);

echo "Total numbers of products: " . count($products) ."<br>";

$productsAssoc = array_column($products, "name");

echo "<pre>Product with id 0:";
print_r(array_slice($productsAssoc,0 ,1));
echo "</pre>";

echo "<pre>";
print_r($products[0]);
array_splice($products, 0, 1, [["name"=> "Desktop", "price"=> 100,"quantity"=> 20]]);
print_r($products);
echo "</pre>";

$totalValue = array_reduce($products, function($carry, $product) {
    return $carry + ($product['price'] * $product['quantity']);
}, 0);
echo "Total value of all products: $" . $totalValue . "<br>";

sort($products);
echo "Products sorted by default:<pre>";
print_r($products);
echo "</pre>";

usort($products, function($a, $b) {
    return $a['price'] - $b['price'];
});
echo "Products sorted by price (ascending order): <pre>";
print_r($products);
echo "</pre>";

$filteredProducts = array_filter($products, function($product) {
    return $product["quantity"] <  20 ;
});
echo "Products with quantity less than 20: <pre>";
print_r($filteredProducts);
echo "</pre>";

echo "Product with the highest price: <pre>";
print_r(max($products));
echo "</pre>";

echo "Product with the lowest quantity: <pre>";
print_r(min($products));
echo "</pre>";

echo "Values of the products array: <pre>";
print_r(array_values($products));
echo "</pre>";

$quantities = array_column($products,"quantity");
echo "Sum of product quantities: " . array_sum($quantities) . "<br>";
echo "Product with ID 4 exists: " . (isset($productsAssoc[4]) ? 'Yes' : 'No') . "<br>";

echo "Flipped array of product quantities: <pre>";
print_r(array_flip($quantities));
echo "</pre>";

echo "Unique product quantities: ";
echo implode(", ", array_unique($quantities)) . "<br>";

$reversedProducts = array_reverse($products);
echo "Reversed order of products: <pre>";
print_r($reversedProducts);
echo "</pre>";