
function idelVer1(id_product, img_url, name_product, rating,
    new_price, old_price, description) {

        
        

    document.getElementById("img-quick").src = img_url;
    document.getElementById("product-name-quick").innerHTML = name_product;

    document.getElementById("new-price-quick").innerHTML = new_price + " ₽";
    document.getElementById("quick-desc").innerHTML = description;
};

function addToCart(elem){
    document.cookie = addCoo(elem);
    
}

function addCoo(elem){
    if(elem.id < 0){
        return "product" + 100 + "=" + 100;
    }
    return "product" + elem.id + "=" + elem.id;
}

function SumProductIdel() {
    sum = 0;
    buy_product = '';
    product = document.getElementsByClassName('product-price');
    nameProduct = document.getElementsByClassName('product-name');
    for (i = 0; i < product.length; i++) {
        buy_product += i + 1 + '. ' + nameProduct[i].textContent + '-               -\n';
        // console.log(buy_product);
        sum += Number(product[i].textContent.slice(0, product[i].textContent.length - 1));
    }

    user = sessionStorage.getItem("idUsers");
    document.getElementById("amount_cart").textContent = sum + '₽';
    return sum;
}

function deleteFromCartIdel(elem) {
    let idProduct = elem.id;
    document.cookie = 'product' + idProduct + '= ; expires = Thu, 01 Jan 1970 00:00:00 GMT';
    let tr = document.getElementById(idProduct + "p");
    tr.remove();
};


module.exports = addCoo; 

function idelVer2() {

    alert(  "<div role=\"tabpanel\" id=\"sheet\" class=\"product__tab__content fade\">"+
    "<div class=\"pro__feature\">"+
        "<h2 class=\"title__6\">Data sheet</h2>" +
        "<ul class=\"feature__list\">" +
            "<?" +
            "$queryChars = 'select сharacteristic.NameСharacteristic, product_properties.Value from product_properties join сharacteristic"+
             "on сharacteristic.IdСharacteristic = product_properties.IdCharacteristic"+
              "where idproduct = ' . $q[3] . '';"+
            "$resultChars = mysqli_query($db, $queryChars);"+
            "while ($q = mysqli_fetch_array($resultChars)) {"+
                "if ($q[0] != 'img') {"+
            "?><li><i class=\"zmdi zmdi-play-circle\"></i><?= $q[0] ?> : <?= $q[1] ?></li><?"+
             "                                                                               }"+
                                                                                        "}"+
                                                                                                "?>"+
        "</ul>"+
    "</div>"+
"</div>");
    document.getElementById("quick-desc").innerHTML =   
        "<div role=\"tabpanel\" id=\"sheet\" class=\"product__tab__content fade\">"+
                                    "<div class=\"pro__feature\">"+
                                        "<h2 class=\"title__6\">Data sheet</h2>" +
                                        "<ul class=\"feature__list\">" +
                                            "<?queryChars = 'select сharacteristic.NameСharacteristic, product_properties.Value from product_properties join сharacteristic"+
                                             "on сharacteristic.IdСharacteristic = product_properties.IdCharacteristic"+
                                              "where idproduct = ' . $q[3] . '';"+
                                            "$resultChars = mysqli_query($db, $queryChars);"+
                                            "while ($q = mysqli_fetch_array($resultChars)) {"+
                                                "if ($q[0] != 'img') {"+
                                            "?><li><i class=\"zmdi zmdi-play-circle\"></i><?= $q[0] ?> : <?= $q[1] ?></li><?"+
                                             "                                                                               }"+
                                                                                                                        "}"+
                                                                                                                                "?>"+
                                        "</ul>"+
                                    "</div>"+
                                "</div>"
    ;
    



}


{/* <div role="tabpanel" id="sheet" class="product__tab__content fade">
                                    <div class="pro__feature">
                                        <h2 class="title__6">Data sheet</h2>
                                        <ul class="feature__list">
                                            <?
                                            $queryChars = 'select сharacteristic.NameСharacteristic, product_properties.Value from product_properties join сharacteristic
                                             on сharacteristic.IdСharacteristic = product_properties.IdCharacteristic
                                              where idproduct = ' . $q[3] . '';
                                            $resultChars = mysqli_query($db, $queryChars);
                                            while ($q = mysqli_fetch_array($resultChars)) {
                                                if ($q[0] != 'img') {
                                            ?><li><i class="zmdi zmdi-play-circle"></i><?= $q[0] ?> : <?= $q[1] ?></li><?
                                                                                                                            }
                                                                                                                        }
                                                                                                                                ?>
                                        </ul>
                                    </div>
                                </div> */}