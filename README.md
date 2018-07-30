/**
 * How to use it
 */

/**
 * create warehouse which can be accessed by passport, Valya checks
 * for Zina: WarehouseId::WAREHOUSE_BY_PASSPORT_ZINA
 *
 * for robot and card control:
 * $warehouse = WarehouseHelper::createWarehouse(
 *      WarehouseId::WAREHOUSE_BY_CARD,
 *      new Card(),
 *      new CardAccessManager()
 * );
 *
 */
$warehouse = WarehouseHelper::createWarehouse(
    WarehouseId::WAREHOUSE_BY_PASSPORT_VALYA,
    new Passport(),
    new PassportAccessManager()
);

/**
 * if passport is good, add products to warehouse, get amount, get products, take products
 */
if ($warehouse->hasAccess()) {

    $warehouse->addProducts([
        new SomeProduct(1),
        new SomeProduct(2),
        new SomeProduct(3),
        new SomeProduct(4),
    ]);

    // get available product list
    $warehouse->getProducts();

    // take products from warehouse
    $taken_products = $warehouse->takeProductsById([1, 2]);

    print_r('<pre>');
    print_r($taken_products);
    print_r('</pre>');

}


print_r('<pre>');
print_r($warehouse);
print_r('</pre>');


print_r('<pre>');
print_r('Amount of products = ' . $warehouse->getCountProducts());
print_r('</pre>');
